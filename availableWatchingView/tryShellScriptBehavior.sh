if grep -q '^.*aaa.*$' <(sed -n '8p' ../src/app/Http/Controllers/Test/Test2Controller.php); then echo "こんにちは"; fi


if ! grep -q 'use ' <(sed -n '8p' ../src/app/Http/Controllers/Test/Test2Controller.php); then
    echo "こんにちは";
else
    echo "aaa"
fi
