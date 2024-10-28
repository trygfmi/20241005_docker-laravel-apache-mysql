# ./createViewFile.sh "test" "pokemon-sleep"



trap 'echo $0 > error_log1.txt; echo "testtest"; exit 1' ERR



viewFileName=$1
viewFolderName=$2



cd ../src
# php artisanで既に存在しているファイルを作成しようとしてエラーになってもtrapは起動しない
php artisan make:view $viewFolderName/$viewFileName
# 存在しないディレクトリを指定すると、trapが起動する
cd ../availableWatchingView
sed -i '' '3i\
    <h1>hello</h1>\
' ../src/resources/views/$viewFolderName/$viewFileName.blade.php


