
insertRowNumber=$(grep -n 'DB::table('\''foodlv1s'\'')->insert('\\['' src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)
# grep -n 'DB' src/database/seeders/PokemonSleep/Foodlv1Seeder.php
# grep -n 'DB::table('\' src/database/seeders/PokemonSleep/Foodlv1Seeder.php
echo $insertRowNumber



arrayList=($insertRowNumber)



sed -i '' $((${arrayList[0]}+2))'i\
            aaaaa\
' src/database/seeders/PokemonSleep/BackupSeeder.php