


source ./errorTest.sh
trap 'error_handler_insertTestPreTables "insertTestPreTables"; exit 1' ERR 



# echo "outputFoodlv1DataIntoSeeder.sh"
# false



# テストテーブルにデータを追加するための下準備
sed -i '' 's|DB_HOST=laravel_db2|# DB_HOST=laravel_db2|g' ../../../src/.env
sed -i '' 's|# DB_HOST=127.0.0.1|DB_HOST=127.0.0.1|g' ../../../src/.env



# テストテーブルにデータを追加するための下準備
sed -i '' 's|// $this->call(TestPreTablesSeeder::class);|$this->call(TestPreTablesSeeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php



# データを実際に追加するコマンド
cd ../../../src
php artisan db:seed
cd ../shellScript/pokemonsleep/new_register_new_pokemon



# テストテーブルにデータを追加する前の設定状態に戻す処理
sed -i '' 's|$this->call(TestPreTablesSeeder::class);|// $this->call(TestPreTablesSeeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php



# テストテーブルにデータを追加する前の設定状態に戻す処理
sed -i '' 's|# DB_HOST=laravel_db2|DB_HOST=laravel_db2|g' ../../../src/.env
sed -i '' 's|DB_HOST=127.0.0.1|# DB_HOST=127.0.0.1|g' ../../../src/.env