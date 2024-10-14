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
            console.log(parseInt(document.getElementById('tableRowCount').value));
            tableRowCount = document.getElementById('tableRowCount').value;
            tableImgSrc = document.getElementById('tableImgSrc').value;
            console.log(tableImgSrc);


            tbody_element = document.getElementById('registerTableTbody');
            tbody_element_firstChild = tbody_element.firstChild;



            tr_id = createTrElement(tableRowCount, tbody_element, tbody_element_firstChild);
            tr_element = document.getElementById(tr_id);



            partOfElement0Id = "_0";
            button0InnerHTML = "削除"
            td0_id = createTdElement(tableRowCount, partOfElement0Id, tr_element);
            createButtonElement(tableRowCount, partOfElement0Id, button0InnerHTML, td0_id);            



            partOfElement1Id = "_1";
            select1ElementName = "choice_pokemon_id[]";
            td1_id = createTdElement(tableRowCount, partOfElement1Id, tr_element);
            select1_id = createSelectElement(tableRowCount, partOfElement1Id, select1ElementName, td1_id);
            createOptionElement(response.choice_pokemon_id['id'], select1_id);



            partOfElement2Id = "_2";
            td2_id = createTdElement(tableRowCount, partOfElement2Id, tr_element);
            createImgElement(response.choice_pokemon_id, tableImgSrc, response.choice_pokemon_name, td2_id);



            partOfElement3Id = "_3";
            select3ElementName = "own_pokemon_name[]";
            td3_id = createTdElement(tableRowCount, partOfElement3Id, tr_element);
            select3_id = createSelectElement(tableRowCount, partOfElement3Id, select3ElementName, td3_id);
            createOptionElement(response.choice_pokemon_name, select3_id);



            partOfElement4Id = "_4";
            input4Id = "nickname";
            intput4Type = "text";
            intput4ElementName = "nickname[]";
            input4Width = "80px";
            input4HasRequired = false;
            td4_id = createTdElement(tableRowCount, partOfElement4Id, tr_element);
            createInputElement(input4Id, intput4Type, intput4ElementName,td4_id, input4Width, input4HasRequired);



            partOfElement5Id = "_5";
            input5Id = "sp";
            intput5Type = "text";
            intput5ElementName = "sp[]";
            input5Width = "50px";
            input5HasRequired = true;
            td5_id = createTdElement(tableRowCount, partOfElement5Id, tr_element);
            createInputElement(input5Id, intput5Type, intput5ElementName, td5_id, input5Width, input5HasRequired);



            partOfElement6Id = "_6";
            input6Id = "lv";
            intput6Type = "text";
            intput6ElementName = "lv[]";
            input6Width = "30px";
            input6HasRequired = true;
            td6_id = createTdElement(tableRowCount, partOfElement6Id, tr_element);
            createInputElement(input6Id, intput6Type, intput6ElementName, td6_id, input6Width, input6HasRequired);



            partOfElement7Id = "_7";
            select7ElementName = "food_lv1[]";
            td7_id = createTdElement(tableRowCount, partOfElement7Id, tr_element);
            select7_id = createSelectElement(tableRowCount, partOfElement7Id, select7ElementName, td7_id);
            createOptionElement(response.foodlv1_food1, select7_id);



            partOfElement8Id = "_8";
            select8ElementName = "food_lv30[]";
            td8_id = createTdElement(tableRowCount, partOfElement8Id, tr_element);
            select8_id = createSelectElement(tableRowCount, partOfElement8Id, select8ElementName, td8_id);
            createOptionElement(response.foodlv30_food1, select8_id);
            createOptionElement(response.foodlv30_food2, select8_id);



            partOfElement9Id = "_9";
            select9ElementName = "food_lv60[]";
            td9_id = createTdElement(tableRowCount, partOfElement9Id, tr_element);
            select9_id = createSelectElement(tableRowCount, partOfElement9Id, select9ElementName, td9_id);
            createOptionElement(response.foodlv60_food1, select9_id);
            createOptionElement(response.foodlv60_food2, select9_id);
            if(response.foodlv60_food3 != null){
                createOptionElement(response.foodlv60_food3, select9_id);
            }
            


            partOfElement10Id = "_10";
            select10ElementName = "main_skill[]";
            td10_id = createTdElement(tableRowCount, partOfElement10Id, tr_element);
            select10_id = createSelectElement(tableRowCount, partOfElement10Id, select10ElementName, td10_id);
            createOptionElement(response.main_skill, select10_id);



            partOfElement11Id = "_11";
            select11ElementName = "sub_skill_lv1[]";
            td11_id = createTdElement(tableRowCount, partOfElement11Id, tr_element);
            select11_id = createSelectElement(tableRowCount, partOfElement11Id, select11ElementName, td11_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select11_id);
            }
            


            partOfElement12Id = "_12";
            select12ElementName = "sub_skill_lv25[]";
            td12_id = createTdElement(tableRowCount, partOfElement12Id, tr_element);
            select12_id = createSelectElement(tableRowCount, partOfElement12Id, select12ElementName, td12_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select12_id);
            }



            partOfElement13Id = "_13";
            select13ElementName = "sub_skill_lv50[]";
            td13_id = createTdElement(tableRowCount, partOfElement13Id, tr_element);
            select13_id = createSelectElement(tableRowCount, partOfElement13Id, select13ElementName, td13_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select13_id);
            }



            partOfElement14Id = "_14";
            select14ElementName = "sub_skill_lv75[]";
            td14_id = createTdElement(tableRowCount, partOfElement14Id, tr_element);
            select14_id = createSelectElement(tableRowCount, partOfElement14Id, select14ElementName, td14_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select14_id);
            }



            partOfElement15Id = "_15";
            select15ElementName = "sub_skill_lv100[]";
            td15_id = createTdElement(tableRowCount, partOfElement15Id, tr_element);
            select15_id = createSelectElement(tableRowCount, partOfElement15Id, select15ElementName, td15_id);
            for(i=0; i<17; i++){
                createOptionElement(response.sub_skill[i].sub_skill, select15_id);
            }



            partOfElement16Id = "_16";
            select16ElementName = "personality[]";
            td16_id = createTdElement(tableRowCount, partOfElement16Id, tr_element);
            select16_id = createSelectElement(tableRowCount, partOfElement16Id, select16ElementName, td16_id);
            for(i=0; i<25; i++){
                createOptionElement(response.personality[i].personality, select16_id);
            }



            partOfElement17Id = "_17";
            input17Id = "remarks";
            intput17Type = "text";
            intput17ElementName = "remarks[]";
            input17Width = "70px";
            input17HasRequired = false;
            td17_id = createTdElement(tableRowCount, partOfElement17Id, tr_element);
            createInputElement(input17Id, intput17Type, intput17ElementName, td17_id, input17Width, input17HasRequired);
            
        },
        error: function() {
            // エラー時の処理
            // document.getElementById('output').innerHTML = 'Error: Could not load message.';
        },
        complete: function(){
            // document.getElementById('loading').style.display = "none";
            loading.style.display = "none";
            formWrapper.style.display = "block";
            let tableRowCountElement = document.getElementById('tableRowCount');
            tableRowCountElement.value =  parseInt(tableRowCountElement.value) + 1;
        }
    });
    // }, 5000);
}



