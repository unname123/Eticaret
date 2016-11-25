<?php
namespace ZN\ViewObjects;

interface CDNInterface
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
	// Get
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function get($configName, $name);
	
	//----------------------------------------------------------------------------------------------------
	// Image
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function image($name);
	
	//----------------------------------------------------------------------------------------------------
	// Style
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function style($name);
	
	//----------------------------------------------------------------------------------------------------
	// Script
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function script($name);
	
	//----------------------------------------------------------------------------------------------------
	// Font
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function font($name);
	
	//----------------------------------------------------------------------------------------------------
	// Other
	//----------------------------------------------------------------------------------------------------
	//
	// @param string $name
	//
	//----------------------------------------------------------------------------------------------------
	public function file($name);
}