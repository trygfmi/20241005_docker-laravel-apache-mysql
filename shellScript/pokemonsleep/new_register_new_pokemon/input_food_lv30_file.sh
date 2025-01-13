# 新規ポケモンが追加されたときに実行するシェルスクリプト
# 指定したファイルから1行ずつ文字列を受け取って、php artisan db:seedで利用できる文字列を生成し、対象ファイルに記述するシェルスクリプトです
# 実行例: ./input_food_lv30_file.sh 2024-10-11/food_lv30_data.txt
# food_lv30_seeder_symbolic
# ../../../src/database/seeders/PokemonSleep/Foodlv30Seeder.php



trap 'exit 1' ERR 



# echo "input_food_lv30_file.sh"
# false



# 読み込むファイル名
inputFileName=$1



# 読み込むファイルの末尾に改行がないと最後の行が読み込まれないので改行を入れる処理を記述しています
./addNewLineIfLastCharIsNotEmptyLine.sh $inputFileName



# today=$(date +"%Y-%m-%d")
today=$2



# ファイルを1行ずつ読み込む
while read -r line; do
  foodLv30DataRowArray=($line)
#   newPokemonRow=$(echo "[\\'id\\'=>"${foodLv30DataRowArray0]}", \\'food1\\'=>\\'"${foodLv30DataRowArray1]}"\\', \\'food2\\'=>\\'"${foodLv30DataRowArray2]}"\\', \\'created_at\\'=>now(), \\'updated_at\\'=>now()],")
  newPokemonRow=$(echo "[\\'id\\'=>"${foodLv30DataRowArray[0]}",\\'food1\\'=>\\'"${foodLv30DataRowArray[1]}"\\',\\'food2\\'=>\\'"${foodLv30DataRowArray[2]}"\\',\\'created_at\\'=>now(),\\'updated_at\\'=>now()],")
  echo $newPokemonRow >> $today/insertDataToSeeder/foodlv30.txt
done < $inputFileName


