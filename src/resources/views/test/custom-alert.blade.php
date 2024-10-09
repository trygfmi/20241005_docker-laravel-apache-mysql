<style>
    .alert {
        display: none; /* 初期状態で非表示 */
        padding: 20px;
        background-color: #f44336;
        color: white;
        margin-bottom: 15px;
        position: fixed;
        top: 40%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1000;
        opacity: 1;
        transition: opacity 1s ease-out;
        /* transition: color 1s ease-out; */
    }

    .fade-out {
        opacity: 0;
        /* color: blue; */
    }
</style>

<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <div id="customAlert" class="alert">削除されました</div>
    <button id="showAlert">アラートを表示</button>
</div>

<script>
    document.getElementById('showAlert').addEventListener('click', function() {
        const alertBox = document.getElementById('customAlert');
        
        // アラートを表示
        alertBox.style.display = 'block';

        // 3秒後にフェードアウト
        setTimeout(function() {
            alertBox.classList.add('fade-out');
            
            // フェードアウトのアニメーションが終わったらアラートを非表示にする
            setTimeout(function() {
                alertBox.style.display = 'none';
                alertBox.classList.remove('fade-out'); // 次回の表示に備えてクラスをリセット
            }, 1000); // フェードアウトの時間と同じ(1秒)
        }, 2000); // 3秒後にフェードアウト開始
    });
</script>