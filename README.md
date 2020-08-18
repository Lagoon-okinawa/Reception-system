# アプリケーションの構築
## Rails, Nuxtをそれぞれ別のターミナルで起動する

### Laravel
```
cd laravel

# 初回のみ
make build

# Laravel起動
make serve
```
Laravel http://localhost:8000

Dockerをstopする
`make stop`

その他コマンドは`make help`で確認

### Nuxt
```
cd nuxt

# 初回のみ
yarn install

# nuxt起動
yarn dev
```
nuxt http://localhost:3000

### Flutter
あらかじめAndroid StudioとXCodeをインストールし、シミュレーターをインストールしておく。

[flutter環境構築](https://qiita.com/k_naruse___/items/359fcdfb8aa092e9a44e)

[Flutter 開発環境構築手順 (2019年保存版)](https://qiita.com/tomy0610/items/896dc8ec9ba95c33194f)

AndroidとiOSのシミュレーターを起動させておく。
```
cd mobile

flutter run -d all
```