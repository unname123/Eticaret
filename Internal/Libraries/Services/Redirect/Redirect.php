<?php
namespace ZN\Services;

class InternalRedirect implements RedirectInterface
{
	//----------------------------------------------------------------------------------------------------
	//
	// Yazar      : Ozan UYKUN <ozanbote@windowslive.com> | <ozanbote@gmail.com>
	// Site       : www.zntr.net
	// Lisans     : The MIT License
	// Telif Hakkı: Copyright (c) 2012-2016, zntr.net
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
	// $redirect
	//----------------------------------------------------------------------------------------------------
	//
	// @var array
	//
	//----------------------------------------------------------------------------------------------------
	protected $redirect = array
	(
		'time'	 => 0,
		'data'	 => [] 
	);
	
	//----------------------------------------------------------------------------------------------------
	// action()
	//----------------------------------------------------------------------------------------------------
	//
	// @var string $action
	//
	//----------------------------------------------------------------------------------------------------
	public function action($action = '')
	{
		$time = $this->redirect['time'];
	    $data = $this->redirect['data'];
		
		$this->redirect = [];
		
		return redirect($action, $time, $data);
	}
	
	//----------------------------------------------------------------------------------------------------
	// time()
	//----------------------------------------------------------------------------------------------------
	//
	// @var numeric $time
	//
	//----------------------------------------------------------------------------------------------------
	public function time($time = 0)
	{
		$this->redirect['time'] = $time;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// wait()
	//----------------------------------------------------------------------------------------------------
	//
	// @var numeric $time
	//
	//----------------------------------------------------------------------------------------------------
	public function wait($time = 0)
	{
		$this->redirect['time'] = $time;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// data()
	//----------------------------------------------------------------------------------------------------
	//
	// @var array $data
	//
	//----------------------------------------------------------------------------------------------------
	public function data($data = [])
	{
		$this->redirect['data'] = $data;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// insert()
	//----------------------------------------------------------------------------------------------------
	//
	// @var array $data
	//
	//----------------------------------------------------------------------------------------------------
	public function insert($data = [])
	{
		$this->redirect['data'] = $data;
		
		return $this;
	}
	
	//----------------------------------------------------------------------------------------------------
	// select()
	//----------------------------------------------------------------------------------------------------
	//
	// @var string $key
	//
	//----------------------------------------------------------------------------------------------------
	public function select($key = '')
	{
		return redirectData($key);
	}
	
	//----------------------------------------------------------------------------------------------------
	// delete()
	//----------------------------------------------------------------------------------------------------
	//
	// @var mixed $key
	//
	//----------------------------------------------------------------------------------------------------
	public function delete($key = '')
	{
		return redirectDeleteData($key);
	}
}