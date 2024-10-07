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
            console.log(parseInt(document.getElementById('hidden-count').value));
            hiddenCount = document.getElementById('hidden-count').value;

            p1_id = createPElement(hiddenCount, 1);
            createImgElement(response.choice_pokemon_id, response.choice_pokemon_name, p1_id);


            p2_id = createPElement(hiddenCount, 2);
            label1_id = createLabelElement(hiddenCount, 1, 'id', p2_id);
            select1_id = createSelectElement(hiddenCount, 1, "choice_pokemon_id[]", label1_id);
            createOptionElement(response.choice_pokemon_id['id'], select1_id);



            p3_id = createPElement(hiddenCount, 3)
            label2_id = createLabelElement(hiddenCount, 3, "name", p3_id);
            select2_id = createSelectElement(hiddenCount, 2, "own_pokemon_name[]", label2_id);
            createOptionElement(response.choice_pokemon_name, select2_id);



            p4_id = createPElement(hiddenCount, 4,);
            label4_id = createLabelElement(hiddenCount, 4, "nickname", p4_id);
            createInputElement(hiddenCount, "nickname", "nickname[]", label4_id);



            p5_id = createPElement(hiddenCount, 5);
            label5_id = createLabelElement(hiddenCount, 5, "sp", p5_id);
            createInputElement(hiddenCount, "sp", "sp[]", label5_id);



            p6_id = createPElement(hiddenCount, 6);
            label6_id = createLabelElement(hiddenCount, 6, "lv", p6_id);
            createInputElement(hiddenCount, "lv", "lv[]", label6_id);



            p7_id = createPElement(hiddenCount, 7);
            label7_id = createLabelElement(hiddenCount, 7, "food_lv1", p7_id);
            select3_id = createSelectElement(hiddenCount, 3, "food_lv1[]", label7_id);
            createOptionElement(response.foodlv1_food1, select3_id);



            p8_id = createPElement(hiddenCount, 8);
            label8_id = createLabelElement(hiddenCount, 8, "food_lv30", p8_id);
            select4_id = createSelectElement(hiddenCount, 4, "food_lv30[]", label8_id);
            createOptionElement(response.foodlv30_food1, select4_id);
            createOptionElement(response.foodlv30_food2, select4_id);



            p9_id = createPElement(hiddenCount, 9);
            label9_id = createLabelElement(hiddenCount, 9, "food_lv60", p9_id);
            select5_id = createSelectElement(hiddenCount, 5, "food_lv60[]", label9_id);
            createOptionElement(response.foodlv60_food1, select5_id);
            createOptionElement(response.foodlv60_food2, select5_id);
            createOptionElement(response.foodlv60_food3, select5_id);



            p10_id = createPElement(hiddenCount, 10);
            label10_id = createLabelElement(hiddenCount, 10, "main_skill", p10_id);
            select6_id = createSelectElement(hiddenCount, 6, "main_skill[]", label10_id);
            createOptionElement(response.main_skill, select6_id);



            p11_id = createPElement(hiddenCount, 11);
            label11_id = createLabelElement(hiddenCount, 11, "sub_skill_lv1", p11_id);
            select7_id = createSelectElement(hiddenCount, 7, "sub_skill_lv1[]", label11_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select7_id);
            }
            


            p12_id = createPElement(hiddenCount, 12);
            label12_id = createLabelElement(hiddenCount, 12, "sub_skill_lv25", p12_id);
            select8_id = createSelectElement(hiddenCount, 8, "sub_skill_lv25[]", label12_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select8_id);
            }



            p13_id = createPElement(hiddenCount, 13);
            label13_id = createLabelElement(hiddenCount, 13, "sub_skill_lv50", p13_id);
            select9_id = createSelectElement(hiddenCount, 9, "sub_skill_lv50[]", label13_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select9_id);
            }



            p14_id = createPElement(hiddenCount, 14);
            label14_id = createLabelElement(hiddenCount, 14, "sub_skill_lv75", p14_id);
            select10_id = createSelectElement(hiddenCount, 10, "sub_skill_lv75[]", label14_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select10_id);
            }



            p15_id = createPElement(hiddenCount, 15);
            label15_id = createLabelElement(hiddenCount, 15, "sub_skill_lv100", p15_id);
            select11_id = createSelectElement(hiddenCount, 11, "sub_skill_lv100[]", label15_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select11_id);
            }



            p16_id = createPElement(hiddenCount, 16);
            label16_id = createLabelElement(hiddenCount, 16, "personality", p16_id);
            select12_id = createSelectElement(hiddenCount, 12, "personality[]", label16_id);
            for(i=0; i<25; i++){
                createOptionElement(response.personality[i].personality, select12_id);
            }



            p17_id = createPElement(hiddenCount, 17,);
            label17_id = createLabelElement(hiddenCount, 17, "remarks", p17_id);
            createInputElement(hiddenCount, "remarks", "remarks[]", label17_id);






            


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
            // registerForm.innerHTML = registerForm.innerHTML + `
            /*
            registerForm.innerHTML = `
                    <p><img src="images/` + response.choice_pokemon_id['id'] + `.png" alt="` + response.choice_pokemon_name + `"></p>
                    <p><label>id<select name="choice_pokemon_id[]"><option>` + response.choice_pokemon_id['id'] + `</option></select></label></p>
                    <p><label>name<select name="own_pokemon_name[]"><option>` + response.choice_pokemon_name + `</option></select></label></p>
                    <p><label for="nickname">nickname</label><input id="nickname" type="text" name="nickname[]"></p>
                    <p><label for="sp">sp</label><input id="sp" type="text" name="sp[]"></p>
                    <p><label for="lv">lv</label><input id="lv" type="text" name="lv[]"></p>
                    <p><label>food_lv1<select name="food_lv1[]"><option>` + response.foodlv1_food1 + `</option></select></label><p>
                    <p><label>food_lv30<select name="food_lv30[]"><option>` + response.foodlv30_food1 + `</option>
                    <option>` + response.foodlv30_food2 + `</option></select></label></p>
                    <p><label>food_lv60<select name="food_lv60[]"><option>` + response.foodlv60_food1 + `</option>
                    <option>` + response.foodlv60_food2 + `</option>
                    <option>` + response.foodlv60_food3 + `</option></select></label><p>
                    <p><label>main_skill<select name="main_skill[]"><option>` + response.main_skill + `</option></select></label></p>
                    <p><label>sub_skill_lv1<select name="sub_skill_lv1[]"><option>` + response.sub_skill[0].sub_skill + `</option>
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
                    <option>` + response.sub_skill[16].sub_skill + `</option></select></label></p>
                    <p><label>sub_skill_lv25<select name="sub_skill_lv25[]"><option>` + response.sub_skill[0].sub_skill + `</option>
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
                    <option>` + response.sub_skill[16].sub_skill + `</option></select></label></p>
                    <p><label>sub_skill_lv50<select name="sub_skill_lv50[]"><option>` + response.sub_skill[0].sub_skill + `</option>
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
                    <option>` + response.sub_skill[16].sub_skill + `</option></select></label></p>
                    <p><label>sub_skill_lv75<select name="sub_skill_lv75[]"><option>` + response.sub_skill[0].sub_skill + `</option>
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
                    <option>` + response.sub_skill[16].sub_skill + `</option></select></label></p>
                    <p><label>sub_skill_lv100<select name="sub_skill_lv100[]"><option>` + response.sub_skill[0].sub_skill + `</option>
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
                    <option>` + response.sub_skill[16].sub_skill + `</option></select></label></p>
                    <p><label>personality<select name="personality[]"><option>` + response.personality[0].personality + `</option>
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
                    <option>` + response.personality[24].personality + `</option></select></label></p>
                    <p><label for="remarks">remarks</label><input id="remarks" type="text" name="remarks[]"></p>
                    ` + registerForm.innerHTML + `
            `;
            */
        },
        error: function() {
            // エラー時の処理
            // document.getElementById('output').innerHTML = 'Error: Could not load message.';
        },
        complete: function(){
            // document.getElementById('loading').style.display = "none";
            // loading.style.display = "none";
            formWrapper.style.display = "block";
            let hiddenCountElement = document.getElementById('hidden-count');
            hiddenCountElement.value =  parseInt(hiddenCountElement.value) + 1;
        }
    });
    // }, 5000);
}