function createButtonElement(tableRowCount, partOfElementId, buttonInnerHTML, td_id){
    button = document.createElement('button');
    // 例:button0_0 button10_0
    button.id = 'button' + tableRowCount + partOfElementId;
    button.type = "button";
    button.innerHTML = buttonInnerHTML;
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
    const dialog = document.getElementById('wrapperCustomDialog');
    dialog.style.display = 'block'; // ダイアログを表示

    return new Promise((resolve, reject) => {
        document.getElementById('yesButton').addEventListener('click', function() {
            resolve(true); // 「はい」が選ばれた場合、Promiseを解決
            dialog.style.display = 'none'; // ダイアログを閉じる
        });

        document.getElementById('noButton').addEventListener('click', function() {
            resolve(false); // 「いいえ」が選ばれた場合、Promiseを解決
            dialog.style.display = 'none'; // ダイアログを閉じる
        });

        dialog.addEventListener('click', function(event){
            var clickElement = event.target;
            if(clickElement === this){
                resolve(false);
                dialog.style.display = 'none'; // ダイアログを閉じる
            }
        });
    });
}

function createTrElement(tableRowCount, tbody_element_id, tbody_element_firstChild){
    tr = document.createElement('tr');
    // 例:tr0 tr10
    tr.id = "tr"+tableRowCount;
    tbody_element_id.insertBefore(tr, tbody_element_firstChild);

    return tr.id;
}

function createTdElement(tableRowCount, partOfElementId, tr_element){
    td = document.createElement('td');
    td.id = 'td'+tableRowCount+partOfElementId;
    tr_element.appendChild(td);

    return td.id;
}

function createPElement(tableRowCount, partOfElementId){
    p = document.createElement('p');
    p.id = "p"+tableRowCount+partOfElementId;
    document.getElementById('registerForm').appendChild(p);

    return p.id;
}

function createImgElement(choice_pokemon_id, tableImgSrc, choice_pokemon_name, p_id){
    img = document.createElement('img');
    img.src = tableImgSrc + "/" + choice_pokemon_id['id'] + '.png';;
    img.alt = choice_pokemon_name;
    document.getElementById(p_id).appendChild(img);
}

function createLabelElement(tableRowCount, partOfElementId, innerHTML, p_id){
    label = document.createElement('label');
    label.id = 'label'+tableRowCount+partOfElementId;
    label.innerHTML = innerHTML;
    document.getElementById(p_id).appendChild(label);

    return label.id;
}

function createSelectElement(tableRowCount, partOfElementId, selectElementName, label_id){
    select = document.createElement('select');
    select.id = 'select'+tableRowCount+partOfElementId;
    select.name = selectElementName;
    document.getElementById(label_id).appendChild(select);

    return select.id;
}

function createOptionElement(option_text, select_id){
    option = document.createElement('option');
    option.text = option_text;
    document.getElementById(select_id).appendChild(option);
}

function createInputElement(input_id, type, input_name, td_id, width, hasRequired){
    input = document.createElement('input');
    input.id = input_id;
    input.type = type;
    input.name = input_name;
    input.style.width = width;
    input.required = hasRequired;
    document.getElementById(td_id).appendChild(input);

    if(input_id == "remarks"){
        input.addEventListener('blur', function(event){
            input_value = this.value;

            this_table_row_element = document.getElementById(event.target.parentElement.parentElement.id);
            option_element = this_table_row_element.children[1].children[0].children[0];
            pokemon_id = option_element.text;
            img_element = this_table_row_element.children[2].children[0];

            if(input_value == "色違い"){
                img_element.src = "storage/images/shiny/" + pokemon_id + ".png";
            }else{
                img_element.src = "storage/images/" + pokemon_id + ".png";
            }
        });
    }
}