# エラーメソッドの定義
error_handler() {
    local errorRowNumber=$2
    echo '$1:'$0
    echo '$2:'$1
    echo '$3:'$2

    if [ $errorRowNumber == 67 ]; then
        echo "use statementが見つかりませんでした"
        return    
    elif [ $errorRowNumber == 24 ]; then
        echo $errorRowNumber"のphp artisanでエラーが発生しました"
    elif [ $errorRowNumber == 27 ]; then
        echo $errorRowNumber"のsedコマンドでエラーが発生しました。"
        rm ../src/resources/views/$viewFolderName/$viewFileName.blade.php
    elif [ $errorRowNumber == 34 ]; then
        echo $errorRowNumber"のphp artisanコマンドでエラーが発生しました。"
        rm ../src/resources/views/$viewFolderName/$viewFileName.blade.php
    elif [ $errorRowNumber == 37 ]; then
        echo $errorRowNumber"のsedコマンドでエラーが発生しました。"
        rm ../src/resources/views/$viewFolderName/$viewFileName.blade.php
        rm app/Http/Controllers/$controllerFolderName/$controllerFileName.php
    elif [ $errorRowNumber == 61 ]; then
        echo $errorRowNumber"のsedコマンドでエラーが発生しました。"
        rm ../src/resources/views/$viewFolderName/$viewFileName.blade.php
        rm app/Http/Controllers/$controllerFolderName/$controllerFileName.php
    elif [ $errorRowNumber == 80 ]; then
        echo $errorRowNumber"のsedコマンドでエラーが発生しました。"
        rm ../src/resources/views/$viewFolderName/$viewFileName.blade.php
        rm ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
    elif [ $errorRowNumber == 89 ]; then
        echo $errorRowNumber"のsedコマンドでエラーが発生しました。"
        rm ../src/resources/views/$viewFolderName/$viewFileName.blade.php
        rm ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php
        sed -i '' 's/use App\\Http\\Controllers\\'$controllerFolderName'\\'$controllerFileName';//g' ../src/routes/$routeFileName.php
        sed -i '' 's/Route::get('\'$viewFileName$viewFileName\'', \['$controllerFileName'::class, '\'$controllerMethodName\''\]);//g' ../src/routes/$routeFileName.php
        sed -i '' '$ {N; s/\n//;}' ../src/routes/$routeFileName.php
        sed -i '' '$ {N; s/\n//;}' ../src/routes/$routeFileName.php
    fi
    
    # exit
}


