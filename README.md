# Cachet Twitter

A Twitter handle parser for Laravel 5 and 6.


## Installation

This version requires [PHP](https://php.net) 7.1 - 7.3, and supports Laravel 5.5 and above.

To get the latest version, simply require the project using [Composer](https://getcomposer.org):

```bash
$ composer require cachethq/twitter
```

Once installed, if you are not using automatic package discovery, then you need to register the `CachetHQ\Twitter\TwitterServiceProvider` service provider in your `config/app.php`.

If you'd like to use with [Laravel Markdown](https://github.com/GrahamCampbell/Laravel-Markdown), you'll need to add the `CachetHQ\Twitter\TwitterExtension` class to the `'extensions'` array in your `config/markdown.php` file.


## Security

If you discover a security vulnerability within this package, please e-mail us at support@cachethq.io. All security vulnerabilities will be promptly addressed.


## License

Cachet Twitter is licensed under [The MIT License (MIT)](LICENSE).
