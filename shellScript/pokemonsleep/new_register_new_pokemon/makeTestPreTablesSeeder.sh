


source ./errorTest.sh
trap 'error_handler $today; exit 1' ERR 



cd ../../../src
php artisan make:seeder PokemonSleep/TestPreTablesSeeder2
cd ../shellScript/pokemonsleep/new_register_new_pokemon



sed -i '' '8i\
use Illuminate\\Support\\Facades\\DB;\
\
' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php



sed -i '' '18i\
\
        DB::table('\''personalities'\'')->insert([\
            \
        ]);\
' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php



sed -i '' '18i\
\
        DB::table('\''sub_skills'\'')->insert([\
            \
        ]);\
' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php



sed -i '' '18i\
\
        DB::table('\''choice_pokemon_constraineds'\'')->insert([\
            \
        ]);\
' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php



sed -i '' '18i\
\
        DB::table('\''create_pokemon_template3s'\'')->insert([\
            \
        ]);\
' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php



sed -i '' '18i\
\
        DB::table('\''main_skills'\'')->insert([\
            \
        ]);\
' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php



sed -i '' '18i\
\
        DB::table('\''create_pokemon_template2s'\'')->insert([\
            \
        ]);\
' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php



sed -i '' '18i\
\
        DB::table('\''create_pokemon_templates'\'')->insert([\
            \
        ]);\
' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php



sed -i '' '18i\
\
        DB::table('\''foodlv60s'\'')->insert([\
            \
        ]);\
' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php



sed -i '' '18i\
\
        DB::table('\''foodlv30s'\'')->insert([\
            \
        ]);\
' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php



sed -i '' '18i\
\
        DB::table('\''foodlv1s'\'')->insert([\
            \
        ]);\
' ../../../src/database/seeders/PokemonSleep/TestPreTablesSeeder2.php



