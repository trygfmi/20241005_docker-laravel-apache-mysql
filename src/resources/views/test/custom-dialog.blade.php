<style>
    .dialog {
    display: none; /* 初期状態で非表示 */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #dddddd;
    border: 1px solid #ccc;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1000;
    }

    .dialog-content {
        padding: 20px;
    }

    .dialog button {
        margin: 5px;
    }
</style>

<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
    <button id="customConfirmButton">確認する</button>

    <div id="customDialog" class="dialog">
        <div class="dialog-content">
            <p>削除しますか？</p>
            <button id="noButton">はい</button>
            <button id="yesButton">いいえ</button>
        </div>
    </div> 
</div>

<script>
    document.getElementById('customConfirmButton').addEventListener('click', function() {
        document.getElementById('customDialog').style.display = 'block'; // ダイアログを表示
    });

    // 「いいえ」ボタンがクリックされたとき
    document.getElementById('yesButton').addEventListener('click', function() {
        console.log("キャンセル"); // いいえを選んだ場合
        document.getElementById('customDialog').style.display = 'none'; // ダイアログを非表示
    });

    // 「はい」ボタンがクリックされたとき
    document.getElementById('noButton').addEventListener('click', function() {
        console.log("成功"); // はいを選んだ場合
        // document.body.style.backgroundColor = "red";
        document.getElementById('customDialog').style.display = 'none'; // ダイアログを非表示
    });
</script>