# 新規ポケモンが追加されたときに実行するシェルスクリプト
# 指定したファイルから1行ずつ文字列を受け取って、php artisan db:seedで利用できる文字列を生成し、対象ファイルに記述するシェルスクリプトです
# 実行例: ./input_create_pokemon_template3_file.sh 2024-10-11/create_pokemon_template3_data.txt
# create_pokemon_template3_seeder_symbolic
# ../../../src/database/seeders/PokemonSleep/CreatePokemontemplate3Seeder.php



trap 'exit 1' ERR 



# echo "input_create_pokemon_templete3_file.sh"
# false



# 読み込むファイル名
inputFileName=$1



# 読み込むファイルの末尾に改行がないと最後の行が読み込まれないので改行を入れる処理を記述しています
./addNewLineIfLastCharIsNotEmptyLine.sh $inputFileName



# today=$(date +"%Y-%m-%d")
today=$2



# ファイルを1行ずつ読み込む
while read -r line; do
  createPokemonTemplate3DataRowArray=($line)
#   newPokemonRow=$(echo "[\\'id\\'=>"${createPokemonTemplate3DataRowArray[0]}", \\'food1\\'=>\\'"${createPokemonTemplate3DataRowArray[1]}"\\', \\'food2\\'=>\\'"${createPokemonTemplate3DataRowArray[2]}"\\', \\'created_at\\'=>now(), \\'updated_at\\'=>now()],")
  newPokemonRow=$(echo "[\\'id\\'=>"${createPokemonTemplate3DataRowArray[0]}",\\'food_lv1_id\\'=>"${createPokemonTemplate3DataRowArray[1]}",\\'food_lv30_id\\'=>"${createPokemonTemplate3DataRowArray[2]}",\\'food_lv60_id\\'=>"${createPokemonTemplate3DataRowArray[3]}",\\'main_skill_id\\'=>"${createPokemonTemplate3DataRowArray[4]}",\\'created_at\\'=>now(),\\'updated_at\\'=>now()],")
  echo $newPokemonRow >> $today/insertDataToSeeder/create_pokemon_template3.txt
done < $inputFileName


