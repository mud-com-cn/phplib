<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_default_force extends Skill {
	function __construct() {
		$this->set("skillid","force");
		$this->set("skillname","基础内功");
	}
}
?>
