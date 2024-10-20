# ./insertNewLine.sh test 3



routeFileName=$1
repeatNumber=$2


# exit 1
for i in $(seq $repeatNumber); do
    sed -i '' '$a\
\
' ../src/routes/$routeFileName.php
done
# exit 1
