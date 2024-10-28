<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <div id="bbb" class="aaaWrapper" style="width: 98vw; height: 80vh; background: #dddddd; position: absolute; display: none; overflow-y: auto; overflow-x: auto;" onclick="bbbWrapper(this)">
        <div id="aaa" style="width: 80%; height: 80%; position: absolute; z-index: 100; display: none;"></div>
    </div>
    
    @if(isset($allPokemonList))
        <form action="{{route('own-pokemon-complete-edit-pokemon-sleep-edit')}}" method="post">
            @csrf
            <table>
                <tr>
                    <th>編集済み</th><th>id</th><th>画像</th><th>ポケモン名</th><th>ニックネーム</th><th>sp</th><th>lv</th><th>食材lv1</th><th>食材lv30</th><th>食材lv60</th><th>メインスキル</th><th>サブスキルlv1</th><th>サブスキルlv25</th><th>サブスキルlv50</th><th>サブスキルlv75</th><th>サブスキルlv100</th><th>性格</th><th>備考</th>
                </tr>
                @foreach($allPokemonList as $apl)
                    <tr id="tr{{$loop->index}}">
                        <td><input id="edit{{$loop->index}}" type="checkbox" ></td>
                        <td>
                            <select name="id[]">
                                <option selected>{{$apl->id}}</option>
                            </select>
                        </td>
                        @if($apl->remarks == "色違い")
                            <td><img src="{{asset('storage')}}/{{$apl->shiny_image_path}}" alt="{{$apl->own_pokemon_name}}"></td>
                        @else
                            <td><img src="{{asset('storage')}}/{{$apl->image_path}}" alt="{{$apl->own_pokemon_name}}"></td>
                        @endif
                        <td>{{$apl->own_pokemon_name}}</td>
                        <td onclick="test(this)"><input type="text" value="{{$apl->nickname}}" style="width: 80px;" name="nickname[]"></td>
                        <td><input type="text" value="{{$apl->sp}}" style="width: 50px" name="sp[]"></td>
                        <td><input type="text" value="{{$apl->lv}}" style="width:30px;" name="lv[]"></td>
                        <td>{{$apl->food_lv1}}</td>
                        <td>
                            <select name="food_lv30[]">
                                @if($foodlv30s[$loop->index]->food1 == $apl->food_lv30)
                                    <option selected>{{$foodlv30s[$loop->index]->food1}}</option>
                                @else
                                    <option>{{$foodlv30s[$loop->index]->food1}}</option>
                                @endif

                                @if($foodlv30s[$loop->index]->food2 == $apl->food_lv30)
                                    <option selected>{{$foodlv30s[$loop->index]->food2}}</option>
                                @else
                                    <option>{{$foodlv30s[$loop->index]->food2}}</option>
                                @endif
                            </select>
                        </td>
                        <td>
                            <select name="food_lv60[]">
                                @if($foodlv60s[$loop->index]->food1 == $apl->food_lv60)
                                    <option selected>{{$foodlv60s[$loop->index]->food1}}</option>
                                @else
                                    <option>{{$foodlv60s[$loop->index]->food1}}</option>
                                @endif

                                @if($foodlv60s[$loop->index]->food2 == $apl->food_lv60)
                                    <option selected>{{$foodlv60s[$loop->index]->food2}}</option>
                                @else
                                    <option>{{$foodlv60s[$loop->index]->food2}}</option>
                                @endif

                                @if($foodlv60s[$loop->index]->food3 == $apl->food_lv60)
                                    <option selected>{{$foodlv60s[$loop->index]->food3}}</option>
                                @else
                                    <option>{{$foodlv60s[$loop->index]->food3}}</option>
                                @endif
                            </select>
                        </td>
                        <td>{{$apl->main_skill}}</td>
                        <td>
                            <select name="sub_skill_lv1[]">
                                @foreach($allSubSkills as $allss)
                                    @if($allss->sub_skill == $apl->sub_skill_lv1)
                                        <option selected>{{$allss->sub_skill}}</option>
                                    @else
                                        <option>{{$allss->sub_skill}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="sub_skill_lv25[]">
                                @foreach($allSubSkills as $allss)
                                    @if($allss->sub_skill == $apl->sub_skill_lv25)
                                        <option selected>{{$allss->sub_skill}}</option>
                                    @else
                                        <option>{{$allss->sub_skill}}</option>
                                    @endif
                                @endforeach
                            </select>    
                        </td>
                        <td>
                            <select name="sub_skill_lv50[]">
                                @foreach($allSubSkills as $allss)
                                    @if($allss->sub_skill == $apl->sub_skill_lv50)
                                        <option selected>{{$allss->sub_skill}}</option>
                                    @else
                                        <option>{{$allss->sub_skill}}</option>
                                    @endif
                                @endforeach
                            </select>    
                        </td>
                        <td>
                            <select name="sub_skill_lv75[]">
                                @foreach($allSubSkills as $allss)
                                    @if($allss->sub_skill == $apl->sub_skill_lv75)
                                        <option selected>{{$allss->sub_skill}}</option>
                                    @else
                                        <option>{{$allss->sub_skill}}</option>
                                    @endif
                                @endforeach
                            </select>    
                        </td>
                        <td>
                            <select name="sub_skill_lv100[]">
                                @foreach($allSubSkills as $allss)
                                    @if($allss->sub_skill == $apl->sub_skill_lv100)
                                        <option selected>{{$allss->sub_skill}}</option>
                                    @else
                                        <option>{{$allss->sub_skill}}</option>
                                    @endif
                                @endforeach
                            </select>    
                        </td>
                        <td>
                            <select name="personality[]">
                                @foreach($allPersonalities as $ap)
                                    @if($ap->personality == $apl->personality)
                                        <option selected>{{$ap->personality}}</option>
                                    @else
                                    <option>{{$ap->personality}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                        <td><input type="text" value="{{$apl->remarks}}" name="remarks[]"></td>
                    </tr>
                @endforeach
            </table>
            <div onclick="confirmTest()" style="position: fixed; bottom: 5%; right: 20%; background: red;">更新確認</div>
            <button id="updateButton" type="submit" style="position: fixed; bottom: 5%; right: 5%;">更新</button>
        </form>
    @endif
</div>



<script>
    function test(event){

        rowSelect = document.querySelectorAll('select')

        
        rowInput = document.querySelectorAll("input");
        rowInputNumber = rowInput.length;
        console.log(rowInput.length);
        // /*
        for(i=1, j=0, rowNumber=1; i<=rowInputNumber-1; i++, j++, rowNumber++){
            if(rowInput[i].checked != true){
                console.log(rowNumber+"行目のcheckboxはチェックされていません");
                rowInput[i].disabled = true;
                i++;
                rowInput[i].disabled = true;
                i++;
                rowInput[i].disabled = true;
                i++;

                rowSelect[j].disabled = true;
                j++
                rowSelect[j].disabled = true;
                j++
                rowSelect[j].disabled = true;
                j++
                rowSelect[j].disabled = true;
                j++
                rowSelect[j].disabled = true;
                j++
                rowSelect[j].disabled = true;
                j++
                rowSelect[j].disabled = true;
                j++
                rowSelect[j].disabled = true;
                j++
                rowSelect[j].disabled = true;


                rowInput[i].disabled = true;
                i++;
                rowInput[i].disabled = true;
            }else{
                i=i+4;
                j=j+8;
            }
            
            
        };
        // */
        
    }

    function confirmTest(){
        confirmBlockElementbbb = document.getElementById('bbb');
        confirmBlockElementbbb.style.display = "block";
        confirmBlockElement = document.getElementById('aaa');
        confirmBlockElement.style.display = "block";

        testtest = document.querySelectorAll('input[type="checkbox"]:checked');
        


        for(i=0; i<testtest.length; i++){
            rowInput = testtest[i].parentNode.parentElement.querySelectorAll("td input");
            rowSelectedOption = testtest[i].parentNode.parentElement.querySelectorAll("td select option[selected]");
            
            rowImg = testtest[i].parentNode.parentElement.querySelector("td img");
            console.log(rowImg.currentSrc);
            rowImgElement = document.createElement('img');
            rowImgElement.src = rowImg.currentSrc;


            


            id = "<p>id:"+rowSelectedOption[0].innerText+"</p>";
            nickname = "<p>nickname:"+rowInput[1].value+"</p>";
            sp = "<p>sp:"+rowInput[2].value+"</p>";
            lv = "<p>lv:"+rowInput[3].value+"</p>";
            food_lv30 = "<p>food_lv30:"+rowSelectedOption[1].innerText+"</p>";
            food_lv60 = "<p>food_lv60:"+rowSelectedOption[2].innerText+"</p>";
            sub_skill_lv1 = "<p>sub_skill_lv1:"+rowSelectedOption[3].innerText+"</p>";
            sub_skill_lv25 = "<p>sub_skill_lv25:"+rowSelectedOption[4].innerText+"</p>";
            sub_skill_lv50 = "<p>sub_skill_lv50:"+rowSelectedOption[5].innerText+"</p>";
            sub_skill_lv75 = "<p>sub_skill_lv75:"+rowSelectedOption[6].innerText+"</p>";
            sub_skill_lv100 = "<p>sub_skill_lv100:"+rowSelectedOption[7].innerText+"</p>";
            personality = "<p>personality:"+rowSelectedOption[8].innerText+"</p>";
            remarks = "<p>remarks:"+rowInput[4].value+"</p>";

            
            console.log("id:"+rowSelectedOption[0].innerText);
            console.log("nickname:"+rowInput[1].value);
            console.log("sp:"+rowInput[2].value);
            console.log("lv:"+rowInput[3].value);
            console.log("food_lv30:"+rowSelectedOption[1].innerText);
            console.log("food_lv60:"+rowSelectedOption[2].innerText);
            console.log("sub_skill_lv1:"+rowSelectedOption[3].innerText);
            console.log("sub_skill_lv25:"+rowSelectedOption[4].innerText);
            console.log("sub_skill_lv50:"+rowSelectedOption[5].innerText);
            console.log("sub_skill_lv75:"+rowSelectedOption[6].innerText);
            console.log("sub_skill_lv100:"+rowSelectedOption[7].innerText);
            console.log("personality:"+rowSelectedOption[8].innerText);
            console.log("remarks:"+rowInput[4].value);


            console.log("");


            confirmBlockElement.appendChild(testtest[i].parentNode.parentNode);


            // confirmBlockElement.appendChild(testtest[i].parentNode.parentNode);
            // confirmBlockElement.appendChild(rowImgElement);


            pElement = document.createElement('p');
            pElement.innerHTML = id+" "+nickname+" "+sp+" "+lv+" "+food_lv30+" "+food_lv60
                                   +" "+sub_skill_lv1+" "+sub_skill_lv25+" "+sub_skill_lv50
                                   +" "+sub_skill_lv75+" "+sub_skill_lv100+" "
                                   +personality+" "+remarks;
            // confirmBlockElement.appendChild(pElement);
        }
        
    }

    function bbbWrapper(element){
        console.log(element);
    }

    
    document.querySelectorAll('select').forEach(function(select){

        select.addEventListener("click", function(){
            // console.log(select.parentNode.parentNode.querySelector('input').id);
            editId = select.parentNode.parentNode.querySelector('input').id;
            document.getElementById(editId).checked = true;
            
        });
    });

    document.querySelectorAll('input').forEach(function(input){

        input.addEventListener("click", function(){
            // console.log(select.parentNode.parentNode.querySelector('input').id);
            editId = input.parentNode.parentNode.querySelector('input').id;
            document.getElementById(editId).checked = true;
            
        });
    });

    document.getElementById('bbb').addEventListener('click', function(event){
        if(event.target === this){
            
        }else{
            document.getElementById('bbb').style.display = "none";
        }
    });
</script>