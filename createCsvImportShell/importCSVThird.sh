# テーブルのレコードを表示するviewファイル名 viewメソッドから受け取る変数名 controllerのファイル名
# 例 ./importCSVThird.sh show-import-csv main_skill ImportCsv
# ./importCsvThird.sh show-import-csv-sub sub_skill ImportCsvSub

# テーブルのレコードを表示するviewを作成
cd ../src
php artisan make:view $1
cd ..



# viewに表示させたいデータの文字列を作成
input=$4
input=${input/%?/}
IFS='_' read -r -a inputs <<< $input
buildString='<p>{{$'$2'->id}}'
for value in ${inputs[@]}; do
    buildString=$buildString'{{$'$2'->'$value'}}'
done
buildString=${buildString/%?/}
buildString=$buildString'</p>'
echo $buildString



# sed -i '' '3i\
# \
# ' src/resources/views/$1.blade.php
# sed -i '' '3i\
        # '$buildString'\
    # ];' src/resources/views/$1.blade.php
# テーブルのレコードのデータを表示できるコード追加
# sed -i '' '3i\
# \
# ' src/resources/views/$1.blade.php
# sed -i '' '3i\
#     @if ($'$2's)\
#         @foreach ($'$2's as $'$2')\
#             '$buildString'\
#         @endforeach\
#     @endif' src/resources/views/$1.blade.php



# ルートを設定してアクセス可能にする
sed -i '' '$a\
\
' src/routes/web.php
sed -i '' '$a\
Route::get('\'\/$1\'', ['$3'Controller::class, '\'show\'']);' src/routes/web.php



# controllerにテーブルの全レコードを取得してviewと一緒に返すコードを追加
sed -i '' '44i\
\
' src/app/Http/Controllers/$3Controller.php
sed -i '' '44i\
        $'$2's = '$3'::all();\
\
        return view('\'$1\'', ['\'$2s\'' => $'$2's]);\
' src/app/Http/Controllers/$3Controller.php