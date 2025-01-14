


source ./errorTest.sh
trap 'error_handler_output_own_pokemon "outputOwnPokemonDataIntoSeeder.sh"; exit 1' ERR 



# echo "outputOwnPokemonDataIntoSeeder.sh"
# false



startLineNumber=18
insertLineNumber=18
inputFileName=$1
today=$2
writingFile=$(readlink own_pokemon_seeder_symbolic)
insertCreatePokemonTemplateSeedRowNumber=$(grep -n 'DB::table('\''own_pokemons'\'')->insert('\\['' ../../../src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)



sed -i '' ''$insertLineNumber'i\
        // '$today'に追加\
        DB::table('\'own_pokemons\'')->insert([\
' $writingFile
# 最後に挿入した文字列全体をコメントアウトするために追加した行数分、数をプラスしています
insertLineNumber=$((insertLineNumber+2))



insertLineNumber=$(./readData.sh $insertLineNumber $inputFileName $writingFile)



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


