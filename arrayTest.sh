#!/bin/bash

# 空の配列を作成
inputs=()

# qが入力されるまで繰り返す
while true; do
    # ユーザーに入力を求める
    read -p "取り込みたいカラム名を入力してください（終了するには 'q' と入力）: " input

    # 入力が 'quit' の場合、ループを終了
    if [ "$input" == "q" ]; then
        break
    fi

    # 入力を配列に追加
    inputs+=("$input")
done

buildString=""
for i in `seq 0 ${#inputs[@]}`; do
    if [ $i == ${#inputs[@]} ]; then
        break
    fi
    buildString=$buildString${inputs[i]}' '
    # echo ${inputs[i]}
done

echo $buildString
./arrayTest2.sh $buildString ${#inputs[@]}

# 配列の中身を表示
# echo "入力された値:"
# for value in "${inputs[@]}"; do
    # echo "$value"
# done
