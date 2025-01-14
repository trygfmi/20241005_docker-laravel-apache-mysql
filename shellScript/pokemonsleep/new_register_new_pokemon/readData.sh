# ./readData.sh 18 "20250108/insertDataToSeeder/foodlv1.txt" "../../../src/database/seeders/PokemonSleep/Foodlv1Seeder.php"



insertLineNumber=$1
inputFileName=$2
writingFile=$3

while read -r line; do
  array=($line)

  insertLineNumber=$(./writeDataIntoSeeder.sh $insertLineNumber $array $writingFile)

done < $inputFileName



echo $insertLineNumber
