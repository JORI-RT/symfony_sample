# setup/installation
組み込みサーバでアプリを起動する方法
```sh
# 以下コマンドでおそらく組み込みWebServerが起動
symfony server:start
## サーバーログは以下
~/.symfony/log/f52327ddcca9e4ab30f1138400d8f95b1962973a.log
## 以下でホーム画面がみれる
http://localhost:8000/
```
bundle...パッケージのことらしい、使う前に設定ファイルを編集する必要あり   
recipe...bundleのinstallとenableを管理  
symfony.lockでbundleのrecipeを追跡するから必ずコミットしてリポジトリにいれましょうとのこと  
セキュリティチェック
```sh
symfony check:security
## networkにリポジトリを晒すわけではなくチェック用のDBをfetchしてチェックするため安心
```