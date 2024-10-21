# ./insertControllerShowMethod.sh test2 test Test2Controller Test PreviewRouteTest Preview



source ./errorInInsertControllerShowMethod.sh
trap 'error_handler_2 "$LINENO" $(cat error_log2_insertControllerShowMethod.txt) $(echo $0 > error_log1.txt); exit 1' ERR



viewFileName=$1
viewFolderName=$2
controllerFileName=$3
controllerFolderName=$4
modelFileName=$5
modelFolderName=$6
controllerMethodName=$7



# ルートファイルに該当するビューファイル名でアクセス可能にする文字列追加
# grep -q 'use sApp\\Http\\Controllers\\'$controllerFolderName'\\'$controllerFileName';' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
# hasUseStatement=$?
# if [ -n "$hasUseStatement" ] && [ $hasUseStatement != 0 ]; then
if grep -q 'use App\\Models\\'$modelFolderName'\\'$modelFileName';' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php; then
    echo "既にuse statementは宣言されています"
else
    ./insertNewLineAtController.sh 3 8 $controllerFileName $controllerFolderName
    ./insertUseStatementAtController.sh 8 $modelFileName $modelFolderName $controllerFileName $controllerFolderName
fi



insertRowNumber=$(wc -l < ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php)
./insertMethodAtController.sh $viewFileName $viewFolderName $controllerFileName $controllerFolderName $modelFileName $modelFolderName $controllerMethodName $insertRowNumber


