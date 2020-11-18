<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_default_move extends Skill {
	function __construct() {
		$this->set("skillid","move");
		$this->set("skillname","基础轻功");
	}
}
?>
