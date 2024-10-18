# ./insertReturnIntoControllerMethod.sh test pokemon-sleep TestTestController Test testtest



viewFileName=$1
viewFolderName=$2
controllerFileName=$3
controllerFolderName=$4
controllerMethodName=$5



cd ../src
insertRowNumber=$(wc -l < app/Http/Controllers/$controllerFolderName/$controllerFileName.php)
sed -i '' ''$insertRowNumber'i\
\
    public function '$controllerMethodName'(){\
        return view('\'$viewFolderName'.'$viewFileName\'');\
    }\
' app/Http/Controllers/$controllerFolderName/$controllerFileName.php