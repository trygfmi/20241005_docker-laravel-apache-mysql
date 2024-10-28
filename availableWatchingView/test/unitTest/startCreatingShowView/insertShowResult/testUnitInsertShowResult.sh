# cd availableWatchingView/test/UnitTest/startCreatingShowView/insertShowResult
# ./testErrorLine19.sh



viewFileName=test-show1000
viewFolderName=test



cd ../../../..



cd ../src
php artisan make:view $viewFolderName/$viewFileName
cd ../availableWatchingView



sed -i '' '3i\
    \
' ../src/resources/views/$viewFolderName/$viewFileName.blade.php



./insertShowResult.sh $viewFileName $viewFolderName laravel register_shell_scripts user password



sleep 10



rm -f ../src/resources/views/$viewFolderName/$viewFileName.blade.php


