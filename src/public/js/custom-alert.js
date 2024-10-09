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
}, 1000); // 3秒後にフェードアウト開始
