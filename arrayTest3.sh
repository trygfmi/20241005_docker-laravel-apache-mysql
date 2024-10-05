#!/bin/bash

# 空の配列を作成
inputString=""

# quitが入力されるまで繰り返す
while true; do
    # ユーザーに入力を求める
    read -p "取り込みたいカラム名を入力してください（終了するには 'q' と入力）: " input

    # 入力が 'quit' の場合、ループを終了
    if [ "$input" == "q" ]; then
        break
    fi

    # 入力を配列に追加
    inputString=$inputString$input'_'
done


echo $inputString


# IFSを設定して分割
IFS='_' read -r -a array <<< "$inputString"

# 配列の要素を表示
for element in "${array[@]}"; do
    echo "$element"
done

# 配列の中身を表示
# echo "入力された値:"
# for value in "${inputs[@]}"; do
    # echo "$value"
# done
