<?php

include_once "model/Request.php";
include_once "control/ClassroomController.php";
include_once "control/ResponsableControll.php";
include_once "control/SchoolController.php";
include_once "control/StudentController.php";
include_once "control/TeacherController.php";
include_once "control/UserController.php";

class ResourceController
{
	private $controlMap = 
	[
		"classroom" 	=> "ClassroomController",
		"responsable" 	=> "ResponsableController",
		"school" 		=> "SchoolController",
		"student" 		=> "StudentController",
		"teacher" 		=> "TeacherController",
		"user" 			=> "UserController",
	];

	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}

	public function searchResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->search($request);
	}

}