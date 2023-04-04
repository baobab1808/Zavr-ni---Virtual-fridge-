<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hladnjak;
use App\Models\Ingredients;
use App\Models\User;
use App\Http\Livewire\LivewireSelect;
use Illuminate\Support\Facades\DB;

class HladnjaciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$content = Hladnjak::all();
        //$content = Hladnjak::orderBy('category', 'asc')->get();
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $content = Hladnjak::where('user_id', '=', $user_id)->orderBy('category', 'asc')->orderBy('food_name', 'asc')->paginate(15);
        $content2 = [];
        foreach($content as $item){
            $jednaStavka = [$item->id, $item->food_name, $item->category, $item->quantity, $item->measurement_unit, $item->user_id];
            array_push($content2, $jednaStavka);
        }
        return view('proba.hladnjak')->with('content', $content2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ing = Ingredients::orderBy('category', 'asc')->orderBy('food_name', 'asc')->get();
        return view('proba.hladnjak_create')->with('ing', $ing);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'food_name' => 'required',
            'category' => 'required',
            'quantity' => 'required|between:0,99.99',
            'measurement_unit' => 'required'
        ]);
        $user_id = auth()->user()->id;

        $target = DB::table('hladnjaks')->where('user_id', '=', $user_id)->where('food_name', '=' ,  $request->food_name)->get()->first();
        $item = new Hladnjak;
        if($target === null){
            
            $item->food_name = $request->input('food_name');
            $item->category = $request->input('category');
            $item->quantity = $request->input('quantity');
            $item->measurement_unit = $request->input('measurement_unit');
            $item->user_id =  auth()->user()->id ;
            $item->save();
            return redirect('/hladnjak')->with('success', 'Dodana namirnica!');
        }else{
            $m_unit = $target->measurement_unit;
            $var = $target->quantity;
            $var2 = $request->input('quantity');
            if($target->measurement_unit === $request->input('measurement_unit')){
                $var += $request->input('quantity');
                if($var > 999){
                    $var *= 0.001;
                    if($target->measurement_unit === 'mL'){
                        $m_unit = 'L';
                    }elseif($target->measurement_unit === 'g'){
                        $m_unit = 'kg';
                    }
                }
            }else{
                if($target->measurement_unit === 'kg' && $request->input('measurement_unit') === 'g'){
                    $var2 *= 0.001;
                    $var+=$var2;
                    $m_unit = 'kg';
                }elseif($target->measurement_unit === 'g' && $request->input('measurement_unit') === 'kg'){
                    $var2 *= 1000;
                    $var+=$var2;
                    if($var > 999){
                        $var *= 0.001;
                        $m_unit = 'kg';
                    }else{
                        $m_unit = 'g';
                    }
                }elseif($target->measurement_unit === 'L' && $request->input('measurement_unit') === 'mL'){
                    $var2 *= 0.001;
                    $var+=$var2;
                    $m_unit = 'L';
                }elseif($target->measurement_unit === 'mL' && $request->input('measurement_unit') === 'L'){
                    $var2 *= 1000;
                    $var+=$var2;
                    if($var > 999){
                        $var *= 0.001;
                        $m_unit = 'L';
                    }else{
                        $m_unit = 'mL';
                    }
                }else{
                    return redirect('/hladnjak')->with('error', 'Kriva mjerna jedinica');
                }

            }
            $item->updateByname($request->food_name, array(
                'food_name'               => $request->input('food_name'),
                'category'            => $request->input('category'),
                'quantity'              => $var,
                'measurement_unit' => $m_unit,
                'user_id' =>  auth()->user()->id
            ));
            return redirect('/hladnjak')->with('success', 'Ažurirano');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Hladnjak::find($id);
        return view('proba.hladnjak_show')->with('item', $item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Hladnjak::find($id);
        $ing = Ingredients::orderBy('category', 'asc')->orderBy('food_name', 'asc')->get();
        return view('proba.hladnjak_edit')->with('item', $item)->with('ing', $ing);
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
        $this->validate($request, [
            'food_name' => 'required',
            'category' => 'required',
            'quantity' => 'required|between:0,99.99',
            'measurement_unit' => 'required'
        ]);

        $item = Hladnjak::find($id);
        $item->food_name = $request->input('food_name');
        $item->category = $request->input('category');
        $item->quantity = $request->input('quantity');
        $item->measurement_unit = $request->input('measurement_unit');
        $item->user_id = auth()->user()->id;
        $item->save();
        return redirect('/hladnjak')->with('success', 'Ažurirana namirnica!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Hladnjak::find($id);
        $item->delete();
        return redirect('/hladnjak')->with('success', 'Obrisana namirnica!');
    }
}