function createPElement(hiddenCount, elementNumber){
    p = document.createElement('p');
    p.id = "p"+hiddenCount+elementNumber;
    document.getElementById('registerForm').appendChild(p);

    return p.id;
}

function createImgElement(choice_pokemon_id, choice_pokemon_name, p_id){
    img = document.createElement('img');
    img.src = "images/" + choice_pokemon_id['id'] + ".png";
    img.alt = choice_pokemon_name;
    document.getElementById(p_id).appendChild(img);
}

function createLabelElement(hiddenCount, elementNumber, innerHTML, p_id){
    label = document.createElement('label');
    label.id = 'label'+hiddenCount+elementNumber;
    label.innerHTML = innerHTML;
    document.getElementById(p_id).appendChild(label);

    return label.id;
}

function createSelectElement(hiddenCount, elementNumber, elementName, label_id){
    select = document.createElement('select');
    select.id = 'select'+hiddenCount+elementNumber;
    select.name = elementName;
    document.getElementById(label_id).appendChild(select);

    return select.id;
}

function createOptionElement(option_text, select_id){
    option = document.createElement('option');
    option.text = option_text;
    document.getElementById(select_id).appendChild(option);
}

function createInputElement(hiddenCount, input_id, input_name, label_id){
    input = document.createElement('input');
    input.id = input_id+hiddenCount;
    input.type = "text";
    input.name = input_name;
    document.getElementById(label_id).appendChild(input);
}