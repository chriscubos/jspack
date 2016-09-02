<?php

namespace Chriscubos\JsPack\Facades;

use Illuminate\Support\Facades\Facade;

class JsPack extends Facade
{
	protected static function getFacadeAccessor(){
		return 'JsPack';
	}
}