## udemy Laravel 講座


## ダウンロード方法

git clone
https://github.com/Shotaro08/Laravel_umarche_windows.git

git clone ブランチを指定してダウンロードする方法
git clone -b ブランチ名

## インストール方法
cd laravel-umarche
composer install
npm install
npm run dev

.env.exampleをコピーして、.envファイルを作成

.envファイルの中の下記をご利用の環境に合わせて変更してください

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

XAMP・MAMPまたは他の開発環境でDBを起動した後に

php artisan migrate:fresh --seed

と実行してください（データベーステーブルとダミーデータが作成されればOK）

最後に
php artisan key:generate
と入力してキーを生成後、

php artisan serve
で簡易サーバーを立ち上げ、表示確認してください。



## next to install

画像のダミーデータは
public/imagesフォルダ内にsample1.jpeg~sample6.jpegとして保存しています

php artisan storage:link で
storageフォルダにリンク後、

storage/app/public/productsフォルダ内に保存すると表示されます

ショップの画像も表示する場合は、
storage/app/public/shopsフォルダを作成し、画像を保存してください
