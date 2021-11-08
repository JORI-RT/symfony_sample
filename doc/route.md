# ROUTE
routeにはurlとcontroller actionをむず日つける他に,SEOフレンドリなURLを作る目的もある
```sh
(e.g. /read/intro-to-symfony instead of index.php?article_id=57).
```
一つのコントローラークラスに2つのクラスを定義しても最初のクラスしかsymfonyが読み込まない
以下のnameはapplicaitonで一意にする必要がある
```php
/*
 * @Route("/blog", name="blog_list")
 * /
```
## url matching
defaultでは全部のverbがマッチする
以下のような感じでconditionをかける
 ```
    /**
     * @Route(
     *     "/contact",
     *     name="contact",
     *     condition="context.getMethod() in ['GET', 'HEAD'] and request.headers.get('User-Agent') matches '/firefox/i'"
     * )
     *
     * expressions can also include configuration parameters:
     * condition: "request.headers.get('User-Agent') matches '%app.allowed_browsers%'"
     */
 ```
 動的パラメータマッチング
 ```
    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
 ```