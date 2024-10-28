# ./mysqlUpdateColumnPost.sh pokemon-sleep-test createPost



viewFileName=$1
postMethod=$2
routeFileName=$3
user=$4
password=$5


mysql -h 127.0.0.1 -P 3306 -u $user -p$password laravel --skip-column-names <<EOF
update $routeFileName set post_method="$postMethod" where route_url="$viewFileName";
update $routeFileName set post_helper_name="$viewFileName-$postMethod" where route_url="$viewFileName";
EOF