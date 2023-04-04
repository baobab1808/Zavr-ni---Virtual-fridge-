<div>
    @if(count($content) > 0)
        <table class="table text-center">   
            @foreach($content as $item)
                        <div style="display:block">
                                <tr > 
                                    <!--<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>-->  
                                    <td style="text-aling:center; vertical-align:middle;">
                                        <div style=" background-color:rgba(255, 255, 204, 0.9); border-radius:25px; border: 2px dashed black;">
                                            <h1 style="font-size:30px; font-weight:bold; font-family:'Ribeye Marrow'"><a href="/proba/{{$item[0]}}">{{$item[1]}}</a></h1><br/>
                                            <h6 style="font-size: 20px; font-family: Open Sans"><b>Porcije: {{$item[7]}}</b></h6><br/>
                                            @if($item[6] == 'min')
                                                <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: {{(int)$item[5]}}{{$item[6]}}</h6><br/>
                                            @else
                                                <h6 style="font-size: 20px; font-family: Open Sans">Vrijeme: {{$item[5]}}{{$item[6]}}</h6><br/>
                                            @endif
                                            <small><b>Recept napisao: <i>{{$item[3]}}</i></b></small>
                                        <div>
                                    </td>
                                    <td style="margine-left:50%; background-color:rgba(255, 204, 0, 0.45)">                                     
                                        <a href="/proba/{{$item[0]}}"><img style="width:100%; height:auto; max-width:50vw" src="/storage/cover_images/{{$item[4]}}" style="float:right"></a>     
                                    </td>
                                    <!--<td>&emsp;&emsp;&emsp;&emsp;&emsp;</td>-->

                                <tr>
                            
                        </div>   
            @endforeach
        </table>
    @else
        <p>Trenutno nemaš napisane recepte.</p>
    @endif
</div>