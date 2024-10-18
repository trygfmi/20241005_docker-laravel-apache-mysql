# ./insertControllerShowMethod.sh test2 test Test2Controller Test PreviewRouteTest Preview


viewFileName=$1
viewFolderName=$2
controllerFileName=$3
controllerFolderName=$4
modelFileName=$5
modelFolderName=$6



./insertNewLineAtController.sh 3 8 $controllerFileName $controllerFolderName



./insertUseStatementAtController.sh 8 $modelFileName $modelFolderName $controllerFileName $controllerFolderName



insertRowNumber=$(wc -l < ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php)
sed -i '' ''$insertRowNumber'i\
\
    public function show(){\
        $result = '$modelFileName'::all();\
\
        return view('\'$viewFolderName'.'$viewFileName\'', ['\''message'\''=>$result]);\
    }\
' ../src/app/Http/Controllers/$controllerFolderName/$controllerFileName.php