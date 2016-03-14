<?php

class Math
{
	
	private $pi = 3.14159261;

	function circle_area ($radius)
	{
		return ($this->pi * $radius * $radius);
	}

	function circle_areas ($radius)
	{
		$areas = array();
		foreach ($radius as $r)
		{
			array_push($areas, circle_area($r));
		}

		return $areas;
	}

	function fibonacci ($position)
	{
		if ($position == 0 || $position == 1)
			return $position;

		return (fibonacci() - 2) + (fibonacci() - 1);
	}

	function hypotenuse ($adjacent, $opposite)
	{
		return sqrt($adjacent * $adjacent + $opposite * $opposite);
	}

}