<?php
namespace ZN\Services;

class InternalURL implements URLInterface
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
	//
	//----------------------------------------------------------------------------------------------------
	
	//----------------------------------------------------------------------------------------------------
	// Call Method
	//----------------------------------------------------------------------------------------------------
	// 
	// __call()
	//
	//----------------------------------------------------------------------------------------------------
	use \CallUndefinedMethodTrait;

	//----------------------------------------------------------------------------------------------------
	// Error Control
	//----------------------------------------------------------------------------------------------------
	// 
	// $error
	// $success
	//
	// error()
	// success()
	//
	//----------------------------------------------------------------------------------------------------
	use \ErrorControlTrait;
	
	//----------------------------------------------------------------------------------------------------
	// Base Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const string
	//
	//----------------------------------------------------------------------------------------------------
	const BASE 		= BASE_URL;
	
	//----------------------------------------------------------------------------------------------------
	// Site Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const string
	//
	//----------------------------------------------------------------------------------------------------
	const SITE 		= SITE_URL;
	
	//----------------------------------------------------------------------------------------------------
	// Current Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const string
	//
	//----------------------------------------------------------------------------------------------------
	const CURRENT 	= CURRENT_URL;
	
	//----------------------------------------------------------------------------------------------------
	// Prev Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const string
	//
	//----------------------------------------------------------------------------------------------------
	const PREV 		= PREV_URL;
	
	//----------------------------------------------------------------------------------------------------
	// Host Name Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const string
	//
	//----------------------------------------------------------------------------------------------------
	const HOSTNAME	= HOST_URL;
	
	//----------------------------------------------------------------------------------------------------
	// Scheme Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const int
	//
	//----------------------------------------------------------------------------------------------------
	const SCHEME 	= PHP_URL_SCHEME;
	
	//----------------------------------------------------------------------------------------------------
	// Host Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const int
	//
	//----------------------------------------------------------------------------------------------------
	const HOST   	= PHP_URL_HOST;
	
	//----------------------------------------------------------------------------------------------------
	// Port Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const int
	//
	//----------------------------------------------------------------------------------------------------
	const PORT	 	= PHP_URL_PORT;
	
	//----------------------------------------------------------------------------------------------------
	// User Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const int
	//
	//----------------------------------------------------------------------------------------------------
	const USER	 	= PHP_URL_USER;
	
	//----------------------------------------------------------------------------------------------------
	// Pass Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const int
	//
	//----------------------------------------------------------------------------------------------------
	const PASS   	= PHP_URL_PASS;
	
	//----------------------------------------------------------------------------------------------------
	// Path Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const int
	//
	//----------------------------------------------------------------------------------------------------
	const PATH	 	= PHP_URL_PATH;
	
	//----------------------------------------------------------------------------------------------------
	// Query Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const int
	//
	//----------------------------------------------------------------------------------------------------
	const QUERY  	= PHP_URL_QUERY;
	
	//----------------------------------------------------------------------------------------------------
	// fragment Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const int
	//
	//----------------------------------------------------------------------------------------------------
	const FRAGMENT 	= PHP_URL_FRAGMENT;
	
	//----------------------------------------------------------------------------------------------------
	// Rfc1738 Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const int
	//
	//----------------------------------------------------------------------------------------------------
	const RFC1738	= PHP_QUERY_RFC1738; 
	
	//----------------------------------------------------------------------------------------------------
	// Rfc3986 Constant
	//----------------------------------------------------------------------------------------------------
	// 
	// @const int
	//
	//----------------------------------------------------------------------------------------------------
	const RFC3986	= PHP_QUERY_RFC3986;
	
	//----------------------------------------------------------------------------------------------------
	// Base
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $uri: empty
	// @param  numeric $index:  0
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public function base($uri = '', $index = 0)
	{
		return baseUrl($uri, $index);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Site
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $uri: empty
	// @param  numeric $index:  0
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public function site($uri = '', $index = 0)
	{
		return siteUrl($uri, $index);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Current
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $fix empty
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public function current($fix = '')
	{
		return currentUrl($fix);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Host
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $uri: empty
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public function host($uri = '')
	{
		return hostUrl($uri);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Prev
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  void
	// @return string
	//
	//----------------------------------------------------------------------------------------------------
	public function prev()
	{
		return prevUrl();
	}
	
	//----------------------------------------------------------------------------------------------------
	// Base 64 Decode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $data: empty
	// @param  bool    $strict: false
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function base64Decode($data = '', $strict = false)
	{
		return base64_decode($data, $strict);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Base 64 Encode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $data: empty
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function base64Encode($data = '')
	{	
		return base64_encode($data);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Headers
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $url: empty
	// @param  string $format: 0
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function headers($url = '', $format = 0)
	{
		return get_headers($url, $format);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Headers
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $fileName: empty
	// @param  bool   $useIncludePath: false
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function metaTags($fileName = '', $useIncludePath = false)
	{
		return get_meta_tags($fileName, $useIncludePath);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Build Query
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string $data         : empty
	// @param  string $numericPrefix: NULL
	// @param  string $separator    : NULL
	// @param  string $enctype      : RFC1738
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function buildQuery($data = '', $numericPrefix = NULL, $separator = NULL, $enctype = 'RFC1738')
	{
		return http_build_query($data, $numericPrefix, $separator, \Convert::toConstant($enctype, 'PHP_QUERY_'));	
	}
	
	//----------------------------------------------------------------------------------------------------
	// Parse
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $url      : empty
	// @param  numeric $component: 1
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function parse($url = '', $component = 1)
	{
		return parse_url($url, $component);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Raw Decode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $str: empty
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function rawDecode($str = '')
	{
		return rawurldecode($str);
	}

	//----------------------------------------------------------------------------------------------------
	// Raw Encode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $str: empty
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function rawEncode($str = '')
	{
		return rawurlencode($str);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Decode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $str: empty
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function decode($str = '')
	{
		return urldecode($str);
	}
	
	//----------------------------------------------------------------------------------------------------
	// Encode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param  string  $str: empty
	// @return mixed
	//
	//----------------------------------------------------------------------------------------------------
	public function encode($str = '')
	{
		return urlencode($str);
	}
}