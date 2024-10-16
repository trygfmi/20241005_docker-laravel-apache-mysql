# 実行例：./insertDataToMysql.sh pokemon-sleep-test pokemon-sleep-test TestTestController create



user="user"
password="password"

<<test
mysql -h 127.0.0.1 -P 3306 -u $user -p$password laravel --skip-column-names <<EOF
insert into insert_tests (name, value) values ("testtest", 100);
EOF
test




# view_file_name=$viewFileName.blade.php
# route_url=$viewFileName
# controller=$controllerFileName
# get_method=$controllerMethodName
view_file_name=test.blade.php
route_url=test
controller=TestTestController
get_method=index
get_helper_name=$route_url-$get_method
# view_file_name=$1
# route_url=$2
# controller=$3
# get_method=$4
# get_helper_name=$route_url-$get_method
middleware=
post_method=
post_helper_name=
model=
table_name=

mysql -h 127.0.0.1 -P 3306 -u $user -p$password laravel --skip-column-names <<EOF
insert into preview_route_tests (view_file_name, route_url, controller, get_method,
get_helper_name, middleware, post_method, post_helper_name, model, table_name) 
values ("$view_file_name", "$route_url", "$controller", "$get_method", 
"$get_helper_name", "$middleware", "$post_method", "$post_helper_name", 
"$model", "$table_name");
EOF


