<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Hello World</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function sendAjaxRequest() {
            $.ajax({
                url: '/ajax-hello',
                method: 'GET',
                success: function(response) {
                    console.log(response.message.length);
                    // 成功時に返ってきたメッセージを表示
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
                    document.getElementById('output').innerHTML = buildInnerText;
                },
                error: function() {
                    // エラー時の処理
                    document.getElementById('output').innerText = 'Error: Could not load message.';
                }
            });
        }
    </script>
</head>
<body>
    <h1>AJAXでHello Worldを表示</h1>
    
    <p>ボタンを押したら、ImportOwnPokemonモデルの全データを配列形式のjsonで非同期に受け取る画面を表示します</p>
    <p>ImportOwnPokemonモデルの全データを配列形式のjsonでmessage変数を通して渡し、画面に非同期で表示します</p>
    <!-- ボタンをクリックするとAJAXリクエストが送信される -->
    <button onclick="sendAjaxRequest()">Click Me!</button>

    <!-- 出力先 -->
    <div id="output"></div>
</body>
</html>
