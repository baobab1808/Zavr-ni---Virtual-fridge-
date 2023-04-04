<style>
    label{
        font-family:'Ribeye Marrow';
        font-weight: bold;
        font-size: 30px;
        
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:bold; font-size:30px; font-family:'Open Sans'">
            Uredi recept: {{$ing->title}}
        </h2>
    </x-slot> 

    <div class="py-12" style="display:flex; justify-content:center; text-align:center; background-color:rgba(255, 255, 204, 0.9)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg" style="border-radius:25px;background-color:rgba(255, 204, 0, 0.55)">
                {!! Form::open(['id'=>'form','route' => ['proba.update', $ing->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                <table style="display:flex; justify-content:center; margin-top:40px; text-align:center;">
                    <tr>
                        <td>
                            <div class = "form-group">
                                {{Form::label('title', 'Naslov')}}<br/>
                                <!--{{Form::text('food_name', '', ['class' => 'form-control', 'placeholder'=> 'Namjernica'])}}-->
                                {{Form::text('title', $ing->title, ['placeholder' => 'Naslov', 'style' => 'border-radius:25px; border: 2px solid black;'])}} <br/><br/>
                                {{Form::label('rec_category', 'Kategorija')}}
                                {{Form::select('rec_category',[
                                    'desert' => 'Desert',
                                    'doručak' => 'Doručak',
                                    'juha' => 'Juha',
                                    'kiseliš' => 'Kiseliš',
                                    'kruh' => 'Kruh',
                                    'meso' => 'Meso',
                                    'na žlicu' => 'Na žlicu',
                                    'namazi' => 'Namazi',
                                    'ostalo' => 'Ostalo',
                                    'pekarski proizvodi' => 'Pekarski proizvodi',
                                    'pizza' => 'Pizza',
                                    'pića' => 'Pića',
                                    'prilog' => 'Prilog',
                                    'riba' => 'Riba',
                                    'rižoto' => 'Rižoto',
                                    'roštilj' => 'Roštilj',
                                    'salata' => 'Salata',
                                    'tjestenina' => 'Tjestenina',
                                    'umaci' => 'Umaci',
                                    'užina' => 'Užina',
                                    'vegetarijansko' => 'Vegetarijansko',],  $ing->rec_category, ['name' =>'rec_category', 'id'=>'rec_category','class' => 'selectpicker form-control', 'placeholder'=> 'Kategorija' , 'size'=>'1' , 'style' => 'border-radius:25px; border: 2px solid black;']
                                )}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class ="form-group">
                                {{Form::label('time', 'Vrijeme')}}
                                {{Form::number('time', $ing->time, ['class' => 'form-control', 'placeholder'=> 'Vrijeme', 'step' => '0.1', 'style' => 'border-radius:25px; border: 2px solid black;'])}}
                                {{Form::select('measurement',[
                                    'min' => 'min',
                                    'h' => 'h',
                                    ],$ing->measurement, ['class' => 'selectpicker form-control', 'placeholder'=> 'Mjerna jedinica' , 'style' => 'border-radius:25px; border: 2px solid black;'])}}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class ="form-group">
                                {{Form::label('servings', 'Porcija')}}  
                                {{Form::number('servings', $ing->servings, ['class' => 'form-control', 'placeholder'=> 'Porcija', 'step' => '1' , 'style' => 'border-radius:25px; border: 2px solid black;'])}}
                            </div>
                        </td>
                    </tr>
                </table>
                <div style="text-align:center">
                        {{Form::label('food_name', 'Namirnice')}}
                    </div>
                    <div class = "form-group" for="ingredients" style="display:flex; justify-content:center;">
                        <!--{{Form::label('food_name', 'Namirnice')}}<br/><br/>-->

                        <table name="food_name" id="food_name" style="display:flex; justify-content:center">
                            @php
                                $cat = null;
                            @endphp
                                @foreach($in as $i)
                                    <tr>
                                        <td>
                                        @if($i->category != $cat)
                                            @if($cat !== null)
                                                </optgroup>
                                            @endif
                                            @php($cat = $i->category)
                                            <h2 style="font-size:25px; text-transform:capitalize;"><optgroup label = "{{$i->category}}:"></h2>
                                        @endif
                                        </td>
                                        <td>
                                            <input id= "food_name[]" name="food_name[]" data-id="{{$i->id}}" type="checkbox" value="{{$i->food_name}}" class="ingredient-enable" style = 'border-radius:25px; border: 2px solid black;'>
                                        </td>
                                        <td >
                                            <h3 style="font-size:17px; font-family:'Open Sans'"><b>{{$i->food_name}}</b> &nbsp</h3>
                                        </td>
                                        <td id="hide" >
                                            <input name="quantity[]" id="quantity[]" data-id="{{$i->id}}" name="quantity" type="number"  class="ingredient-amount dorm-control" placeholder="Količina" step="0.01" style = 'border-radius:25px; border: 2px solid black;'>
                                	    </td>
                                        <td>
                                            {{Form::select('measurement_unit',[
                                                '---' => '---',
                                                'kg' => 'kg',
                                                'g' => 'g',
                                                'L' => 'L',
                                                'mL' => 'mL',
                                                'kom' => 'kom'
                                                ],'---', ['id'=>'measurement_unit[]', 'name'=>'measurement_unit[]' ,'data-id'=> $i->id,'class' => 'ingredient-amount form-control' ,'placeholder'=> 'Mjerna jedinica' , 'style' => 'border-radius:25px; border: 2px solid black;'])}}
                                        </td>
                                    </tr>
                                @endforeach                        
                            </optgroup>
                        </table>
                    </div>

                    <div class ="form-group">
                        {{Form::label('instructions', 'Upute')}}<br/>
                        {{Form::textarea('instructions', $ing->instructions, ['id'=>'editor1','class' => 'form-control', 'placeholder'=> 'Upute' ])}}
                    </div>
                    <div class ="form-group" style="float:left">
                        {{Form::file('cover_image', ['style' => 'font-family:"Open Sans"; font-weight:bold; width:250px; font-size:20px'])}}
                    </div><br/><br/>
                    <br/>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Spremi', ['class' => 'btn btn-primary btn-rounded', 'style' => 'background-color:black; border-color:black; color:white; font-family:"Open Sans"; font-weight:bold; width:250px; font-size:20px;'])}}
                {!! Form::close() !!}
            </div>
            <div style="text-align:center; margin-top: 30px">
                <a href="/proba" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px' > Natrag </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('rec_category').addEventListener('click', onClickHandler);
        document.getElementById('rec_category').addEventListener('mousedown', onMouseDownHandler);
        

        function onMouseDownHandler(e){
            var el = e.currentTarget;
            
            if(el.hasAttribute('size') && el.getAttribute('size') == '1'){
                e.preventDefault();    
            }
        }
        function onClickHandler(e) {
            var el = e.currentTarget; 

            if (el.getAttribute('size') == '1') {
                el.setAttribute('size', '4');
            }
            else {
                el.setAttribute('size', '1');
            }
        
        }
    </script>
</x-app-layout>