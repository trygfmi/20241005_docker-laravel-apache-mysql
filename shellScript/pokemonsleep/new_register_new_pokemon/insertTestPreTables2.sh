
sed -i '' 's|// $this->call(TestPreTablesSeeder::class);|$this->call(TestPreTablesSeeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
sed -i '' 's|$this->call(TestPreTablesSeeder::class);|// $this->call(TestPreTablesSeeder::class);|g' ../../../src/database/seeders/DatabaseSeeder.php
