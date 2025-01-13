# ./changeDB_HOSTToLocalHost.sh
# .envファイルのDB_HOSTをデーターベースからローカルホストに変更して、php artisanを実行できるようにします



sed -i '' 's|DB_HOST=laravel_db2|# DB_HOST=laravel_db2|g' ../../../src/.env
sed -i '' 's|# DB_HOST=127.0.0.1|DB_HOST=127.0.0.1|g' ../../../src/.env
