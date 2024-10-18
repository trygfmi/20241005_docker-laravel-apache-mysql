# ./mysqlGetRouteUrl.sh pokemon-sleep-test



viewFileName=$1
routeFileName=$2
user=$3
password=$4


echo $(mysql -h 127.0.0.1 -P 3306 -u $user -p$password laravel --skip-column-names <<EOF
select route_url from preview_route_$routeFileName where route_url="$viewFileName";
EOF
)