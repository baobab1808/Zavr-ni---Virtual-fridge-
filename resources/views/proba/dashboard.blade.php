<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Recepti
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            @php
                $num_povrce = 0;
                $num_meso=0;
                $num_voce = 0;
                $num_muo = 0;
                $num_jaja = 0;
            @endphp
                @if(count($content) > 0)
                    @foreach($content as $item)
                        @if($item->rec_category == 'doručak')
                            @php($num_povrce++)
                            @if($item->category == 'doručak' && $num_povrce == 1)
                            <h1 style="font-size:20px; font-weight:bold">Doručak</h1>
                            <div class="well">
                                <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img style="width:10%" src="/storage/cover_images/{{$recept->cover_image}}">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h3><a href="/proba/{{$recept->id}}">{{$recept->title}} - {{$recept->author}}</a></h3>
                                        </div>
                                </div>
                            </div>
                            <small>Napisao {{$item->author}}</small>
                            @else
                                <div class="well">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img style="width:10%" src="/storage/cover_images/{{$recept->cover_image}}">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h3><a href="/proba/{{$recept->id}}">{{$recept->title}} - {{$recept->author}}</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <small>Napisao {{$item->author}}</small>
                            @endif
                        @endif
                        @if($item->rec_category == 'meso')
                            @php($num_meso++)
                            @if($item->rec_category == 'meso' && $num_meso == 1)
                            <h1 style="font-size:20px; font-weight:bold">Meso</h1>
                            <div class="well">
                                    <h3><a href="/proba/{{$item->id}}">{{$item->title}}</a></h3>
                            </div>
                            <small>Napisao {{$item->author}}</small>
                            @else
                                <div class="well">
                                    <h3><a href="/proba/{{$item->id}}">{{$item->title}}</a></h3>
                                </div>
                                <small>Napisao {{$item->author}}</small>
                            @endif
                        @endif
                    @endforeach
                    {{$content->links()}}
                @else
                    <p>Trenutno nemaš ponuđene recepte. Popuni hladnjak s namirnicama kako bi ti se prikazali recepti.</p>
                @endif
            </div>
            <a href="/hladnjak/create" class="btn btn-default"> Dodaj novu namjernicu</a>
        </div>
    </div>
</x-app-layout>
