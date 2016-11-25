<?php
namespace ZN\VariableTypes;

interface StringsInterface
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
	// mtrim
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	//
	//----------------------------------------------------------------------------------------------------
	public function mtrim($str);

	//----------------------------------------------------------------------------------------------------
	// Trim Slashes
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	//
	//----------------------------------------------------------------------------------------------------
	public function trimSlashes($str);
	
	//----------------------------------------------------------------------------------------------------
	// Casing
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $type lower, upper, title
	// @param string $encoding
	//
	//----------------------------------------------------------------------------------------------------
	public function casing($str, $type, $encoding);

	//----------------------------------------------------------------------------------------------------
	// Upper Case
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $encoding
	//
	//----------------------------------------------------------------------------------------------------
	public function upperCase($str, $encoding);

	//----------------------------------------------------------------------------------------------------
	// Lower Case
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $encoding
	//
	//----------------------------------------------------------------------------------------------------
	public function lowerCase($str, $encoding);

	//----------------------------------------------------------------------------------------------------
	// Title Case
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $encoding
	//
	//----------------------------------------------------------------------------------------------------
	public function titleCase($str, $encoding);
	
	//----------------------------------------------------------------------------------------------------
	// Camel Case
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	//
	//----------------------------------------------------------------------------------------------------
	public function camelCase($str);	
	
	//----------------------------------------------------------------------------------------------------
	// Pascal Case
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	//
	//----------------------------------------------------------------------------------------------------
	public function pascalCase($str);

	//----------------------------------------------------------------------------------------------------
	// Section
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	//
	//----------------------------------------------------------------------------------------------------
	public function section($str, $starting, $count, $encoding);

	//----------------------------------------------------------------------------------------------------
	// Search
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $needle
	// @param string $type
	// @param string $case
	//
	//----------------------------------------------------------------------------------------------------
	public function search($str, $needle, $type, $case);

	//----------------------------------------------------------------------------------------------------
	// Reshuffle
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $shuffle
	// @param string $reshuffle
	//
	//----------------------------------------------------------------------------------------------------
	public function reshuffle($str, $shuffle, $reshuffle);	

	//----------------------------------------------------------------------------------------------------
	// Recurrent Count
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $char
	//
	//----------------------------------------------------------------------------------------------------
	public function recurrentCount($str, $char);

	//----------------------------------------------------------------------------------------------------
	// Placement
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $delimiter
	// @param array  $array
	//
	//----------------------------------------------------------------------------------------------------
	public function placement($str, $delimiter, $array);	
	
	//----------------------------------------------------------------------------------------------------
	// Replace
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $delimiter
	// @param array  $array
	//
	//----------------------------------------------------------------------------------------------------
	public function replace($string, $oldChar, $newChar, $case);
	
	//----------------------------------------------------------------------------------------------------
	// To Array
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $string
	// @param string $split
	//
	//----------------------------------------------------------------------------------------------------
	public function toArray($string, $split);
	
	//----------------------------------------------------------------------------------------------------
	// To Char
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $ascii
	//
	//----------------------------------------------------------------------------------------------------
	public function toChar($ascii);
	
	//----------------------------------------------------------------------------------------------------
	// To Ascii
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	//
	//----------------------------------------------------------------------------------------------------
	public function toAscii($string);
	
	//----------------------------------------------------------------------------------------------------
	// Add Slashes
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $addDifferentChars
	//
	//----------------------------------------------------------------------------------------------------
	public function addSlashes($string, $addDifferentChars);
	
	//----------------------------------------------------------------------------------------------------
	// Remove Slashes
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	//
	//----------------------------------------------------------------------------------------------------
	public function removeSlashes($string);
	
	//----------------------------------------------------------------------------------------------------
	// Length
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $encoding
	//
	//----------------------------------------------------------------------------------------------------
	public function length($string, $encoding);
	
	//----------------------------------------------------------------------------------------------------
	// Encode
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param string $salt
	//
	//----------------------------------------------------------------------------------------------------
	public function encode($string, $salt);
	
	//----------------------------------------------------------------------------------------------------
	// Repeat
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param numeric $count
	//
	//----------------------------------------------------------------------------------------------------
	public function repeat($string, $count);
	
	//----------------------------------------------------------------------------------------------------
	// Pad
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string $str
	// @param numeric $count
	// @param string  $chars
	// @param string  $type
	//
	//----------------------------------------------------------------------------------------------------
	public function pad($string, $count, $chars, $type);
	
	//----------------------------------------------------------------------------------------------------
	// Apportion
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string  $string
	// @param numeric $length
	// @param string  $end
	//
	//----------------------------------------------------------------------------------------------------
	public function apportion($string, $length, $end);
	
	//----------------------------------------------------------------------------------------------------
	// Divide
	//----------------------------------------------------------------------------------------------------
	// 
	// @param string  $string
	// @param string  $seperator
	// @param numeric $index
	//
	//----------------------------------------------------------------------------------------------------
	public function divide($str, $separator, $index);
	
	//----------------------------------------------------------------------------------------------------
	// Translation Table
	//----------------------------------------------------------------------------------------------------
	// 
	// @param numeric $table
	// @param numeric $quote
	//
	//----------------------------------------------------------------------------------------------------
	public function translationTable($table, $quote);
}