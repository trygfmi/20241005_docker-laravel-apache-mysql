controllerFileName="TestTestController"
controllerFolderName="Test"



insertRowNumber=$(wc -l < ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php)
echo $insertRowNumber
exit

grep -q 'use App\\Http\\Controllers\\'$controllerFolderName'\\'$controllerFileName';' ../src/routes/test.php
hasUseStatement=$?
if [ -n "$hasUseStatement" ] && [ $hasUseStatement == 0 ]; then
    sed -i '' '$a\
Route::get('\'ccccc\'', ['ddddd'::class, '\'eeeee\''])\
->name('\'$getHelperName\'');\
' ../src/routes/test.php
else
    sed -i '' '$a\
use App\\Http\\Controllers\\'$controllerFolderName'\\'ddddd';\
Route::get('\'ccccc\'', ['ddddd'::class, '\'eeeee\''])\
->name('\'fffff\'');\
' ../src/routes/test.php
fi