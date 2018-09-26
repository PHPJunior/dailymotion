# Dailymotion

Laravel Dailymotion

[![Latest Stable Version](https://poser.pugx.org/php-junior/dailymotion/v/stable)](https://packagist.org/packages/php-junior/dailymotion)
[![Total Downloads](https://poser.pugx.org/php-junior/dailymotion/downloads)](https://packagist.org/packages/php-junior/dailymotion)

## Installation
```php
composer require php-junior/dailymotion
```

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
PhpJunior\DailyMotion\DailyMotionProvider::class,
```

```php 
php artisan vendor:publish --provider="PhpJunior\DailyMotion\DailyMotionProvider"
```

This is the contents of the published config file:

```php
/*
|--------------------------------------------------------------------------
| Dailymotion
|--------------------------------------------------------------------------
|
|  Scope :  `read', `write', `delete', `email', `userinfo', `feed',
|           `manage_videos', `manage_comments', `manage_playlists',
|           `manage_tiles', `manage_subscriptions', `manage_friends',
|           `manage_favorites', `manage_likes', `manage_groups', `manage_records',
|           `manage_subtitles', `manage_features', `manage_history', `ifttt', `read_insights',
|           `manage_claim_rules', `delegate_account_management', `manage_analytics', `manage_player',
|           `manage_user_settings', `manage_collections', `manage_app_connections', `manage_applications'
|
|  Whitespace separated
*/

return [
    'client_id'     => 'client_id',
    'client_secret' => 'client_secret',
    'username'      => 'username',
    'password'      => 'password',
    'scope'         => 'manage_videos userinfo manage_playlists manage_user_settings manage_applications'
];

```

## Usage

To call a method , use the get, post or delete methods as follow:

```php
$result = DailyMotion::get( 
    '/videos', [
        'fields' => 'id,title,owner'
    ]);
```

Upload File

```php
DailyMotion::file($url)->post('/me/videos',[
    'title'     => 'Dailymotion upload test',
    'tags'      => 'dailymotion,api,sdk,test',
    'channel'   => 'videogames',
    'published' => true
]);
```

## Credits

- All Contributors

## Full Documentation

Read Full Documentation [here](https://developer.dailymotion.com/)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
## Support on Beerpay
Hey dude! Help me out for a couple of :beers:!

[![Beerpay](https://beerpay.io/PHPJunior/dailymotion/badge.svg?style=beer-square)](https://beerpay.io/PHPJunior/dailymotion)  [![Beerpay](https://beerpay.io/PHPJunior/dailymotion/make-wish.svg?style=flat-square)](https://beerpay.io/PHPJunior/dailymotion?focus=wish)
