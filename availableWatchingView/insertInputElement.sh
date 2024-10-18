# $1:ビューファイル名 $2:ビューフォルダ名 $3:inputの要素数 
# $4:コントローラーのファイル名 $5:postのメソッド名 $6:post_helper_nameの名前
# $7:ルートファイル名 $8:コントローラーのフォルダ名
# 実行例：./insertInputElement.sh pokemon-sleep-test pokemon-sleep 4 TestTestController Test createPost test



viewFileName=$1
viewFileFolderName=$2
inputElementNumber=$3
controllerFileName=$4
controllerFolderName=$5
postMethod=$6 
postHelperName=$7
routeName=$8



insertRowNumber=4
sed -i '' ''$insertRowNumber'i\
    <form action="{{route('\'$postHelperName\'')}}" method="post">\
        @csrf\
    </form>\
' ../src/resources/views/$viewFileFolderName/$viewFileName.blade.php
insertRowNumber=$((insertRowNumber+2))



dataFile=labelTypeAndName.txt



last_char=$(tail -c 1 "$dataFile")
if [ -n "$last_char" ] && [ $last_char != "\n" ]; then
  insertNewLineAtLastRow.sh $dataFile
fi



count=0
while read line && [ $count != $inputElementNumber ]; do
    echo $count:name=$line

    dataArray=($line)
    sed -i '' ''$insertRowNumber'i\
        <p>\
            <label>\
                '${dataArray[0]}'\
                <input type="'${dataArray[1]}'" name="'${dataArray[2]}'">\
            </label>\
        </p>\
' ../src/resources/views/$viewFileFolderName/$viewFileName.blade.php
    
    insertRowNumber=$((insertRowNumber+6))

    count=$((count+1))
done < $dataFile



sed -i '' ''$insertRowNumber'i\
\
        <button type="submit">登録</button>\
' ../src/resources/views/$viewFileFolderName/$viewFileName.blade.php



sed -i '' '$a\
Route::post('\'$viewFileName\'', ['$controllerFileName'::class, '\'$postMethod\''])\
->name('\'$postHelperName\'');\
' ../src/routes/$routeName.php



# 該当ルートファイルに次回の追加に備えて改行追加
sed -i '' '$a\
\
\
\
' ../src/routes/$routeName.php



insertRowNumber=$(wc -l < ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php)
    sed -i '' ''$insertRowNumber'i\
\
    public function '$postMethod'(Request $request){\
        return "hello";\
    }\
' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php



