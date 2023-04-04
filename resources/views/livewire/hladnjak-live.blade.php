<div>
    @if(count($content) > 0)
        <table class="table text-center">
            @foreach($content as $item)
                <div style="display:block">
                    <tr> 
                        <td style="text-aling:center; vertical-align:middle;">
                            <div style=" background-color:rgba(255, 255, 204, 0.9); border-radius:25px; border: 2px dashed black;">
                                <h1 style="font-size:30px; font-weight:900; font-family:'Ribeye Marrow'"><a href="/hladnjak/{{$item[0]}}">{{$item[1]}}: {{$item[3]}}{{$item[4]}}</a></h1><br/>
                            <div>
                        </td>
                        
                    <tr>
                
                </div>   
                
            @endforeach
        </table>
    @else
        <p style="text-align:center; font-size:30px; font-weight:bold; font-family:'Ribeye Marrow' ">Trenutno nemate niti jednu namirnicu u svojem virtualnom hladnjaku.</p>
    @endif
</div>
