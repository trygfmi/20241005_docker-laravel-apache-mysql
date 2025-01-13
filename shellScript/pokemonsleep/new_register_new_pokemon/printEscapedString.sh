argument1=$1


echo $argument1


# modifiedArgument1=$(echo $argument1 | sed 's/'\''/'\''\\'\'\''/g')
modifiedArgument1=$(echo $argument1 | sed "s/'/'\\\''/g")
echo $modifiedArgument1
# シェルスクリプト自体のエスケープ処理と、sedコマンドのエスケープ処理が必要なので、バックスラッシュが二つ必要
echo $modifiedArgument1 | sed 's/'\\['/\\[/g'
modifiedArgument1=$(echo $modifiedArgument1 | sed 's/'\\['/\\[/g')


testString="DB::table('foodlv1s')->insert(\["
testString2="DB\""$testString"::table('foodlv1s')->insert(\["
echo $testString2
# insertBackupFoodlv1SeedRowNumber=$(grep -n 'DB::table('\''foodlv1s'\'')->insert(\[' testEscapedString.txt | cut -d: -f1)
# insertBackupFoodlv1SeedRowNumber=$(grep -n "DB::table('foodlv1s')->insert(\[" testEscapedString.txt | cut -d: -f1)
# insertBackupFoodlv1SeedRowNumber=$(grep -n $testString testEscapedString.txt | cut -d: -f1)
insertBackupFoodlv1SeedRowNumber=$(grep -n $testString testEscapedString.txt | cut -d: -f1)
echo $insertBackupFoodlv1SeedRowNumber


