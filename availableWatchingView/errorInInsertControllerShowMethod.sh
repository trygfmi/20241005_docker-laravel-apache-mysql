# エラーメソッドの定義
deleteInsertNewLineAtController(){
    repeatNumber=$1
    insertRowNumber=$2
    sleep 3
    for i in $(seq $repeatNumber); do
    sed -i '' ''$insertRowNumber'd' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
done
}

deleteInsertUseStatementAtController(){
    sleep 3
    deleteInsertNewLineAtController $1 $2
}

deleteInsertMethodAtController(){
    # exit 1
    # public function〜を削除して元に戻す
    sleep 3
    sed -i '' '/public function '$controllerMethodName'(){/,/}/d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
    sleep 3
    insertRowNumber=$(($(wc -l < ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php)-1))
    sed -i '' ''$insertRowNumber'd' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
    # sed -i '' ''$insertRowNumber'N;s/\n//' ../src/App/Http/Controllers/$controllerFolderName/$controllerFileName.php

}



error_handler_2() {
    # local errorRowNumber=$1
    echo '$0:エラーが発生したシェルスクリプトの呼び出し元:'$0
    echo '$1:'$1
    echo '$2-エラーが発生したシェルスクリプト:'$2
    errorShellScript=$2

    if [ $errorShellScript == "./insertNewLineAtController.sh" ]; then
        echo "insertNewLineAtController.shでエラーが発生しました"
        deleteInsertNewLineAtController 3 8
    elif [ $errorShellScript == "./insertUseStatementAtController.sh" ]; then
        echo "./insertUseStatementAtController.shでエラーが発生しました"
        deleteInsertUseStatementAtController 3 8
    elif [ $errorShellScript == "./insertMethodAtController.sh" ]; then
        echo "./insertMethodAtController.shでエラーが発生しました"
        deleteInsertMethodAtController
    fi
    
    echo ""
    exit 1
}


