<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_default_spear extends Skill {
	function __construct() {
		$this->set("skillid","spear");
		$this->set("skillname","基础枪术");
		$this->set("is-basic",1);

	}
}
?>
