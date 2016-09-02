<?php

namespace Chriscubos\JsPack;

class JsPack {

	protected static $css="<link href='{{url}}' rel='stylesheet'/>\n";
	protected static $js="<script src='{{url}}'></script>\n";

	public static function check()
	{
		return "Congratulations! ## ".__NAMESPACE__."\\".get_class()." ## class is working fine.";
	}

	public static function packages($packages)
	{
		$urls = [];
		$processed = '';
		if (is_array($packages)) {
			foreach ($packages as $package) {
				$url = config('jspack.package.'.$package);
				$processed .= self::processUrls($url, "/packages/$package", $x);
			}
		} else {
			$urls = config('jspack.package.'.$packages);
			return self::processUrls($urls, "/packages/$packages", $x);
		}
		return $processed;
	}

	public static function js($packages)
	{
		return self::packages($packages);
	}

	public static function css($packages)
	{
		return self::packages($packages);
	}

	public static function processUrls($urls, $path, $x=[]) {
		$asset="";
		foreach ($urls as $url) {
			if (str_is("http*", $url)==0) {
				if (!str_is('*.css', $url) &&  !str_is('*.js', $url)) {
					$asset .= self::packages($url);
				} else {
					$sub = isset($x['has_sub'])?(str_is('*.css', $url) ? '/css':'/js'):'';
					$url = "$path$sub/$url";
					$asset .= self::makeHtml($url);
				}
			} else {
				$asset .= self::makeHtml($url);
			}
		}
		return $asset;
	}

	public static function makeHtml($url)
	{
		return str_replace('{{url}}', $url, (str_is('*.css', $url) ? self::$css : self::$js));
	}

}