<x-app-layout>
    <x-slot name="header">
        <div style="justify-content:center; text-align:center">
            <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow';">
                <u>{{$ing->title}}</u>
                <img style="margin-left:auto; margin-right:auto; width:50%;" src="/storage/cover_images/{{$ing->cover_image}}">
            </h1>
            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                <b style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Kategorija:</b> <i style="font-weight:bold; font-size:25px; text-transform:capitalize;font-family:'Open Sans'">{{$ing->rec_category}}</i>  
            </h3>
            <h3>
                @if($ing->measurement == 'min')
                    <b style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Vrijeme izrade: </b> <i style="font-weight:bold; font-size:25px; text-transform:capitalize; font-family:'Open Sans'">{{(int)$ing->time}}{{$ing->measurement}}</i> <br/>
                @else
                    <b style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Vrijeme izrade: </b> <i style="font-weight:bold; font-size:25px; text-transform:capitalize; font-family:'Open Sans'">{{$ing->time}}{{$ing->measurement}}</i> <br/>
                @endif
            <b style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Porcije: </b> <i style="font-weight:bold; font-size:25px; text-transform:capitalize; font-family:'Open Sans'">{{$ing->servings}}</i> <br/>
            <p><b style="font-weight:bold; font-size:30px; font-family:'Ribeye Marrow'">Namirnice: </b>  @foreach($ing->ingredients as $in)
                <i style="font-weight:bold; font-size:25px; font-family:'Open Sans'"> {{$in->pivot->food->food_name}}:{{$in->pivot->quantity}}{{$in->pivot->measurement_unit}}, </i>
                @endforeach
                
                </p>
            </h3>
        </div>
    </x-slot>

    <div class="py-12" style=" background-color:rgba(255, 255, 204, 0.9)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl sm:rounded-lg" style="font-weight:bold; font-size:25px; text-align:center; border-radius:25px;background-color:rgba(255, 204, 0, 0.55);"> 
                <div style="background-color:rgba(255, 255, 204, 0.9);margin-top:50px;border:2px dashed black; border-radius:25px">{!!$ing->instructions !!}</div></br></br>
            </div>
            <div style="margin-top:20px"><small style="font-size:17px;"><b>Napisao: <i style="font-family:'Open Sans'">{{$ing->author}}</i></b></br></br></small></div>
            <hr>
            @if(Auth::user()->id == $ing->author_id)
                <div style="text-align:center; margin-top: 30px">
                    <a href="/proba/{{$ing->id}}/edit" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px; float:left; width:150px;' > Uredi </a>
                </div>
                {!!Form::open(['route' => ['proba.destroy', $ing->id], 'method' => 'POST', 'class'=> 'pull-right', 'style' => 'float:right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Obriši', ['class' => 'btn btn-danger btn-rounded' , 'style' => 'background-color:red; border-color:black; color:black; font-family:"Open Sans"; font-weight:bold; width:150px; font-size:20px; float:right; color:white'])}}
                {!!Form::close()!!}
            @endif
        </div>
        <div style="text-align:center; margin-top: 150px">
                <a href="/proba" class="btn btn-primary btn-rounded" style = 'background-color:rgba(255, 204, 0, 0.55) ;border-color:black;  color:black; font-family:"Open Sans"; font-weight:bold; text-align:center;  font-size:20px' > Natrag </a>
        </div>
    </div>
</x-app-layout>