# codemaxapi
yii2 api for codemax

CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=car',
    'username' => 'root',
    'password' => 'password',
    'charset' => 'utf8',
];
```

update composer for all dependeinces  in root directory of app:
 composer update 

Start web server in web directory inside app:
yii serve
