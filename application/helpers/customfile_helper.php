<?php
if (!function_exists('loadVendor')) {
	function loadVendor($fileName, $type)
	{
		return base_url("vendors/{$type}/{$fileName}?id=".rand(0,99999999));
	}
}

if (!function_exists('loadAsset')) {
	function loadAsset($fileName, $type)
	{
		return base_url("assets/{$type}/{$fileName}?id=".rand(0,99999999));
	}
}