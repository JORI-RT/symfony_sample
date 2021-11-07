# リポジトリの目的
php/symfonyを用いた開発をするにあたって調査をすること

## setup/installation
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
## Creating page
ページと、APIのエンドポイントをつくるにはrouteとcontrollerを作る
routeはroute.yamlかannotationかattributeで定義できる

FlexというComposerプラグインがcomposer require hogeとするとうまい感じにしてくれる

### The bin/console Command
debugようのコマンド以下のように実行
```php
php bin/console debug:router
// output
//  -------------------------- -------- -------- ------ ----------------------------------- 
//   Name                       Method   Scheme   Host   Path                               
//  -------------------------- -------- -------- ------ ----------------------------------- 
//   _wdt                       ANY      ANY      ANY    /_wdt/{token}                      
//   _profiler_home             ANY      ANY      ANY    /_profiler/    
```
### The Web Debug Toolbar: Debugging Dream
ページ下部のグレーゾーンにデバック情報が満載
### Rendering a Template
composer require twig
テンプレートエンジンにtwigがある
### Checking out the Project Structure
root
- config
- src
- template...All your Twig templates live here.
- bin...bin/console
- var...This is where automatically-created files are stored, like cache files (var/cache/) and logs (var/log/).
- vendor...Third-party (i.e. "vendor") libraries live here!
- public...This is the document root for your project.