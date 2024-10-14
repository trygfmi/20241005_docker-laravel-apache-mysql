if [ -n "$1" ]; then
    echo "srcをコピーします"
    cp -r src $1

    echo "削除します"
    rm -r $1
else
    echo "引数にバックアップ名を記入してください"
fi
