# ファイル名とルート名を入力することで、csvファイルをインポートするサイトと、表示するサイトを作成できます

# $1:csvをインポートするviewのファイル名 $2:controllerのファイル名 $3:csvをインポートするviewのラベルの値 $4:showメソッドでリターンされるviewに送られる変数名 $5:Importクラスのファイル名 $6:テーブルの全レコードを表示するviewファイル名
#                    1              2            3     4         5                  6
# ./importCSVInit.sh import-csv-sub importCsvSub label sub_skill ImportCsvSubImport show-import-csv-sub
# ./importCSVInit.sh import-pokemon-name PokemonName ポケモン pokemon_name PokemonNameImport show-import-pokemon-name



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

inputString=${inputString/%?/}
echo $inputString








# ./importCSV.sh $1 $2 $3 $4
# echo '作成されたmigrationファイルにカラムを追加してください、60秒後に自動的に処理を開始します'
# sleep 60
# ./importCSVSecond.sh $5 $2 $4
# ./importCSVThird.sh $6 $4 $2

sleep 60



#./importCSV.shと./importCSVSecond.shは、$buildStringで対応できそう
./importCSV.sh $1 $2 $3 $inputString
echo '作成されたmigrationファイルにカラムを追加してください、60秒後に自動的に処理を開始します'
sleep 60
./importCSVSecond.sh $5 $2 $buildString
./importCSVThird.sh $6 $4 $2 $buildString