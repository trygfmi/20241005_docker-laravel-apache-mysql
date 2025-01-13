# 新規ポケモンが追加されたときに実行するシェルスクリプト
# 指定したファイルから1行ずつ文字列を受け取って、php artisan db:seedで利用できる文字列を生成し、対象ファイルに記述するシェルスクリプトです
# 実行例: ./input_main_skill_file.sh 2024-10-11/main_skill_data.txt
# main_skill_seeder_symbolic
# ../../../src/database/seeders/PokemonSleep/MainSkillSeeder.php



trap 'exit 1' ERR 



# echo "input_main_skill_file.sh"
# false



# 読み込むファイル名
inputFileName=$1


# 読み込むファイルの末尾に改行がないと最後の行が読み込まれないので改行を入れる処理を記述しています
./addNewLineIfLastCharIsNotEmptyLine.sh $inputFileName



# today=$(date +"%Y-%m-%d")
today=$2



# ファイルを1行ずつ読み込む
while read -r line; do
  mainSkillDataRowArray=($line)
#   newPokemonRow=$(echo "[\\'id\\'=>"${mainSkillDataRowArray[0]}", \\'food1\\'=>\\'"${mainSkillDataRowArray[1]}"\\', \\'food2\\'=>\\'"${mainSkillDataRowArray[2]}"\\', \\'created_at\\'=>now(), \\'updated_at\\'=>now()],")
  newPokemonRow=$(echo "[\\'id\\'=>"${mainSkillDataRowArray[0]}",\\'main_skill\\'=>\\'"${mainSkillDataRowArray[1]}"\\',\\'created_at\\'=>now(),\\'updated_at\\'=>now()],")
  echo $newPokemonRow >> $today/insertDataToSeeder/main_skill.txt
done < $inputFileName


