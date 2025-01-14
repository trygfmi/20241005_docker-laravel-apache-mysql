# ./writeDataIntoSeeder.sh 18 "[\'id\'=>1000,\'food1\'=>\'aaa\',\'created_at\'=>now(),\'updated_at\'=>now()]," ../../../src/database/seeders/PokemonSleep/Foodlv1Seeder.php



insertLineNumber=$1
array=$2
writingFile=$3

sed -i '' ''$insertLineNumber'i\
            '$array'\
' $writingFile
insertLineNumber=$((insertLineNumber+1))

#   sed -i '' $(($insertBackupFoodlv1SeedRowNumber+2))'i\
#             '$array'\
# ' ../../../src/database/seeders/PokemonSleep/BackupSeeder.php



echo $insertLineNumber
