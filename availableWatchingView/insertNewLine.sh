# ./insertNewLine.sh test 3



routeFileName=$1
repeatNumber=$2



for i in $(seq $repeatNumber); do
    sed -i '' '$a\
\
' ../src/routes/$routeFileName.php
done