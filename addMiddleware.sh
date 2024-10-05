php artisan make:middleware Test.Middleware



sed -i '' '18i\
\
' src/app/Http/Middleware/Test/MiddlewareTest.php
sed -i '' '17i\
        echo '\'middlewareの処理中です\'';' src/app/Http/Middleware/Test/MiddlewareTest.php



sed -i '' '6i\
\
' src/app/bootstrap/app.php
sed -i '' '6i\
use App\\Http\\Middleware\\Test\\MiddlewareTest;\
' src/app/bootstrap/app.php



sed -i '' '16\
\
' src/app/bootstrap/app.php
sed -i '' '16i\
        //\
        // $middleware->append(MiddlewareTest::class);\
        /*\
        $middleware->appendToGroup('\'test\'', [\
            MiddlewareTest::class,\
        ]);\
        */\
        // /*\
        $middleware->alias([\
            '\'test\'' => MiddlewareTest::class,\
        ]);\
        // */\
' src/app/bootstrap/app.php



sed -i '' 's|Route::get('\'/show-import-csv\'', [ImportCsvController::class, '\'show\'']);|Route::get('\'/show-import-csv\'', [ImportCsvController::class, '\'show\''])->middleware('\'test\'');|' src/routes/import-csv.php



