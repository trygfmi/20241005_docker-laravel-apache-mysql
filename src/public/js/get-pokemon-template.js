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



            tbody_id = document.getElementById('registerTableForm');


            tr1_id = createTrElement(hiddenCount, 1, tbody_id);
            td1_id = createTdElement(hiddenCount, 1, tr1_id);
            select1_id = createSelectElement(hiddenCount, 1, "choice_pokemon_id[]", td1_id);
            createOptionElement(response.choice_pokemon_id['id'], select1_id);



            td2_id = createTdElement(hiddenCount, 2, tr1_id);
            createImgElement(response.choice_pokemon_id, response.choice_pokemon_name, td2_id);



            td3_id = createTdElement(hiddenCount, 3, tr1_id);
            select2_id = createSelectElement(hiddenCount, 2, "own_pokemon_name[]", td3_id);
            createOptionElement(response.choice_pokemon_name, select2_id);


            td4_id = createTdElement(hiddenCount, 4, tr1_id);
            createInputElement(hiddenCount, "nickname", "nickname[]",td4_id, "100px", false);



            td5_id = createTdElement(hiddenCount, 5, tr1_id);
            createInputElement(hiddenCount, "sp", "sp[]", td5_id, "50px", true);


            td6_id = createTdElement(hiddenCount, 6, tr1_id);
            createInputElement(hiddenCount, "lv", "lv[]", td6_id, "30px", true);


            td7_id = createTdElement(hiddenCount, 7, tr1_id);
            select3_id = createSelectElement(hiddenCount, 3, "food_lv1[]", td7_id);
            createOptionElement(response.foodlv1_food1, select3_id);



            td8_id = createTdElement(hiddenCount, 8, tr1_id);
            select4_id = createSelectElement(hiddenCount, 4, "food_lv30[]", td8_id);
            createOptionElement(response.foodlv30_food1, select4_id);
            createOptionElement(response.foodlv30_food2, select4_id);



            td9_id = createTdElement(hiddenCount, 9, tr1_id);
            select5_id = createSelectElement(hiddenCount, 5, "food_lv60[]", td9_id);
            createOptionElement(response.foodlv60_food1, select5_id);
            createOptionElement(response.foodlv60_food2, select5_id);
            createOptionElement(response.foodlv60_food3, select5_id);



            td10_id = createTdElement(hiddenCount, 10, tr1_id);
            select6_id = createSelectElement(hiddenCount, 6, "main_skill[]", td10_id);
            createOptionElement(response.main_skill, select6_id);



            td11_id = createTdElement(hiddenCount, 11, tr1_id);
            select7_id = createSelectElement(hiddenCount, 7, "sub_skill_lv1[]", td11_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select7_id);
            }
            


            td12_id = createTdElement(hiddenCount, 12, tr1_id);
            select8_id = createSelectElement(hiddenCount, 8, "sub_skill_lv25[]", td12_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select8_id);
            }



            td13_id = createTdElement(hiddenCount, 13, tr1_id);
            select9_id = createSelectElement(hiddenCount, 9, "sub_skill_lv50[]", td13_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select9_id);
            }



            td14_id = createTdElement(hiddenCount, 14, tr1_id);
            select10_id = createSelectElement(hiddenCount, 10, "sub_skill_lv75[]", td14_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select10_id);
            }



            td15_id = createTdElement(hiddenCount, 15, tr1_id);
            select11_id = createSelectElement(hiddenCount, 11, "sub_skill_lv100[]", td15_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select11_id);
            }



            td16_id = createTdElement(hiddenCount, 16, tr1_id);
            select12_id = createSelectElement(hiddenCount, 12, "personality[]", td16_id);
            for(i=0; i<25; i++){
                createOptionElement(response.personality[i].personality, select12_id);
            }



            td17_id = createTdElement(hiddenCount, 17, tr1_id);
            createInputElement(hiddenCount, "remarks", "remarks[]", td17_id, "70px", false);






            


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



function createTrElement(hiddenCount, elementNumber, table_id){
    tr = document.createElement('tr');
    tr.id = "tr"+hiddenCount+elementNumber;
    table_id.appendChild(tr);

    return tr.id;
}

function createTdElement(hiddenCount, elementNumber, tr_id){
    td = document.createElement('td');
    td.id = 'td'+hiddenCount+elementNumber;
    document.getElementById(tr_id).appendChild(td);

    return td.id;
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

function createInputElement(hiddenCount, input_id, input_name, label_id, width, hasRequired){
    input = document.createElement('input');
    input.id = input_id+hiddenCount;
    input.type = "text";
    input.name = input_name;
    input.style.width = width;
    input.required = hasRequired;
    document.getElementById(label_id).appendChild(input);
}