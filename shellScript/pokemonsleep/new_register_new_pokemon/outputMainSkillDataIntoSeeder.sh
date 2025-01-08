


source ./errorTest.sh
trap 'error_handler_output_main_skill "outputMainSkillDataIntoSeeder.sh"; exit 1' ERR 



# echo "outputCreatePokemonTemplateDataIntoSeeder.sh"
# false



startLineNumber=18
insertLineNumber=18
inputFileName=$1
today=$2
writingFile=$(readlink main_skill_seeder_symbolic)
insertCreatePokemonTemplateSeedRowNumber=$(grep -n 'DB::table('\''main_skills'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)



sed -i '' ''$insertLineNumber'i\
        // '$today'に追加\
        DB::table('\'main_skills\'')->insert([\
' $writingFile
# 最後に挿入した文字列全体をコメントアウトするために追加した行数分、数をプラスしています
insertLineNumber=$((insertLineNumber+2))



while read -r line; do
  array=($line)
  
  echo $array

  sed -i '' ''$insertLineNumber'i\
            '$array'\
' $writingFile
  insertLineNumber=$((insertLineNumber+1))

#   sed -i '' $(($insertCreatePokemonTemplateSeedRowNumber+2))'i\
#             '$array'\
# ' ../../../src/database/seeders/PokemonSleep/BackupSeeder.php
done < $inputFileName
# done < 20241229/insertDataToSeeder/main_skill.txt



sed -i '' ''$insertLineNumber'i\
        ]);\
' $writingFile
insertLineNumber=$((insertLineNumber+1))



cd ../../../src
php artisan db:seed
cd ../shellScript/pokemonsleep/new_register_new_pokemon



sed -i '' ''$startLineNumber'i\
        /*\
' $writingFile
insertLineNumber=$((insertLineNumber+1))



sed -i '' ''$insertLineNumber'i\
        */\
\
' $writingFile

false
exit 1