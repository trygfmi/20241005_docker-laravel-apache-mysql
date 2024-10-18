# ./createControllerFile.sh TestTestTestController Test



controllerFileName=$1
controllerFolderName=$2



cd ../src
php artisan make:controller $controllerFolderName/$controllerFileName
