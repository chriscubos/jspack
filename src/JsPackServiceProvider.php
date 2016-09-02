<?php

namespace Chriscubos\JsPack;

use Illuminate\Support\Facades\Blade;
// use Illuminate\Support\ServiceProvider;
use Chriscubos\Packager\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;
use View;

class JsPackServiceProvider extends ServiceProvider
{
	protected $defer = false;

	protected $package_path = __DIR__.'/';

	public function boot()
	{
	}

	public function register()
	{
		$this->publishAll();
		$this->registerBladeDirectives();
		$this->loadAliases();
	}

	public function provides()
	{
		return ['jspack'];
	}

	private function registerBladeDirectives()
	{
		Blade::directive('jspack', function($expression) {
			return "<?=JsPack::packages($expression);?>";
		});
	}

	private function loadAliases()
	{
		$loader = \Illuminate\Foundation\AliasLoader::getInstance();
		$loader->alias('JsPack', 'Chriscubos\JsPack\JsPack');
	}
}