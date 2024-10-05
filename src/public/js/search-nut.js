
function sendAjaxRequest() {
    // document.getElementById('loading').style.display = "block";
    // setTimeout(() => {
    $.ajax({
        url: '/ajax-import-foreign-id-pokemon',
        method: 'GET',
        data: {
            // keyword: document.getElementById('keyword').value,
            keyword: keyword.value,
        },
        beforeSend: function(){
            beforeStartTime = Date.now();
            console.log('beforeSend executes:' + beforeStartTime);

            // document.getElementById('loading').style.display = "block";
            loading.style.display = "block";
        },
        success: function(response) {
            startTime = Date.now();
            console.log('success executes:' + startTime);
            // console.log(response.message.length);
            // 成功時に返ってきたメッセージを表示
            console.log(selectName.value);
            console.log(keyword.value);


            var buildInnerText = "<table><tr><th>id</th><th>ポケモン名</th><th>ニックネーム</th><th>sp</th><th>lv</th><th>食材lv1</th><th>食材lv30</th><th>食材lv60</th><th>メインスキル</th><th>サブスキルlv1</th><th>サブスキルlv25</th><th>サブスキルlv50</th><th>サブスキルlv75</th><th>サブスキルlv100</th><th>性格</th><th>備考</th></tr>";
            for(var i=0; i<response.message.length; i++){
                buildInnerText = buildInnerText + 
                                "<tr>" + 
                                "<td>" + response.message[i]['id'] + "</td>" + 
                                "<td>" + response.message[i]['ポケモン名'] + "</td>" + 
                                "<td>" + response.message[i]['ニックネーム'] + "</td>" + 
                                "<td>" + response.message[i]['sp'] + "</td>" + 
                                "<td>" + response.message[i]['lv'] + "</td>" + 
                                "<td>" + response.message[i]['食材lv1'] + "</td>" + 
                                "<td>" + response.message[i]['食材lv30'] + "</td>" + 
                                "<td>" + response.message[i]['食材lv60'] + "</td>" + 
                                "<td>" + response.message[i]['メインスキル'] + "</td>" + 
                                "<td>" + response.message[i]['サブスキルlv1'] + "</td>" + 
                                "<td>" + response.message[i]['サブスキルlv25'] + "</td>" + 
                                "<td>" + response.message[i]['サブスキルlv50'] + "</td>" + 
                                "<td>" + response.message[i]['サブスキルlv75'] + "</td>" + 
                                "<td>" + response.message[i]['サブスキルlv100'] + "</td>" + 
                                "<td>" + response.message[i]['性格'] + "</td>" + 
                                "<td>" + response.message[i]['備考'] + "</td>" + 
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
            endTime = Date.now();
            console.log('complete executes:' + endTime);
            // document.getElementById('loading').style.display = "none";
            loading.style.display = "none";
        }
    });
    // }, 5000);
}

function hello(){
    $.ajax({
        url: 'ajax-import-foreign-id-pokemon',
        method: 'GET',
        data: {
            keyword: document.getElementById('keyword').value
        },
        success: function(response) {
            alert("success");
            document.getElementById('output').innerText = "aaa";
        },
        error: function() {
            alert("failure");
        }
    });
}

function hello2(){
    alert('hello');
}

function test(){
    console.log("hello");
}