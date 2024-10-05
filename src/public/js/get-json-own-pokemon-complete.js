
function sendAjaxRequest() {
    // setTimeout(() => {
    $.ajax({
        url: '/get-json-own-pokemon-complete',
        method: 'get',
        data: {
            // keyword: document.getElementById('keyword').value,
            keyword: keyword.value,
        },
        beforeSend: function(){
            // document.getElementById('loading').style.display = "block";
            loading.style.display = "block";
        },
        success: function(response) {
            // console.log(selectName.value);
            console.log(keyword.value);
            console.log(response.message);
            console.log(response.result_index_id_array);



            var buildInnerText = "<table><tr><th>id</th><th>ポケモン名</th><th>ニックネーム</th><th>sp</th><th>lv</th><th>食材lv1</th><th>食材lv30</th><th>食材lv60</th><th>メインスキル</th><th>サブスキルlv1</th><th>サブスキルlv25</th><th>サブスキルlv50</th><th>サブスキルlv75</th><th>サブスキルlv100</th><th>性格</th><th>備考</th></tr>";
            for(var i=0; i<response.message.length; i++){
                sub_skill_lv100_included = "";
                if(response.result_index_id_array[i].boolean_lv100){
                    sub_skill_lv100_included = "<td style='background-color: gray;'>"
                }else{
                    sub_skill_lv100_included = "<td>";
                }

                sub_skill_lv75_included = "";
                if(response.result_index_id_array[i].boolean_lv75){
                    sub_skill_lv75_included = "<td style='background-color: gray;'>"
                }else{
                    sub_skill_lv75_included = "<td>";
                }

                sub_skill_lv50_included = "";
                if(response.result_index_id_array[i].boolean_lv50){
                    sub_skill_lv50_included = "<td style='background-color: gray;'>"
                }else{
                    sub_skill_lv50_included = "<td>";
                }

                sub_skill_lv25_included = "";
                if(response.result_index_id_array[i].boolean_lv25){
                    sub_skill_lv25_included = "<td style='background-color: gray;'>"
                }else{
                    sub_skill_lv25_included = "<td>";
                }

                sub_skill_lv1_included = "";
                if(response.result_index_id_array[i].boolean_lv1){
                    sub_skill_lv1_included = "<td style='background-color: gray;'>"
                }else{
                    sub_skill_lv1_included = "<td>";
                }

                
                buildInnerText = buildInnerText + 
                                "<tr>" + 
                                "<td>" + response.message[i]['id'] + "</td>" + 
                                "<td>" + response.message[i]['own_pokemon_name'] + "</td>" + 
                                "<td>" + response.message[i]['nickname'] + "</td>" + 
                                "<td>" + response.message[i]['sp'] + "</td>" + 
                                "<td>" + response.message[i]['lv'] + "</td>" + 
                                "<td>" + response.message[i]['food_lv1'] + "</td>" + 
                                "<td>" + response.message[i]['food_lv30'] + "</td>" + 
                                "<td>" + response.message[i]['food_lv60'] + "</td>" + 
                                "<td>" + response.message[i]['main_skill'] + "</td>" + 
                                sub_skill_lv1_included + response.message[i]['sub_skill_lv1'] + "</td>" + 
                                sub_skill_lv25_included + response.message[i]['sub_skill_lv25'] + "</td>" + 
                                sub_skill_lv50_included + response.message[i]['sub_skill_lv50'] + "</td>" + 
                                sub_skill_lv75_included + response.message[i]['sub_skill_lv75'] + "</td>" + 
                                sub_skill_lv100_included + response.message[i]['sub_skill_lv100'] + "</td>" + 
                                "<td>" + response.message[i]['personality'] + "</td>" + 
                                "<td>" + response.message[i]['remarks'] + "</td>" + 
                                "</tr>";
            }
            
            
            buildInnerText = buildInnerText + "</table>";
            // document.でもoutput.(id名.)でもinnerHTMLを設定できる
            // document.getElementById('output').innerHTML = buildInnerText;
            output.innerHTML = buildInnerText;
        },
        error: function() {
            // エラー時の処理
            document.getElementById('output').innerHTML = 'Error: Could not load message.';
        },
        complete: function(){
            // document.getElementById('loading').style.display = "none";
            loading.style.display = "none";
        }
    });
    // }, 5000);
}
