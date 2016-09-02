# chriscubos/jspack

A LaravelPHP package for your important jQuery libraries preloaded in your [/public/packages] folder. With easy to use blade directives and calls.

## Install

Via Composer

``` bash
$ composer require chriscubos/jspack
```

## Setup [config/app.php]

```php
// add this
	'providers' => [

		Chriscubos\JsPack\JsPackServiceProvider::class,

	],

```

## Usage

``` php
<?php echo JsPack::packages(['datatables', 'bootstrap-wysihtml5']);?>
<?=JsPack::packages(['datatables', 'bootstrap-wysihtml5']);?>

// blade must use {!! !!}
{!!JsPack::packages(['datatables', 'bootstrap-wysihtml5'])!!}

// Directive
@jspack(['datatables', 'bootstrap-wysihtml5'])
```
#### Output
``` html
<script src='/packages/datatables/dataTables.bootstrap.min.js'></script>
<link href='/packages/datatables/dataTables.bootstrap.css' rel='stylesheet'/>
<link href='/packages/datatables/jquery.dataTables.min.css' rel='stylesheet'/>
<script src='/packages/datatables/jquery.dataTables.min.js'></script>
<script src='/packages/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js'></script>
<link href='/packages/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css' rel='stylesheet'/>
```


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email chriscubos@outlook.com instead of using the issue tracker.

## Credits

- [Christopher John Cubos][link-author]
- [Ethan Sky Cubos][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
