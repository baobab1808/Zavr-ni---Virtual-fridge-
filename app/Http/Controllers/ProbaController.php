<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Proba;
use App\Models\Ingredients;
use App\Models\IngredientsProba;
use App\Http\Requests\StoreRecipeRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class ProbaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $content = Proba::where('author_id', '=', $user_id)->orderBy('rec_category', 'asc')->orderBy('title', 'asc')->paginate(15);
        $content2 = [];
        foreach($content as $item){
            $jednaStavka = [$item->id, $item->title, $item->rec_category, $item->author, $item->cover_image, $item->time, $item->measurement, $item->servings];
            array_push($content2, $jednaStavka);
        }
        return view('proba.proba')->with('content', $content2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ing = Proba::all();
        $in = Ingredients::orderBy('category', 'asc')->orderBy('food_name', 'asc')->get();
        return view('proba.proba_create')->with('ing', $ing)->with('in', $in);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipeRequest $request)
    {
        $val = $this->validate($request, [
            'title' => 'required',
            'rec_category' => 'required',
            'time' => 'required|between:0,99.99',
            'measurement' => 'required',
            'servings' => 'required',
            'food_name' => 'required',
            'quantity' => 'required|between:0,99.99|nullable',
            'measurement_unit' => 'required',
            'instructions' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);

        $v1 = [];
        foreach($val['quantity'] as $v){
            if($v !== null){
                array_push($v1, $v);
            }
        }

        $v2 = [];
        foreach($val['measurement_unit'] as $v){
            if($v !== '---'){
                array_push($v2, $v);
            }
        }


        
        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }

        $recept = new Proba;
        $recept->title = $request->input('title');
        $recept->author = auth()->user()->name;
        $recept->author_id = auth()->user()->id;
        $recept->rec_category = $request->input('rec_category');
        $recept->instructions = $request->input('instructions');
        $recept->time = $request->input('time');
        $recept->measurement = $request->input('measurement');
        $recept->servings = $request->input('servings');
        $recept->cover_image = $fileNameToStore;
        $recept->save();

        $i = 0;
        foreach($val['food_name'] as $v){
            $hrana = Ingredients::where('food_name', '=', $v)->first();
            $novo = new IngredientsProba;
            $novo->ingredients_id = $hrana->id;
            $novo->proba_id = $recept->id;
            $novo->quantity = $v1[$i];
            $novo->measurement_unit = "$v2[$i]";
            $novo->save();
            $i++;
        }

        return redirect('/proba')->with('success', 'Dodan recept!');
    }

    public function filterRecursive($val){
        foreach ($val as &$v){
            if(is_array($v)){
                $v = this->filterRecursive($v);
            }
        }
        return array_filter($v);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ing = Proba::find($id);
        $user_id = auth()->user()->id;
        //$in = DB::table('ingredients_proba')->where('proba_id', '=', $ing)->value('ingredients_id');
        //$inge = DB::table('ingredients')->where('id', '=', $in)->value('food_name');
        //$ing->ingredients()->sync($inge);
        return view('proba.proba_show')->with('ing', $ing)->with('user_id', $user_id);;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ing = Proba::find($id);
        $in = Ingredients::orderBy('category', 'asc')->orderBy('food_name', 'asc')->get();
        $p = IngredientsProba::where('proba_id', '=', $id);
        return view('proba.proba_edit')->with('ing', $ing)->with('in', $in)->with('p', $p);
    }

    public function mapIngredients($ingredients){
        return collect($ingredients)->map(function ($i){
            return['quantity' => $i,
                    'measurement_unit' => $i,];
        });
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $val = $this->validate($request, [
            'title' => 'required',
            'rec_category' => 'required',
            'time' => 'required|between:0,99.99',
            'measurement' => 'required',
            'servings' => 'required',
            'food_name' => 'required',
            'quantity' => 'required|between:0,99.99|nullable',
            'measurement_unit' => 'required',
            'instructions' => 'required',
            'cover_image' => 'image|nullable|max:1999',
        ]);

        //return $val['food_name'];

        $v1 = [];
        foreach($val['quantity'] as $v){
            if($v !== null){
                array_push($v1, $v);
            }
        }

        $v2 = [];
        foreach($val['measurement_unit'] as $v){
            if($v !== '---'){
                array_push($v2, $v);
            }
        }

        //return $v2;
        
        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);

        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        

        $recept = Proba::find($id);
        $recept->title = $request->input('title');
        $recept->author = auth()->user()->name;
        $recept->author_id = auth()->user()->id;
        $recept->rec_category = $request->input('rec_category');
        $recept->instructions = $request->input('instructions');
        $recept->time = $request->input('time');
        $recept->measurement = $request->input('measurement');
        $recept->servings = $request->input('servings');
        $recept->cover_image = $fileNameToStore;
        $recept->save();

        $i = 0;
        //return($v1);

        DB::table('ingredients_proba')->where('proba_id', $recept->id)->delete();    

        foreach($val['food_name'] as $v){
            $hrana = Ingredients::where('food_name', '=', $v)->first();
            $novo = new IngredientsProba();
            $novo->ingredients_id = $hrana->id;
            $novo->proba_id = $recept->id;
            $novo->quantity = $v1[$i];
            $novo->measurement_unit = $v2[$i];
            $novo->save();

            //Ingredients::find($id)->update($request->all());


            $i++;
        }
        
        return redirect('/proba')->with('success', 'Ažuriran recept!');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Proba::find($id);
        $item->delete();
        return redirect('/proba')->with('success', 'Obrisan recept!');
    }
}
