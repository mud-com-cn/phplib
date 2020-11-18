<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_default_parry extends Skill {
	function __construct() {
		$this->set("skillid","parry");
		$this->set("skillname","基础防御");
	}
}
?>
