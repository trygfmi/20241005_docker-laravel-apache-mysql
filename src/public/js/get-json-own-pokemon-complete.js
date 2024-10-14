
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


            sub_skill_lv1_index = 0;
            sub_skill_lv25_index = 0;
            sub_skill_lv50_index = 0;
            sub_skill_lv75_index = 0;
            sub_skill_lv100_index = 0;

            var buildInnerText = "<table><tr><th>id</th><th>画像</th><th>ポケモン名</th><th>ニックネーム</th><th>sp</th><th>lv</th><th>食材lv1</th><th>食材lv30</th><th>食材lv60</th><th>メインスキル</th><th>サブスキルlv1</th><th>サブスキルlv25</th><th>サブスキルlv50</th><th>サブスキルlv75</th><th>サブスキルlv100</th><th>性格</th><th>備考</th></tr>";
            for(var i=0; i<response.message.length; i++){
                sub_skill_lv100_td_style = "";
                if(response.message[i].id == response.sub_skill_lv100_id_array[sub_skill_lv100_index]){
                    sub_skill_lv100_td_style = "<td style='background-color: gray;'>"
                    sub_skill_lv100_index++;
                }else{
                    sub_skill_lv100_td_style = "<td>";
                }

                
                sub_skill_lv75_td_style = "";
                if(response.message[i].id == response.sub_skill_lv75_id_array[sub_skill_lv75_index]){
                    sub_skill_lv75_td_style = "<td style='background-color: gray;'>"
                    sub_skill_lv75_index++;
                }else{
                    sub_skill_lv75_td_style = "<td>";
                }

                sub_skill_lv50_td_style = "";
                if(response.message[i].id == response.sub_skill_lv50_id_array[sub_skill_lv50_index]){
                    sub_skill_lv50_td_style = "<td style='background-color: gray;'>"
                    sub_skill_lv50_index++;
                }else{
                    sub_skill_lv50_td_style = "<td>";
                }

                sub_skill_lv25_td_style = "";
                if(response.message[i].id == response.sub_skill_lv25_id_array[sub_skill_lv25_index]){
                    sub_skill_lv25_td_style = "<td style='background-color: gray;'>"
                    sub_skill_lv25_index++;
                }else{
                    sub_skill_lv25_td_style = "<td>";
                }

                sub_skill_lv1_td_style = "";
                if(response.message[i].id == response.sub_skill_lv1_id_array[sub_skill_lv1_index]){
                    sub_skill_lv1_td_style = "<td style='background-color: gray;'>"
                    sub_skill_lv1_index++;
                }else{
                    sub_skill_lv1_td_style = "<td>";
                }

                
                buildInnerText = buildInnerText + 
                                "<tr>" + 
                                "<td>" + response.message[i]['id'] + "</td>" + 
                                "<td><img src='storage/" + response.message[i]['image_path'] + "' alt='" + response.message[i]['own_pokemon_name'] + "'></td>" + 
                                "<td>" + response.message[i]['own_pokemon_name'] + "</td>" + 
                                "<td>" + response.message[i]['nickname'] + "</td>" + 
                                "<td>" + response.message[i]['sp'] + "</td>" + 
                                "<td>" + response.message[i]['lv'] + "</td>" + 
                                "<td>" + response.message[i]['food_lv1'] + "</td>" + 
                                "<td>" + response.message[i]['food_lv30'] + "</td>" + 
                                "<td>" + response.message[i]['food_lv60'] + "</td>" + 
                                "<td>" + response.message[i]['main_skill'] + "</td>" + 
                                sub_skill_lv1_td_style + response.message[i]['sub_skill_lv1'] + "</td>" + 
                                sub_skill_lv25_td_style + response.message[i]['sub_skill_lv25'] + "</td>" + 
                                sub_skill_lv50_td_style + response.message[i]['sub_skill_lv50'] + "</td>" + 
                                sub_skill_lv75_td_style + response.message[i]['sub_skill_lv75'] + "</td>" + 
                                sub_skill_lv100_td_style + response.message[i]['sub_skill_lv100'] + "</td>" + 
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
