inputs=($@)

echo ${#inputs[@]}
for value in ${inputs[@]}; do
    echo $value
done