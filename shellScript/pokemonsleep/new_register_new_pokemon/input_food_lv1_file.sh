# 新規ポケモンが追加されたときに実行するシェルスクリプト
# 指定したファイルから1行ずつ文字列を受け取って、php artisan db:seedで利用できる文字列を生成し、対象ファイルに記述するシェルスクリプトです
# 実行例: ./input_food_lv1_file.sh 2024-10-11/food_lv1_data.txt
# シンボリックファイル food_lv1_seeder_symbolic
# シンボリックリンク先 ../../../src/database/seeders/PokemonSleep/Foodlv1Seeder.php



trap 'exit 1' ERR 



# echo "input_food_lv1_file.sh"
# false



# 読み込むファイル名
inputFileName=$1



# 読み込むファイルの末尾に改行がないと最後の行が読み込まれないので改行を入れる処理を記述しています
./addNewLineIfLastCharIsNotEmptyLine.sh $inputFileName


# today=$(date +"%Y-%m-%d")
today=$2



# ファイルを1行ずつ読み込む
while read -r line; do
  foodLv1DataRowArray=($line)

  #sedコマンドで使用するエスケープ処理を含む文字列を生成する
  newPokemonRow=$(echo "[\'id\'=>"${foodLv1DataRowArray[0]}",\'food1\'=>\'"${foodLv1DataRowArray[1]}"\',\'created_at\'=>now(),\'updated_at\'=>now()],")
  echo $newPokemonRow >> $today/insertDataToSeeder/foodlv1.txt
done < $inputFileName



