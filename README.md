# php basic framework
- PHPのマイクロフレームワークであるslimをベース
    - [Slim Framework Documentation](http://docs.slimframework.com/)

## フォルダ構成
```
.
├── README.md
├── composer.json
├── config      # DBの設定とか
│   ├── config.php.sample
│   └── db      # sqlファイルを置く
├── lib         # ライブラリ的なもの
│   ├── bootstrap.php
│   └── helper.php
├── public      # webディレクトリ
│   ├── css
│   ├── img
│   ├── index.php  # 基本いじるファイル(MVCのコントローラーとモデルをガシガシ書いてく感じ)
│   └── js
├── templates   # viewファイルを置くとこ(header.phpとfooter.phpは共通化)
│   ├── footer.php
│   ├── header.php
│   ├── index.php
└── vendor      # コアファイルなのでいじらない
```

## slimのセットアップ

### macの設定
- とりあえずphp5.6にしておく
- mysqlも入ってなかったら入れておく

```
$ brew update
$ brew upgrade
$ brew tap homebrew/php
$ brew install php56 

# export PATH="$PATH:/usr/local/Cellar/" // bashrcとかにパス入れておく
```

### slimとかの設定

```
$ curl -sS https://getcomposer.org/installer | php
$ ./composer.phar install
$ cp config/config.php.sample config/config.php
$ mysql -uroot < config/db/create.sql

$ php -S localhost:8000 -t public/
```
ブラウザから [http://localhost:8000/](http://127.0.0.1:8000/) にアクセスできるか確認

### phpunitの確認
```
$ ./vendor/bin/phpunit --version
PHPUnit 4.5.0 by Sebastian Bergmann and contributors.
```

### 参考リンク
- [h5bp/html5-boilerplate](https://github.com/h5bp/html5-boilerplate)
- [Slim Framework Documentation](http://docs.slimframework.com/)
- [Slim マイクロフレームワークで REST アプリケーションを作成する](http://www.ibm.com/developerworks/jp/xml/library/x-slim-rest/)
- [Travis CI上でPHPアプリのWebベースのテストを自動化する - Engine Yard Blog](http://www.engineyard.co.jp/blog/2014/testing-php-app-with-selenium-on-travis/)
