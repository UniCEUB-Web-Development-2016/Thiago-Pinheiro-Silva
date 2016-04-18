<?php

class Classroom
{

	private $level;
	private $year;
	private $class;
	private $room;
	private $period;

	public function setLevel($level)
	{
		$this->level = $level;
	}

	public function getLevel()
	{
		return $level;
	}

	public function setYear($year)
	{
		$this->year = $year;
	}

	public function getYear()
	{
		return $year;
	}

	public function setClass($class)
	{
		$this->class = $class;
	}

	public function getClass()
	{
		return $class;
	}

	public function setRoom($room)
	{
		$this->room = $room;
	}

	public function getRoom()
	{
		return $room;
	}

	public function setPeriod($period)
	{
		$this->period = $period;
	}

	public function getPeriod()
	{
		return $period;
	}

}