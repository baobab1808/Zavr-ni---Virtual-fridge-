<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Proba;
use App\Models\Ingredients;
use App\Models\Hladnjak;
use App\Models\IngredientsProba;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = [];
        $b = [];
        $c = [];
        
        $user_id = auth()->user()->id;
        $hladnjak = DB::table('hladnjaks')->select('food_name', 'quantity', 'measurement_unit')->where('user_id', '=', $user_id)->get();
        
        $j = 0;
        $broj = count(Proba::all())+1;
        for($i = 2; $i<=$broj; $i++){
            $content = Proba::find($i);
            $ing = IngredientsProba::where('proba_id', '=', $content)->orderBy('proba_id', 'asc')->orderBy('ingredients_id', 'asc');
            foreach($content->ingredients as $in){
                $a[$i][$j] = $in->pivot->food->food_name; 
                $b[$i][$j] = $in->pivot->quantity; 
                $c[$i][$j] = $in->pivot->measurement_unit; 
                $j++; 
            }
            $j = 0;
        }
        $food = [];
        $qua = [];
        $mes = [];
        $i = 0;
        foreach($hladnjak as $hlad){
            $food[$i] = $hlad->food_name; 
            $qua[$i] = $hlad->quantity;
            $mes[$i] = $hlad->measurement_unit; 
            $i++;
        }
        

        $var = 0;
        $l = 0;
        $nes2 = count($food);
        $index=[];
        $br_rec = count($a)+1;
        
        for($i = 2; $i<=$br_rec; $i++){
            $nes = count($a[$i]);
            for($j = 0; $j < $nes; $j++){
                for($k = 0; $k < $nes2; $k++){
                    if($food[$k] == $a[$i][$j]){
                        if($mes[$k] == $c[$i][$j]){
                            if($qua[$k] >= $b[$i][$j]){
                                $var++;
                            }
                        }elseif($mes[$k] != $c[$i][$j] && $mes[$k] == 'kg' && $c[$i][$j] == 'g'){
                            $b[$i][$j] *= 0.001;
                            if($qua[$k] >= $b[$i][$j]){
                                $var++;
                            }
                        }elseif($mes[$k] != $c[$i][$j] && $mes[$k] == 'L' && $c[$i][$j] == 'mL'){
                            $b[$i][$j] *= 0.001;
                            if($qua[$k] >= $b[$i][$j]){
                                $var++;
                            }
                        }
                    }
                }

            }
            if($var == $nes){
                $index[$l] = $i;
            }
            $l++;
            $var = 0; 
        }
        
         
        if(!$index){
            $index = ['-1', '-1'];
        }

        $c2 = implode(",", $index);

        $content = DB::select(DB::raw("SELECT * FROM probas WHERE id IN (".$c2.") ORDER BY  rec_category, title ASC;"));

        $content2 = [];
        foreach($content as $item){
            $jednaStavka = [$item->id, $item->title, $item->rec_category, $item->author, $item->cover_image, $item->time, $item->measurement, $item->servings];
            array_push($content2, $jednaStavka);
        }

        return view('dashboard')->with('content', $content2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
