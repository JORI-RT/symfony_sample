# Creating page
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
- config
- src
- template...All your Twig templates live here.
- bin...bin/console
- var...This is where automatically-created files are stored, like cache files (var/cache/) and logs (var/log/).
- vendor...Third-party (i.e. "vendor") libraries live here!
- public...This is the document root for your project.