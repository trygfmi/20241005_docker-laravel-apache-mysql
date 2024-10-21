error_handler() {
    # local errorRowNumber=$1
    echo '$0:エラーが発生したシェルスクリプトの呼び出し元:'$0
    echo '$1:'$1
    echo '$2:エラーが発生したシェルスクリプト:'$2

    if [ -f "error_log2_insertShowResult.txt" ]; then
        echo "$2でエラーが発生しました"
    else
        echo "sedコマンドでエラーが発生しました"
    fi
    


    
    echo ""
    exit 1
}


