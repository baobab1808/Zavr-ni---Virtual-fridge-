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
            Uredi namirnicu: {{$item->food_name}}
        </h2>
    </x-slot>

    <div class="py-12" style="display:flex; justify-content:center; text-align:center; background-color:rgba(255, 255, 204, 0.9)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg" style="border-radius:25px;background-color:rgba(255, 204, 0, 0.55);">
                {!! Form::open(['route' => ['hladnjak.update', $item->id], 'method' => 'POST']) !!}
                    <div class = "form-group" style="width:350px">
                        {{Form::label('category', 'Kategorija')}}
                        {{Form::select('category',[
                            'brašno' => 'Brašno',
                            'grickalice' => 'Grickalice',
                            'jaja' => 'Jaja',
                            'kiseliš' => 'Kiseliš',
                            'kruh' => 'Kruh',
                            'masti, ulja i ocat' => 'Masti, ulja i ocat',
                            'meso' => 'Meso',
                            'mliječni proizvodi' => 'Mliječni proizvodi',
                            'namazi' => 'Namazi',
                            'orašasti plodovi' => 'Orašasti plodovi',
                            'pića' => 'Pića',
                            'povrće' => 'Povrće',
                            'riba' => 'Riba',
                            'riža' => 'Riža',
                            'slatko' => 'Slatko',
                            'suhomesnati proizvodi' => 'Suhomesnati proizvodi',
                            'tjestenina' => 'Tjestenina',
                            'umaci' => 'Umaci',
                            'voće' => 'Voće',
                            'začini' => 'Začini',
                            'žitarice' => 'Žitarice',
                            'ostalo' => 'Ostalo',], $item->category, ['name' =>'category', 'id'=>'category','class' => 'selector form-control', 'placeholder'=> 'Kategorija','size'=>'1' , 'style' => 'border-radius:25px; border: 2px solid black;']
                        )}}
                    </div>
                    <div class = "form-group">
                        {{Form::label('food_name', 'Namirnica')}}<br/>
                        <select name ='food_name', id='food_name',class = 'selectpicker form-control', placeholder='Namjernica', size="1", style = 'border-radius:25px; border: 2px solid black;'>
                                    @php
                                        $cat = null;
                                    @endphp
                                    <option value = "{{$item->food_name}}" selected> {{$item->food_name}}</option>
                                    @foreach($ing as $in)
                                        @if($in['category'] != $cat)
                                            @if($cat !== null)
                                                </optgroup>
                                            @endif
                                            @php($cat = $in['category'])
                                            <optgroup label = "{{$in->category}}">
                                        @endif
                                        <option value = "{{$in->food_name}}">{{$in->food_name}}</option>
                                    @endforeach
                                </optgroup>
                            </select>
                    </div>
                    <div class ="form-group">
                        {{Form::label('quantity', 'Količina')}}
                        {{Form::number('quantity', $item->quantity, ['class' => 'form-control', 'placeholder'=> 'Količina', 'step' => '0.01' ,'size'=>'1' , 'style' => 'border-radius:25px; border: 2px solid black;'])}}
                        {{Form::select('measurement_unit',[
                            'kg' => 'kg',
                            'g' => 'g',
                            'L' => 'L',
                            'mL' => 'mL',
                            'kom' => 'kom'
                            ],$item->measurement_unit, ['id'=>'measurement_unit','class' => 'selector form-control', 'placeholder'=> 'Mjerna jedinica', 'size'=>'1' , 'style' => 'border-radius:25px; border: 2px solid black;'])}}
                    </div>
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Spremi', ['class' => 'btn btn-primary btn-rounded', 'style' => 'background-color:black; border-color:black; color:white; font-family:"Open Sans"; font-weight:bold; width:150px; font-size:20px;'])}}
                {!! Form::close() !!}
            </div>
            <div style="text-align:center; margin-top: 30px">
                <a href="/hladnjak" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px' > Natrag </a>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('category').addEventListener('click', onClickHandler);
        document.getElementById('category').addEventListener('mousedown', onMouseDownHandler);
        document.getElementById('food_name').addEventListener('click', onClickHandler);
        document.getElementById('food_name').addEventListener('mousedown', onMouseDownHandler);
        document.getElementById('measurement_unit').addEventListener('click', onClickHandler);
        document.getElementById('measurement_unit').addEventListener('mousedown', onMouseDownHandler);
        

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