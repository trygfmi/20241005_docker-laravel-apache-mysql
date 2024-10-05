function getPokemonTemplate(){
    // document.getElementById('loading').style.display = "block";
    // setTimeout(() => {
    $.ajax({
        url: '/get-pokemon-template-via-ajax',
        method: 'get',
        data: {
            // keyword: document.getElementById('keyword').value,
            selectPokemonName: selectPokemonName.value,
        },
        beforeSend: function(){
            // document.getElementById('loading').style.display = "block";
            //loading.style.display = "block";
        },
        success: function(response) {
            // console.log(response.food);
            console.log(response.test)

            // var choice_pokemon_name = response.test[0].name;

            /*
            console.log(response.foodlv1_food1);

            console.log(response.foodlv30_food1);
            console.log(response.foodlv30_food2);

            console.log(response.foodlv60_food1);
            console.log(response.foodlv60_food2);
            console.log(response.foodlv60_food3);

            console.log(response.main_skill);

            console.log(response.sub_skill);

            console.log(response.personality);
            */

            

            // registerForm.innerHTML = registerForm.innerHTML + `
            registerForm.innerHTML = registerForm.innerHTML + `
                    <p><label>name</label><select name="own_pokemon_name"><option>` + response.choice_pokemon_name + `</option></select></p>
                    <p><label for="nickname">nickname</label><input id="nickname" type="text" name="nickname"></p>
                    <p><label for="sp">sp</label><input id="sp" type="text" name="sp"></p>
                    <p><label for="lv">lv</label><input id="lv" type="text" name="lv"></p>
                    <p><label>food_lv1</label><select name="food_lv1"><option>` + response.foodlv1_food1 + `</option></select><p>
                    <p><label>food_lv30</label><select name="food_lv30"><option>` + response.foodlv30_food1 + `</option>
                    <option>` + response.foodlv30_food2 + `</option></select></p>
                    <p><label>food_lv60</label><select name="food_lv60"><option>` + response.foodlv60_food1 + `</option>
                    <option>` + response.foodlv60_food2 + `</option>
                    <option>` + response.foodlv60_food3 + `</option></select><p>
                    <p><label>main_skill</label><select name="main_skill"><option>` + response.main_skill + `</option></select></p>
                    <p><label>sub_skill_lv1</label><select name="sub_skill_lv1"><option>` + response.sub_skill[0].sub_skill + `</option>
                    <option>` + response.sub_skill[1].sub_skill + `</option>
                    <option>` + response.sub_skill[2].sub_skill + `</option>
                    <option>` + response.sub_skill[3].sub_skill + `</option>
                    <option>` + response.sub_skill[4].sub_skill + `</option>
                    <option>` + response.sub_skill[5].sub_skill + `</option>
                    <option>` + response.sub_skill[6].sub_skill + `</option>
                    <option>` + response.sub_skill[7].sub_skill + `</option>
                    <option>` + response.sub_skill[8].sub_skill + `</option>
                    <option>` + response.sub_skill[9].sub_skill + `</option>
                    <option>` + response.sub_skill[10].sub_skill + `</option>
                    <option>` + response.sub_skill[11].sub_skill + `</option>
                    <option>` + response.sub_skill[12].sub_skill + `</option>
                    <option>` + response.sub_skill[13].sub_skill + `</option>
                    <option>` + response.sub_skill[14].sub_skill + `</option>
                    <option>` + response.sub_skill[15].sub_skill + `</option>
                    <option>` + response.sub_skill[16].sub_skill + `</option></select></p>
                    <p><label>sub_skill_lv25</label><select name="sub_skill_lv25"><option>` + response.sub_skill[0].sub_skill + `</option>
                    <option>` + response.sub_skill[1].sub_skill + `</option>
                    <option>` + response.sub_skill[2].sub_skill + `</option>
                    <option>` + response.sub_skill[3].sub_skill + `</option>
                    <option>` + response.sub_skill[4].sub_skill + `</option>
                    <option>` + response.sub_skill[5].sub_skill + `</option>
                    <option>` + response.sub_skill[6].sub_skill + `</option>
                    <option>` + response.sub_skill[7].sub_skill + `</option>
                    <option>` + response.sub_skill[8].sub_skill + `</option>
                    <option>` + response.sub_skill[9].sub_skill + `</option>
                    <option>` + response.sub_skill[10].sub_skill + `</option>
                    <option>` + response.sub_skill[11].sub_skill + `</option>
                    <option>` + response.sub_skill[12].sub_skill + `</option>
                    <option>` + response.sub_skill[13].sub_skill + `</option>
                    <option>` + response.sub_skill[14].sub_skill + `</option>
                    <option>` + response.sub_skill[15].sub_skill + `</option>
                    <option>` + response.sub_skill[16].sub_skill + `</option></select></p>
                    <p><label>sub_skill_lv50</label><select name="sub_skill_lv50"><option>` + response.sub_skill[0].sub_skill + `</option>
                    <option>` + response.sub_skill[1].sub_skill + `</option>
                    <option>` + response.sub_skill[2].sub_skill + `</option>
                    <option>` + response.sub_skill[3].sub_skill + `</option>
                    <option>` + response.sub_skill[4].sub_skill + `</option>
                    <option>` + response.sub_skill[5].sub_skill + `</option>
                    <option>` + response.sub_skill[6].sub_skill + `</option>
                    <option>` + response.sub_skill[7].sub_skill + `</option>
                    <option>` + response.sub_skill[8].sub_skill + `</option>
                    <option>` + response.sub_skill[9].sub_skill + `</option>
                    <option>` + response.sub_skill[10].sub_skill + `</option>
                    <option>` + response.sub_skill[11].sub_skill + `</option>
                    <option>` + response.sub_skill[12].sub_skill + `</option>
                    <option>` + response.sub_skill[13].sub_skill + `</option>
                    <option>` + response.sub_skill[14].sub_skill + `</option>
                    <option>` + response.sub_skill[15].sub_skill + `</option>
                    <option>` + response.sub_skill[16].sub_skill + `</option></select></p>
                    <p><label>sub_skill_lv75</label><select name="sub_skill_lv75"><option>` + response.sub_skill[0].sub_skill + `</option>
                    <option>` + response.sub_skill[1].sub_skill + `</option>
                    <option>` + response.sub_skill[2].sub_skill + `</option>
                    <option>` + response.sub_skill[3].sub_skill + `</option>
                    <option>` + response.sub_skill[4].sub_skill + `</option>
                    <option>` + response.sub_skill[5].sub_skill + `</option>
                    <option>` + response.sub_skill[6].sub_skill + `</option>
                    <option>` + response.sub_skill[7].sub_skill + `</option>
                    <option>` + response.sub_skill[8].sub_skill + `</option>
                    <option>` + response.sub_skill[9].sub_skill + `</option>
                    <option>` + response.sub_skill[10].sub_skill + `</option>
                    <option>` + response.sub_skill[11].sub_skill + `</option>
                    <option>` + response.sub_skill[12].sub_skill + `</option>
                    <option>` + response.sub_skill[13].sub_skill + `</option>
                    <option>` + response.sub_skill[14].sub_skill + `</option>
                    <option>` + response.sub_skill[15].sub_skill + `</option>
                    <option>` + response.sub_skill[16].sub_skill + `</option></select></p>
                    <p><label>sub_skill_lv100</label><select name="sub_skill_lv100"><option>` + response.sub_skill[0].sub_skill + `</option>
                    <option>` + response.sub_skill[1].sub_skill + `</option>
                    <option>` + response.sub_skill[2].sub_skill + `</option>
                    <option>` + response.sub_skill[3].sub_skill + `</option>
                    <option>` + response.sub_skill[4].sub_skill + `</option>
                    <option>` + response.sub_skill[5].sub_skill + `</option>
                    <option>` + response.sub_skill[6].sub_skill + `</option>
                    <option>` + response.sub_skill[7].sub_skill + `</option>
                    <option>` + response.sub_skill[8].sub_skill + `</option>
                    <option>` + response.sub_skill[9].sub_skill + `</option>
                    <option>` + response.sub_skill[10].sub_skill + `</option>
                    <option>` + response.sub_skill[11].sub_skill + `</option>
                    <option>` + response.sub_skill[12].sub_skill + `</option>
                    <option>` + response.sub_skill[13].sub_skill + `</option>
                    <option>` + response.sub_skill[14].sub_skill + `</option>
                    <option>` + response.sub_skill[15].sub_skill + `</option>
                    <option>` + response.sub_skill[16].sub_skill + `</option></select></p>
                    <p><label>personality</label><select name="personality"><option>` + response.personality[0].personality + `</option>
                    <option>` + response.personality[1].personality + `</option>
                    <option>` + response.personality[2].personality + `</option>
                    <option>` + response.personality[3].personality + `</option>
                    <option>` + response.personality[4].personality + `</option>
                    <option>` + response.personality[5].personality + `</option>
                    <option>` + response.personality[6].personality + `</option>
                    <option>` + response.personality[7].personality + `</option>
                    <option>` + response.personality[8].personality + `</option>
                    <option>` + response.personality[9].personality + `</option>
                    <option>` + response.personality[10].personality + `</option>
                    <option>` + response.personality[11].personality + `</option>
                    <option>` + response.personality[12].personality + `</option>
                    <option>` + response.personality[13].personality + `</option>
                    <option>` + response.personality[14].personality + `</option>
                    <option>` + response.personality[15].personality + `</option>
                    <option>` + response.personality[16].personality + `</option>
                    <option>` + response.personality[17].personality + `</option>
                    <option>` + response.personality[18].personality + `</option>
                    <option>` + response.personality[19].personality + `</option>
                    <option>` + response.personality[20].personality + `</option>
                    <option>` + response.personality[21].personality + `</option>
                    <option>` + response.personality[22].personality + `</option>
                    <option>` + response.personality[23].personality + `</option>
                    <option>` + response.personality[24].personality + `</option></select></p>
                    <p><label for="remarks">remarks</label><input id="remarks" type="text" name="remarks"></p>
            `;
        },
        error: function() {
            // エラー時の処理
            // document.getElementById('output').innerHTML = 'Error: Could not load message.';
        },
        complete: function(){
            // document.getElementById('loading').style.display = "none";
            // loading.style.display = "none";
            formWrapper.style.display = "block";
        }
    });
    // }, 5000);
}