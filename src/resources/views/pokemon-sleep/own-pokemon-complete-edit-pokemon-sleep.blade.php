<style>
    body{
        margin: 0;
    }

    .custom-modal-dialog{
        min-width: 90%;
    }
</style>



<!-- Bootstrap CSS（<head>内に追加）-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JavaScript（<body>閉じタグの直前に追加） -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog custom-modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">更新確認画面</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
                </div>
                <div class="modal-body">
                    <div id="aaa" class="row mx-auto" style="width: 100%;  height: 100%; background: green;">
                        
                    </div>
                </div>
            </div>
        </div>
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
                        <td><input type="text" value="{{$apl->nickname}}" style="width: 80px;" name="nickname[]"></td>
                        <td><input type="text" value="{{$apl->sp}}" style="width: 50px" name="sp[]"></td>
                        <td><input type="text" value="{{$apl->lv}}" style="width:30px;" name="lv[]"></td>
                        <td>{{$apl->food_lv1}}</td>
                        <td>
                            <select name="food_lv30[]">
                                <option>{{$apl->food_lv30}}</option>
                                @if($foodlv30s[$loop->index]->food1 == $apl->food_lv30)
                                    
                                @else
                                    <option>{{$foodlv30s[$loop->index]->food1}}</option>
                                @endif

                                @if($foodlv30s[$loop->index]->food2 == $apl->food_lv30)
                                    
                                @else
                                    <option>{{$foodlv30s[$loop->index]->food2}}</option>
                                    
                                @endif
                            </select>
                        </td>
                        <td>
                            <select name="food_lv60[]">
                                <option>{{$apl->food_lv60}}</option>
                                @if($foodlv60s[$loop->index]->food1 == $apl->food_lv60)
                                    
                                @else
                                    <option>{{$foodlv60s[$loop->index]->food1}}</option>
                                @endif

                                @if($foodlv60s[$loop->index]->food2 == $apl->food_lv60)
                                    
                                @else
                                    <option>{{$foodlv60s[$loop->index]->food2}}</option>
                                @endif

                                @if($foodlv60s[$loop->index]->food3 == $apl->food_lv60)
                                    
                                @else
                                    <option>{{$foodlv60s[$loop->index]->food3}}</option>
                                @endif
                            </select>
                        </td>
                        <td>{{$apl->main_skill}}</td>
                        <td>
                            <select name="sub_skill_lv1[]">
                            <option>{{$apl->sub_skill_lv1}}</option>
                                @foreach($allSubSkills as $allss)
                                    @if($allss->sub_skill == $apl->sub_skill_lv1)
                                        
                                    @else
                                        <option>{{$allss->sub_skill}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select name="sub_skill_lv25[]">
                                <option>{{$apl->sub_skill_lv25}}</option>
                                @foreach($allSubSkills as $allss)
                                    @if($allss->sub_skill == $apl->sub_skill_lv25)
                                        
                                    @else
                                        <option>{{$allss->sub_skill}}</option>
                                    @endif
                                @endforeach
                            </select>    
                        </td>
                        <td>
                            <select name="sub_skill_lv50[]">
                                <option>{{$apl->sub_skill_lv50}}</option>
                                @foreach($allSubSkills as $allss)
                                    @if($allss->sub_skill == $apl->sub_skill_lv50)
                                        
                                    @else
                                        <option>{{$allss->sub_skill}}</option>
                                    @endif
                                @endforeach
                            </select>    
                        </td>
                        <td>
                            <select name="sub_skill_lv75[]">
                                <option>{{$apl->sub_skill_lv75}}</option>
                                @foreach($allSubSkills as $allss)
                                    @if($allss->sub_skill == $apl->sub_skill_lv75)
                                        
                                    @else
                                        <option>{{$allss->sub_skill}}</option>
                                    @endif
                                @endforeach
                            </select>    
                        </td>
                        <td>
                            <select name="sub_skill_lv100[]">
                                <option>{{$apl->sub_skill_lv100}}</option>
                                @foreach($allSubSkills as $allss)
                                    @if($allss->sub_skill == $apl->sub_skill_lv100)
                                        
                                    @else
                                        <option>{{$allss->sub_skill}}</option>
                                    @endif
                                @endforeach
                            </select>    
                        </td>
                        <td>
                            <select name="personality[]">
                                <option>{{$apl->personality}}</option>
                                @foreach($allPersonalities as $ap)
                                    @if($ap->personality == $apl->personality)
                                        
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
            <!-- ボタン：モーダルを開くトリガー -->
            <button type="button" onclick="confirmTest2()" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="position: fixed; bottom: 5%; right: 20%; background: red; z-index: 10000;">
                ダイアログを開く
            </button>
            <!-- <button type="button" onclick="confirmTest2()" style="position: fixed; bottom: 5%; right: 20%; background: red; z-index: 10000;">更新確認</button> -->
            <button id="updateButton" type="submit" onclick="test()" style="position: fixed; bottom: 5%; right: 5%; z-index: 10001;">更新</button>
        </form>
    @endif
</div>



<script>
    function test(){

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



    function confirmTest2(){
        confirmBlockElementWrapper = document.getElementById('containerWrapper');
        confirmBlockElement = document.getElementById('aaa');



        confirmBlockElement.innerHTML = "";



        testtest = document.querySelectorAll('input[type="checkbox"]:checked');
        console.log(testtest[0].parentNode.parentNode)


        for(i=0; i<testtest.length; i++){
            rowInput = testtest[i].parentNode.parentElement.querySelectorAll("td input");
            rowSelect = testtest[i].parentNode.parentElement.querySelectorAll("td select");
            
            rowImg = testtest[i].parentNode.parentElement.querySelector("td img");
            console.log(rowImg.currentSrc);
            rowImgElement = document.createElement('img');
            rowImgElement.src = rowImg.currentSrc;



            divWrapper = document.createElement("div");
            divWrapper.classList.add("col-md-6");
            divWrapper.style.color = "white";


            
            id = rowSelect[0].options[rowSelect[0].selectedIndex].innerText;
            nickname = rowInput[1].value;
            sp = rowInput[2].value;
            lv = rowInput[3].value;
            food_lv30 = rowSelect[1].options[rowSelect[1].selectedIndex].innerText;
            food_lv60 = rowSelect[2].options[rowSelect[2].selectedIndex].innerText;
            sub_skill_lv1 = rowSelect[3].options[rowSelect[3].selectedIndex].innerText;
            sub_skill_lv25 = rowSelect[4].options[rowSelect[4].selectedIndex].innerText;
            sub_skill_lv50 = rowSelect[5].options[rowSelect[5].selectedIndex].innerText;
            sub_skill_lv75 = rowSelect[6].options[rowSelect[6].selectedIndex].innerText;
            sub_skill_lv100 = rowSelect[7].options[rowSelect[7].selectedIndex].innerText;
            personality = rowSelect[8].options[rowSelect[8].selectedIndex].innerText;
            remarks = rowInput[4].value;



            console.log(id);
            console.log(nickname);
            console.log(sp);
            console.log(lv);
            console.log(food_lv30);
            console.log(food_lv60);
            console.log(sub_skill_lv1);
            console.log(sub_skill_lv25);
            console.log(sub_skill_lv50);
            console.log(sub_skill_lv75);
            console.log(sub_skill_lv100);
            console.log(personality);
            console.log(remarks);



            divCard = document.createElement("div");
            divCard.classList.add("card");



            divtestId = document.createElement("div");
            divtestId.appendChild(document.createTextNode("id:"+id));
            divCard.appendChild(divtestId);

            divtestImg = document.createElement("div");
            divtestImg.appendChild(rowImgElement);
            divCard.appendChild(divtestImg);
            
            divtestNickname = document.createElement("div");
            divtestNickname.appendChild(document.createTextNode("nickname:"+nickname));
            divCard.appendChild(divtestNickname);

            divtestSp = document.createElement("div");
            divtestSp.appendChild(document.createTextNode("sp:"+sp));
            divCard.appendChild(divtestSp);

            divtestLv = document.createElement("div");
            divtestLv.appendChild(document.createTextNode("lv:"+lv));
            divCard.appendChild(divtestLv);
            
            divtestFoodlv30 = document.createElement("div");
            divtestFoodlv30.appendChild(document.createTextNode("food_lv30:"+food_lv30));
            divCard.appendChild(divtestFoodlv30);

            divtestFoodlv60 = document.createElement("div");
            divtestFoodlv60.appendChild(document.createTextNode("food_lv60:"+food_lv60));
            divCard.appendChild(divtestFoodlv60);

            divtestSubSkillLv1 = document.createElement("div");
            divtestSubSkillLv1.appendChild(document.createTextNode("sub_skill_lv1:"+sub_skill_lv1));
            divCard.appendChild(divtestSubSkillLv1);

            divtestSubSkillLv25 = document.createElement("div");
            divtestSubSkillLv25.appendChild(document.createTextNode("sub_skill_lv25:"+sub_skill_lv25));
            divCard.appendChild(divtestSubSkillLv25);

            divtestSubSkillLv50 = document.createElement("div");
            divtestSubSkillLv50.appendChild(document.createTextNode("sub_skill_lv50:"+sub_skill_lv50));
            divCard.appendChild(divtestSubSkillLv50);

            divtestSubSkillLv75 = document.createElement("div");
            divtestSubSkillLv75.appendChild(document.createTextNode("sub_skill_lv75:"+sub_skill_lv75));
            divCard.appendChild(divtestSubSkillLv75);

            divtestSubSkillLv100 = document.createElement("div");
            divtestSubSkillLv100.appendChild(document.createTextNode("sub_skill_lv100:"+sub_skill_lv100));
            divCard.appendChild(divtestSubSkillLv100);

            divtestPersonality = document.createElement("div");
            divtestPersonality.appendChild(document.createTextNode("personality:"+personality));
            divCard.appendChild(divtestPersonality);
        
            divtestRemarks = document.createElement("div");
            divtestRemarks.appendChild(document.createTextNode("remarks:"+remarks));
            divCard.appendChild(divtestRemarks);



            divWrapper.appendChild(divCard);
            confirmBlockElement.appendChild(divWrapper);


        }

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

    document.getElementById('containerWrapper').addEventListener('click', function(event){
        console.log(event.target);
        if(event.target === this){
            document.getElementById('containerWrapper').style.display = "none";
        }else{
            
        }
    });
</script>