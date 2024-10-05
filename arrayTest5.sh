# 引数を受け取る
input=$1

# 受け取った引数の最後の１文字を削除する
input=${input/%?/}

# エスケープ文字として扱えなくして(-r)、inputs配列変数(-a)に、
# input変数の文字列をアンダーバーで分割して格納する
IFS='_' read -r -a inputs <<< $input

# sedコマンドに使用する文字列を作成
buildString=""
for value in ${inputs[@]}; do
    buildString=$buildString\'$value\'','
done



# 改行
sed -i '' '2i\
\
' test.txt
# 改行
sed -i '' '2i\
\
' test.txt
# modelのレコードで一括登録できるようにする
# sed -i '' '12i\
    # protected $fillable = [\
        # '\'$4\'',\
    # ];' src/app/Models/$2.php
# modelのレコードで一括登録できるようにする
sed -i '' '3i\
    protected $fillable = [\
        '$buildString'\
    ];' test.txt



# テーブルカラムに対応させたいcsvファイルのカラム名を取得できるように文字列を作成して、
# test.txtファイルに挿入
for value in ${inputs[@]}; do
    sed -i '' '2i\
    \
' test.txt
    sed -i '' '2i\
            '\'$value\'' => $row['\'$value\''],' test.txt
done



# テーブルのレコードを表示するコードの文字列を作成
buildString='<p>{{$'$2'->id}}'
for value in ${inputs[@]}; do
    buildString=$buildString'{{$'$2'->'$value'}}'
done
buildString=${buildString/%?/}
buildString=$buildString'</p>'
echo $buildString



# sedコマンドで作成した文字列をファイルに挿入
sed -i '' '2i\
\
' test.txt
sed -i '' '2i\
        '$buildString'\
    ];' test.txt