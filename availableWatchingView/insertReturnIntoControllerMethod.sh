# ./insertReturnIntoControllerMethod.sh test pokemon-sleep TestTestController Test testtest



viewFileName=$1
viewFolderName=$2
controllerFileName=$3
controllerFolderName=$4
controllerMethodName=$5



cd ../src
sed -i '' '10i\
\
' app/Http/Controllers/$controllerFolderName/$controllerFileName.php
if [ $controllerMethodName == "index" ]; then
    insertRowNumber=$(grep -n "public function index()" app/Http/Controllers/$controllerFolderName/$controllerFileName.php | cut -d : -f 1)
    insertRowNumber=$((insertRowNumber+3))
    echo "insertRowNumber"$insertRowNumber
    sed -i '' ''$insertRowNumber'i\
        return view('\'$viewFolderName'.'$viewFileName\'');\
' app/Http/Controllers/$controllerFolderName/$controllerFileName.php
elif [ $controllerMethodName == "create" ]; then
    insertRowNumber=$(grep -n "public function create()" app/Http/Controllers/$controllerFolderName/$controllerFileName.php | cut -d : -f 1)
    insertRowNumber=$((insertRowNumber+3))
    echo "insertRowNumber"$insertRowNumber
    sed -i '' ''$insertRowNumber'i\
        return view('\'$viewFolderName'.'$viewFileName\'');\
' app/Http/Controllers/$controllerFolderName/$controllerFileName.php
else
    insertRowNumber=$(wc -l < app/Http/Controllers/$controllerFolderName/$controllerFileName.php)
    echo "insertRowNumber"$insertRowNumber
    sed -i '' ''$insertRowNumber'i\
\
    public function '$controllerMethodName'(){\
        return view('\'$viewFolderName'.'$viewFileName\'');\
    }\
' app/Http/Controllers/$controllerFolderName/$controllerFileName.php
fi