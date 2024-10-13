以下のコードを実行すると、テーブルに情報が挿入されて、ウェブ上で利用できるようになります
./register_new_pokemon.sh 用意したデータファイルのファイル名 追加した日付
実行例 ./register_new_pokemon.sh originFile.txt 20241013



originFile.txtの記入例です
pokemon 996 ココドラ マメミート めざましコーヒー ワカクサ大豆 6
pokemon 997 コドラ マメミート めざましコーヒー ワカクサ大豆 6
pokemon 998 フワンテ ワカクサコーン ピュアなオイル ほっこりポテト 80
pokemon 999 フワライド ワカクサコーン ピュアなオイル ほっこりポテト 80
main_skill 80 たくわえる

prefix(必ずつけてください) 図鑑番号 ポケモン名 食料lv1 foodlv30 foodlv60 メインスキル

prefixについて
pokemon:    新規ポケモンを追加したいとき
main_skill: 新規メインスキルを追加したいとき