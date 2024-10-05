# csvファイルを送信するviewのファイル名　controllerのファイル名 form-viewのラベルの値 modelのfillableプロパティに設定するカラム名
# 例 ./importCSV.sh import-csv ImportCsv label main_skill
# 例 ./importCSV.sh import-csv-sub ImportCsvSub label sub_skill

# フォームビューを作成
cd ../src
php artisan make:view $1
cd ..



# csvファイルを送信するフォームビューのコード追加
sed -i '' '3i\
\
' src/resources/views/$1.blade.php
sed -i '' '3i\
    <form action="{{route('\'$1\'')}}" method="post" enctype="multipart/form-data" >\
        @csrf\
        <label for=\"file\"  >'$3'</label>\
        <input id="file" type="file" name="file" required >\
        <button type="submit" >インポート</button>\
    </form>\
    \
    @if (session('\'message\''))\
        {{session('\'message\'')}}\
    @endif' src/resources/views/$1.blade.php



# ルート設定を追加してアクセス可能にする
sed -i '' '$a\
\
' src/routes/web.php
sed -i '' '$a\
use App\\Http\\Controllers\\'$2'Controller;\
Route::get('\'/$1\'', function(){\
    return view('\'$1\'');\
});\
Route::post('\'\/$1\'', ['$2'Controller::class, '\'import\''])->name('\'$1\'');' src/routes/web.php



# model,migration,resourceController,controllerを作成
cd src
php artisan make:model -mrc $2
cd ..



# controllerにcsvファイルをインポートできるようにする設定とメソッドを追加
sed -i '' '7i\
\
' src/app/Http/Controllers/$2Controller.php
sed -i '' '7i\
use App\\Imports\\'$2'Import;\
' src/app/Http/Controllers/$2Controller.php
sed -i '' '8i\
\
' src/app/Http/Controllers/$2Controller.php
sed -i '' '8i\
use Maatwebsite\\Excel\\Facades\\Excel;\
' src/App/Http/Controllers/$2Controller.php
sed -i '' '69i\
\
' src/app/Http/Controllers/$2Controller.php
sed -i '' '69i\
\
' src/app/Http/Controllers/$2Controller.php
sed -i '' '70i\
    public function import(Request $request){\
        Excel::import(new '$2'Import, $request->file('\'file\''));\
\
        return redirect()->back()->with(['\'message\'' => '\'インポートが成功しました\'']);\
    }' src/app/Http/Controllers/$2Controller.php



# エスケープ文字として扱えなくして(-r)、inputs配列変数に、
# input変数の文字列をアンダーバーで分割して格納する(-a)
input=$4
IFS='_' read -r -a inputs <<< $input
buildString=""
for value in ${inputs[@]}; do
    buildString=$buildString\'$value\'','
done



# modelでレコードを一括登録できるようにする
sed -i '' '11i\
\
' src/app/Models/$2.php
sed -i '' '11i\
\
' src/app/Models/$2.php
# sed -i '' '12i\
    # protected $fillable = [\
        # '\'$4\'',\
    # ];' src/app/Models/$2.php
sed -i '' '12i\
    protected $fillable = [\
        '$buildString'\
    ];' src/app/Models/$2.php
