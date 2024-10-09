<style>
    .dialog {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        z-index: 1000;
    }

    .dialog-content {
        text-align: center;
    }

    .dialog button {
        margin: 10px;
    }
</style>

<div id="customDialog" class="dialog">
    <div class="dialog-content">
        <p>このアクションを実行しますか？</p>
        <button id="confirmYes">はい</button>
        <button id="confirmNo">いいえ</button>
    </div>
</div>

<button id="showDialog">ダイアログを表示</button>

<script>
    function showDialog() {
        const dialog = document.getElementById('customDialog');
        dialog.style.display = 'block'; // ダイアログを表示

        return new Promise((resolve, reject) => {
            document.getElementById('confirmYes').addEventListener('click', function() {
                resolve(true); // 「はい」が選ばれた場合、Promiseを解決
                dialog.style.display = 'none'; // ダイアログを閉じる
            });

            document.getElementById('confirmNo').addEventListener('click', function() {
                resolve(false); // 「いいえ」が選ばれた場合、Promiseを解決
                dialog.style.display = 'none'; // ダイアログを閉じる
            });
        });
    }

    document.getElementById('showDialog').addEventListener('click', async function() {
        const result = await showDialog(); // ダイアログの結果を待つ
        if (result) {
            console.log('アクション実行！');
        } else {
            console.log('アクションキャンセル');
        }
    });

</script>