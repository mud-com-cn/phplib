<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_default_literate extends Skill {
	function __construct() {
		$this->set("skillid","literate");
		$this->set("skillname","读书识字");
	}
}
?>
