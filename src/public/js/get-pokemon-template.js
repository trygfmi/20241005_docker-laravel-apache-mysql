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
            loading.style.display = "block";
        },
        success: function(response) {
            console.log(parseInt(document.getElementById('hiddenCount').value));
            hiddenCount = document.getElementById('hiddenCount').value;
            hiddenImgUrl = document.getElementById('hiddenImgUrl').value;
            console.log(hiddenImgUrl);


            tbody = document.getElementById('registerTableTbody');
            tbody_firstChild = tbody.firstChild;



            tr0_id = createTrElement(hiddenCount, "_0", tbody, tbody_firstChild);
            tr0_element = document.getElementById(tr0_id);



            td0_id = createTdElement(hiddenCount, "_0", tr0_element);
            button1_id = createButtonElement(hiddenCount, 1, "削除", td0_id);            



            td1_id = createTdElement(hiddenCount, "_1", tr0_element);
            select1_id = createSelectElement(hiddenCount, 1, "choice_pokemon_id[]", td1_id);
            createOptionElement(response.choice_pokemon_id['id'], select1_id);



            td2_id = createTdElement(hiddenCount, "_2", tr0_element);
            createImgElement(response.choice_pokemon_id, hiddenImgUrl, response.choice_pokemon_name, td2_id);



            td3_id = createTdElement(hiddenCount, "_3", tr0_element);
            select2_id = createSelectElement(hiddenCount, 2, "own_pokemon_name[]", td3_id);
            createOptionElement(response.choice_pokemon_name, select2_id);


            td4_id = createTdElement(hiddenCount, "_4", tr0_element);
            createInputElement(hiddenCount, "nickname", "text", "nickname[]",td4_id, "80px", false);



            td5_id = createTdElement(hiddenCount, "_5", tr0_element);
            createInputElement(hiddenCount, "sp", "text", "sp[]", td5_id, "50px", true);


            td6_id = createTdElement(hiddenCount, "_6", tr0_element);
            createInputElement(hiddenCount, "lv", "text", "lv[]", td6_id, "30px", true);


            td7_id = createTdElement(hiddenCount, "_7", tr0_element);
            select3_id = createSelectElement(hiddenCount, 3, "food_lv1[]", td7_id);
            createOptionElement(response.foodlv1_food1, select3_id);



            td8_id = createTdElement(hiddenCount, "_8", tr0_element);
            select4_id = createSelectElement(hiddenCount, 4, "food_lv30[]", td8_id);
            createOptionElement(response.foodlv30_food1, select4_id);
            createOptionElement(response.foodlv30_food2, select4_id);



            td9_id = createTdElement(hiddenCount, "_9", tr0_element);
            select5_id = createSelectElement(hiddenCount, 5, "food_lv60[]", td9_id);
            createOptionElement(response.foodlv60_food1, select5_id);
            createOptionElement(response.foodlv60_food2, select5_id);
            if(response.foodlv60_food3 != null){
                createOptionElement(response.foodlv60_food3, select5_id);
            }
            


            td10_id = createTdElement(hiddenCount, "_10", tr0_element);
            select6_id = createSelectElement(hiddenCount, 6, "main_skill[]", td10_id);
            createOptionElement(response.main_skill, select6_id);



            td11_id = createTdElement(hiddenCount, "_11", tr0_element);
            select7_id = createSelectElement(hiddenCount, 7, "sub_skill_lv1[]", td11_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select7_id);
            }
            


            td12_id = createTdElement(hiddenCount, "_12", tr0_element);
            select8_id = createSelectElement(hiddenCount, 8, "sub_skill_lv25[]", td12_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select8_id);
            }



            td13_id = createTdElement(hiddenCount, "_13", tr0_element);
            select9_id = createSelectElement(hiddenCount, 9, "sub_skill_lv50[]", td13_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select9_id);
            }



            td14_id = createTdElement(hiddenCount, "_14", tr0_element);
            select10_id = createSelectElement(hiddenCount, 10, "sub_skill_lv75[]", td14_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select10_id);
            }



            td15_id = createTdElement(hiddenCount, "_15", tr0_element);
            select11_id = createSelectElement(hiddenCount, 11, "sub_skill_lv100[]", td15_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select11_id);
            }



            td16_id = createTdElement(hiddenCount, "_16", tr0_element);
            select12_id = createSelectElement(hiddenCount, 12, "personality[]", td16_id);
            for(i=0; i<25; i++){
                createOptionElement(response.personality[i].personality, select12_id);
            }



            td17_id = createTdElement(hiddenCount, "_17", tr0_element);
            createInputElement(hiddenCount, "remarks", "text", "remarks[]", td17_id, "70px", false);
            
        },
        error: function() {
            // エラー時の処理
            // document.getElementById('output').innerHTML = 'Error: Could not load message.';
        },
        complete: function(){
            // document.getElementById('loading').style.display = "none";
            loading.style.display = "none";
            formWrapper.style.display = "block";
            let hiddenCountElement = document.getElementById('hiddenCount');
            hiddenCountElement.value =  parseInt(hiddenCountElement.value) + 1;
        }
    });
    // }, 5000);
}



function createButtonElement(hiddenCount, elementNumber, innerHTMLText, td_id){
    button = document.createElement('button');
    button.id = 'button' + hiddenCount + elementNumber;
    button.type = "button";
    button.innerHTML = innerHTMLText;
    document.getElementById(td_id).appendChild(button);

    document.getElementById(button.id).addEventListener('click', async function(){
        // if(confirm('選択した行を削除しますか？')){
        result = await showDialog();
        console.log(result);
        if(result){
            document.getElementById(this.parentElement.parentElement.id).remove();
        }
    })
}

function showDialog() {
    const dialog = document.getElementById('customDialog');
    dialog.style.display = 'block'; // ダイアログを表示

    return new Promise((resolve, reject) => {
        document.getElementById('yesButton').addEventListener('click', function() {
            resolve(false); // 「はい」が選ばれた場合、Promiseを解決
            dialog.style.display = 'none'; // ダイアログを閉じる
        });

        document.getElementById('noButton').addEventListener('click', function() {
            resolve(true); // 「いいえ」が選ばれた場合、Promiseを解決
            dialog.style.display = 'none'; // ダイアログを閉じる
        });
    });
}

function createTrElement(hiddenCount, elementNumber, tbody_id, tbody_firstChild){
    tr = document.createElement('tr');
    tr.id = "tr"+hiddenCount+elementNumber;
    tbody_id.insertBefore(tr, tbody_firstChild);

    return tr.id;
}

function createTdElement(hiddenCount, elementNumber, tr_element){
    td = document.createElement('td');
    td.id = 'td'+hiddenCount+elementNumber;
    tr_element.appendChild(td);

    return td.id;
}

function createPElement(hiddenCount, elementNumber){
    p = document.createElement('p');
    p.id = "p"+hiddenCount+elementNumber;
    document.getElementById('registerForm').appendChild(p);

    return p.id;
}

function createImgElement(choice_pokemon_id, hiddenImgUrl, choice_pokemon_name, p_id){
    img = document.createElement('img');
    img.src = hiddenImgUrl + "/" + choice_pokemon_id['id'] + '.png';;
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

function createInputElement(hiddenCount, input_id, type, input_name, label_id, width, hasRequired){
    input = document.createElement('input');
    input.id = input_id+hiddenCount;
    input.type = type;
    input.name = input_name;
    input.style.width = width;
    input.required = hasRequired;
    document.getElementById(label_id).appendChild(input);

}