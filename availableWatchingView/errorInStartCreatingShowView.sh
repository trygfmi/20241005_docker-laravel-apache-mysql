# エラーメソッドの定義
deleteCreateViewFile(){
    sleep 3
    rm -f ../src/resources/views/$viewFolderName/$viewFileName.blade.php
}

deleteInsertShowResult(){
    deleteCreateViewFile
}

deleteInsertControllerShowMethod(){
    deleteInsertShowResult
    if [ ! -f "error_log2_insertControllerShowMethod.txt" ]; then
        if grep -q 'public function '$controllerMethodName'(){' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php; then
            sed -i '' '/public function '$controllerMethodName'(){/,/}/d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
            sleep 3
            insertRowNumber=$(($(wc -l < ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php)-1))
            sed -i '' ''$insertRowNumber'd' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
        fi
    else
        echo "error_log2_insertControllerShowMethod.txtが存在したので実行しませんでした"
    fi

    if grep -q 'use App\\Models\\'$modelFolderName'\\'$modelFileName';' <(sed -n '8p' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php); then
        if ! grep -q ''$modelFileName'::all();' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php; then
            for i in $(seq 4); do
                sed -i '' '8d' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
            done
        fi
    fi

    sleep 3
}

deleteInsertRouteGet(){
    deleteInsertControllerShowMethod
    sed -i '' '/Route::get('\'$viewFileName\'', \['$controllerFileName'::class, '\'$controllerMethodName\''\])/,/->name('\'$getHelperName\'');/d' ../src/routes/$routeFileName.php
    
}

deleteInsertNewLine(){
    deleteInsertRouteGet
}

deleteMysqlInsertViewData(){
    sleep 3
    repeatNumber=$1
    for i in $(seq $repeatNumber); do
        sed -i '' '$d' ../src/routes/$routeFileName.php
    done
    deleteInsertNewLine
    

    
    selectedRouteUrlId=$(mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName --skip-column-names <<EOF
select id from $previewRouteTableName where route_url="$viewFileName";
EOF
)

    echo "id:"$selectedRouteUrlId
    sleep 3

    mysql -h 127.0.0.1 -P 3306 -u $user -p$password $databaseName --skip-column-names <<EOF
delete from $previewRouteTableName where id="$selectedRouteUrlId";
EOF
    
}



error_handler() {
    local errorRowNumber=$1
    echo '$0:エラーが発生したシェルスクリプトの呼び出し元:'$0
    echo '$1:'$1
    echo '$2:エラーが発生したシェルスクリプト:'$2
    errorShellScript=$2
    
    # if [ $errorRowNumber == 30 ]; then
    if [ $errorShellScript == "./createViewFile.sh" ]; then
        echo "createViewfile.shでエラーが発生しました"
        deleteCreateViewFile
    # elif [ $errorRowNumber == 34 ]; then
    elif [ $errorShellScript == "./insertShowResult.sh" ]; then
        echo "insertShowResult.shでエラーが発生しました"
        deleteInsertShowResult 
    # elif [ $errorRowNumber == 38 ]; then
    elif [ $errorShellScript == "./insertControllerShowMethod.sh" ]; then
        echo "insertControllerShowMethod.shでエラーが発生しました"
        exit 1
        deleteInsertControllerShowMethod
    # elif [ $errorRowNumber == 42 ]; then
    elif [ $errorShellScript == "./insertRouteGet.sh" ]; then
        echo "insertRouteGet.shでエラーが発生しました。"
        deleteInsertRouteGet
    # elif [ $errorRowNumber == 46 ]; then
    elif [ $errorShellScript == "./insertNewLine.sh" ]; then
        echo "insertNewLine.shでエラーが発生しました。"
        deleteInsertNewLine
    # elif [ $errorRowNumber == 50 ]; then
    elif [ $errorShellScript == "./mysqlInsertViewData.sh" ]; then
        echo "mysqlInsertViewData.shでエラーが発生しました。"
        deleteMysqlInsertViewData 3
    fi

    
    
    rm -f error_log1.txt
    rm -f error_log2_insertShowResult.txt
    rm -f error_log2_insertControllerShowMethod.txt

    exit 1
}


