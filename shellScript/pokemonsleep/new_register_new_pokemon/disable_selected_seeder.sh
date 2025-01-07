function change(){
    if [ $1 == 1 ] && [ $2 == true ]; then
        echo "Foodlv1Seeder"
        sed -i '' 's|$this->call(Foodlv1Seeder::class);|// $this->call(Foodlv1Seeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
    elif [ $1 == 2 ] && [ $2 == true ]; then
        echo "Foodlv30Seeder"
        sed -i '' 's|$this->call(Foodlv30Seeder::class);|// $this->call(Foodlv30Seeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
    elif [ $1 == 3 ] && [ $2 == true ]; then
        echo "Foodlv60Seeder"
        sed -i '' 's|$this->call(Foodlv60Seeder::class);|// $this->call(Foodlv60Seeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
    elif [ $1 == 4 ] && [ $2 == true ]; then
        echo "CreatePokemonTemplateSeeder"
        sed -i '' 's|$this->call(CreatePokemonTemplateSeeder::class);|// $this->call(CreatePokemonTemplateSeeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
    elif [ $1 == 5 ] && [ $2 == true ]; then
        echo "CreatePokemonTemplate2Seeder"
        sed -i '' 's|$this->call(CreatePokemonTemplate2Seeder::class);|// $this->call(CreatePokemonTemplate2Seeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
    elif [ $1 == 6 ] && [ $2 == true ]; then
        echo "MainSkillSeeder"
        sed -i '' 's|$this->call(MainSkillSeeder::class);|// $this->call(MainSkillSeeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
    elif [ $1 == 7 ] && [ $2 == true ]; then
        echo "CreatePokemonTemplate3Seeder"
        sed -i '' 's|$this->call(CreatePokemonTemplate3Seeder::class);|// $this->call(CreatePokemonTemplate3Seeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
    elif [ $1 == 8 ] && [ $2 == true ]; then
        echo "ChoicePokemonConstrainedSeeder"
        sed -i '' 's|$this->call(ChoicePokemonConstrainedSeeder::class);|// $this->call(ChoicePokemonConstrainedSeeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
    elif [ $1 == 9 ] && [ $2 == true ]; then
        echo "SubSkillSeeder"
        sed -i '' 's|$this->call(SubSkillSeeder::class);|// $this->call(SubSkillSeeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
    elif [ $1 == 10 ] && [ $2 == true ]; then
        echo "PersonalitySeeder"
        sed -i '' 's|$this->call(PersonalitySeeder::class);|// $this->call(PersonalitySeeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
    elif [ $1 == 11 ] && [ $2 == true ]; then
        echo "OwnPokemonCompleteSeeder"
        sed -i '' 's|$this->call(OwnPokemonCompleteSeeder::class);|// $this->call(OwnPokemonCompleteSeeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
    fi
}



trap 'exit 1' ERR 



# echo "disable_selected_seedersh"
# false



echo $@
echo $#



for((i=1; i <= $#; i++)); do
    if [ ${!i} == true ]; then
        change $i ${!i}
    else
        echo "debug: false"
    fi
done


