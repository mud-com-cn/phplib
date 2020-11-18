<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_guanfu_manjianghong extends Skill {
	function __construct() {
		$this->set("skillid","manjianghong");
		$this->set("skillname","满江红心法");
		$this->set("enable-skill",array("force"));
		$this->set("exerts",array(
			"power_up",
			"heal",
			"roar",
));
		$this->set("parrys",array(
));


	}
	function power_up() {

	}
}
?>
