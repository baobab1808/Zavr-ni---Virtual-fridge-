<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:bold; font-size:30px; font-family:'Open Sans'">
            {{$item->food_name}}
        </h2>
    </x-slot>

    <div class="py-12" style=" justify-content:center; text-align:center; background-color:rgba(255, 255, 204, 0.9)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-xl sm:rounded-lg" style="border-radius:25px;background-color:rgba(255, 204, 0, 0.55);">
                <h1 style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Kategorija: {{$item->category}}</br></br></h1>
                <h1 style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Količina: {{$item->quantity}}
                {{$item->measurement_unit}}</br></br></h1>
            </div>
            <hr>
            <div style="text-align:center; margin-top: 30px">
                <a href="/hladnjak/{{$item->id}}/edit" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px; float:left; width:150px;' > Uredi </a>
            </div>
            {!!Form::open(['route' => ['hladnjak.destroy', $item->id], 'method' => 'POST', 'class'=> 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Obriši', ['class' => 'btn btn-danger btn-rounded' , 'style' => 'background-color:red; border-color:black; color:black; font-family:"Open Sans"; font-weight:bold; width:150px; font-size:20px; float:right;color:white'])}}
            {!!Form::close()!!}
        </div>
        <div style="text-align:center; margin-top: 150px">
                <a href="/hladnjak" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px' > Natrag </a>
        </div>
    </div>
</x-app-layout>