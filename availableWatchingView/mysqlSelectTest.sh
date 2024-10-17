resultString=$(mysql -h 127.0.0.1 -P 3306 -u user -ppassword laravel --skip-column-names <<EOF
# select view_file_name from preview_route_tests;
# select id, route_url from preview_route_tests where route_url="$1";
# select * from preview_route_tests where route_url="$1";
select view_file_name from preview_route_tests where route_url="$1";
EOF
)

# echo $resultString
# exit

<<test
for i in ${resultString[@]}; do
    echo $i
done
test

echo $resultString
