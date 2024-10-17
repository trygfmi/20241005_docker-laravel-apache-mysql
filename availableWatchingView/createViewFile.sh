# ./createViewFile.sh "test" "pokemon-sleep"



viewFileName=$1
viewFolderName=$2



cd ../src
php artisan make:view $viewFolderName/$viewFileName
sed -i '' '3i\
    <h1>hello</h1>\
' resources/views/$viewFolderName/$viewFileName.blade.php
cd ../availableWatchingView