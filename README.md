yii2-recaptcha-widget
=====================

Telegram component for Yii2.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require alexeevdv/yii2-telegram "1.0.0"
```

or add

```
"alexeevdv/yii2-telegram": "1.0.0"
```

to the ```require``` section of your `composer.json` file.

## Configuration

### Through application component
```php
"components" => [
    //...
    "telegram" => [
        "class" => "alexeevdv\telegram\Telegram",
        "host" => "DAEMON_HOST",
        "port" => "DAEMON_PORT"
    ],
    //...
],
```
