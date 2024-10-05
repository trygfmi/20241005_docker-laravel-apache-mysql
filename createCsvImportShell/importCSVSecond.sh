# $1:Importのファイル名 $2:modelのファイル名 importクラスで設定するテーブルカラムとcsvカラム
# 例 ./importCSVSecond.sh ImportCsvImport ImportCsv main_skill
# ./importCsvSecond.sh ImportCsvSubImport ImportCsvSub sub_skill



# ※migrationファイルの設定忘るるなかれ



# envファイルでphp artisan migrateできるように設定修正
cd ..
sed -i '' 's|DB_HOST=laravel_db|# DB_HOST=laravel_db|' src/.env
sed -i '' 's|# DB_HOST=127.0.0.1|DB_HOST=127.0.0.1|' src/.env



# migrationファイル実行でmysqlにテーブル追加
cd src
php artisan migrate
cd ..



# .envファイルを元の設定に戻す
sed -i '' 's|# DB_HOST=laravel_db|DB_HOST=laravel_db|' src/.env
sed -i '' 's|DB_HOST=127.0.0.1|# DB_HOST=127.0.0.1|' src/.env



# csvファイルのインポートで使用するimportクラス作成
cd src
php artisan make:import $1 --model=$2
cd ..



# importクラスにテーブルのカラムに対応する値を、csvファイルのカラム名で読み取れる設定を追加
sed -i '' '7i\
\
' src/app/Imports/$1.php
sed -i '' '7i\
use Maatwebsite\\Excel\\Concerns\\WithHeadingRow;' src/app/Imports/$1.php
sed -i '' '9s/$/, WithHeadingRow/' src/app/Imports/$1.php
sed -i '' '20i\
\
' src/app/Imports/$1.php
# テーブルカラムに対応させたいcsvファイルのカラム名を取得できるように文字列を作成して、
# src/app/Imports/$1.phpファイルに挿入
for value in ${inputs[@]}; do
    sed -i '' '20i\
    \
' test.txt
    sed -i '' '20i\
            '\'$value\'' => $row['\'$value\''],' src/app/Imports/$1.php
done
# sed -i '' '20i\
            # '\'$3\'' => $row['\'$3\''],' src/app/Imports/$1.php



