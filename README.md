# jspack

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


jQuery important libraries preloaded in your [/public/packages] folder. With easy to use blade directives and calls.

## Install

Via Composer

``` bash
$ composer require chriscubos/jspack
```

## Usage

``` php
<?php JsPack::packages(['datatables', 'bootstrap-wysihtml5']);?>

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

[ico-version]: https://img.shields.io/packagist/v/chriscubos/jspack.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/chriscubos/jspack/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/chriscubos/jspack.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/chriscubos/jspack.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/chriscubos/jspack.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/chriscubos/jspack
[link-travis]: https://travis-ci.org/chriscubos/jspack
[link-scrutinizer]: https://scrutinizer-ci.com/g/chriscubos/jspack/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/chriscubos/jspack
[link-downloads]: https://packagist.org/packages/chriscubos/jspack
[link-author]: https://github.com/chriscubos
[link-contributors]: ../../contributors
