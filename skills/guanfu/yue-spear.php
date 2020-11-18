<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_guanfu_yue_spear extends Skill {
	function __construct() {
		$this->set("skillid","yue-spear");
		$this->set("skillname","岳家枪");
		$this->set("enable-skill",array("spear","parry"));
	}
}
?>
