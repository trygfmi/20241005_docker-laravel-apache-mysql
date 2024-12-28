
insertFoodlv1SeedRowNumber=$(grep -n 'DB::table('\''foodlv1s'\'')->insert('\\['' src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)
echo $insertFoodlv1SeedRowNumber
sed -i '' $(($insertFoodlv1SeedRowNumber+2))'i\
            bbb\
' src/database/seeders/PokemonSleep/BackupSeeder.php



insertFoodlv30SeedRowNumber=$(grep -n 'DB::table('\''foodlv30s'\'')->insert('\\['' src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)
echo $insertFoodlv30SeedRowNumber
sed -i '' $(($insertFoodlv30SeedRowNumber+2))'i\
            bbb\
' src/database/seeders/PokemonSleep/BackupSeeder.php



insertFoodlv60SeedRowNumber=$(grep -n 'DB::table('\''foodlv60s'\'')->insert('\\['' src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)
echo $insertFoodlv60SeedRowNumber
sed -i '' $(($insertFoodlv60SeedRowNumber+2))'i\
            bbb\
' src/database/seeders/PokemonSleep/BackupSeeder.php



insertCreatePokemonTemplateSeedRowNumber=$(grep -n 'DB::table('\''create_pokemon_templates'\'')->insert('\\['' src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)
echo $insertCreatePokemonTemplateSeedRowNumber
sed -i '' $(($insertCreatePokemonTemplateSeedRowNumber+2))'i\
            bbb\
' src/database/seeders/PokemonSleep/BackupSeeder.php



insertCreatePokemonTemplate2SeedRowNumber=$(grep -n 'DB::table('\''create_pokemon_template2s'\'')->insert('\\['' src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)
echo $insertCreatePokemonTemplate2SeedRowNumber
sed -i '' $(($insertCreatePokemonTemplate2SeedRowNumber+2))'i\
            bbb\
' src/database/seeders/PokemonSleep/BackupSeeder.php



insertMainSkillSeedRowNumber=$(grep -n 'DB::table('\''main_skills'\'')->insert('\\['' src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)
echo $insertMainSkillSeedRowNumber
sed -i '' $(($insertMainSkillSeedRowNumber+2))'i\
            bbb\
' src/database/seeders/PokemonSleep/BackupSeeder.php



insertCreatePokemonTemplate3SeedRowNumber=$(grep -n 'DB::table('\''create_pokemon_template3s'\'')->insert('\\['' src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)
echo $insertCreatePokemonTemplate3SeedRowNumber
sed -i '' $(($insertCreatePokemonTemplate3SeedRowNumber+2))'i\
            bbb\
' src/database/seeders/PokemonSleep/BackupSeeder.php



insertChoicePokemonConstrainedSeedRowNumber=$(grep -n 'DB::table('\''choice_pokemon_constraineds'\'')->insert('\\['' src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)
echo $insertChoicePokemonConstrainedSeedRowNumber
sed -i '' $(($insertChoicePokemonConstrainedSeedRowNumber+2))'i\
            bbb\
' src/database/seeders/PokemonSleep/BackupSeeder.php



insertSubSkillSeedRowNumber=$(grep -n 'DB::table('\''sub_skills'\'')->insert('\\['' src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)
echo $insertSubSkillSeedRowNumber
sed -i '' $(($insertSubSkillSeedRowNumber+2))'i\
            bbb\
' src/database/seeders/PokemonSleep/BackupSeeder.php



insertPersonalitySeedRowNumber=$(grep -n 'DB::table('\''personalities'\'')->insert('\\['' src/database/seeders/PokemonSleep/BackupSeeder.php | cut -d: -f1)
echo $insertPersonalitySeedRowNumber
sed -i '' $(($insertPersonalitySeedRowNumber+2))'i\
            bbb\
' src/database/seeders/PokemonSleep/BackupSeeder.php



