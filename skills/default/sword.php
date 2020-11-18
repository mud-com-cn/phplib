<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_default_sword extends Skill {
	function __construct() {
		$this->set("skillid","sword");
		$this->set("skillname","基本剑术");
	}
}
?>
