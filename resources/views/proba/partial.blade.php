<!--<table name ='food_name', id='food_name' for='food_name'>-->   
    <table>
                            @php
                                $cat = null;
                            @endphp
                                <!--<option value = "" disable selected hidden> Odaberi namjernicu</option>-->
                                @foreach($in as $i)
                                    <tr>
                                        <td>
                                        @if($i->category != $cat)
                                            @if($cat !== null)
                                                </optgroup>
                                            @endif
                                            @php($cat = $i->category)
                                            <optgroup label = "{{$i->category}}">
                                        @endif
                                        </td>
                                        <td>
                                            <input  data-id="{{$i->id}}" type="checkbox" class="ingredient-enable" 
                                            onclick="if(!(this.checked)){document.getElementByDataId('area').getAttribute('data-id').style.display='none'; document.getElementByDataId('area').getAttribute('data-id').style.visibility = 'hidden';}
                                            else{document.getElementByDataId('area').getAttribute('data-id').style.display='inline'; document.getElementByDataId('area').getAttribute('data-id').style.visibility = 'visible';}">
                                        </td>
                                        <td>
                                            <!--<option value = "{{$i->food_name}}">{{$i->food_name}}</option>-->
                                            {{$i->food_name}} &nbsp
                                        </td>
                                        <td id="hide" >
                                            <input  data-id="{{$i->id}}" name="quantity" type="number" id="area" class="ingredient-amount dorm-control" placeholder="Količina" >
                                	    </td>
                                        <td>
                                            <!--<input data-id="{{$i->id}}" name="in[{{$i->id}}]" type="text" class="ingredient-amount dorm-control" placeholder="Mjerna jedinica" disable>-->
                                            {{Form::select('measurement_unit',[
                                                'kg' => 'kg',
                                                'g' => 'g',
                                                'L' => 'L',
                                                'mL' => 'mL',
                                                'num' => 'num'
                                                ],'', ['id'=>'measurement_unit', 'name'=>'measurement_unit' ,'data-id'=> $i->id,'class' => 'ingredient-amount form-control', 'placeholder'=> 'Mjerna jedinica'])}}
                                        </td>
                                    </tr>
                                @endforeach
                            </optgroup>
                        </table>