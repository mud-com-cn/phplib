<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_default_dodge extends Skill {
	function __construct() {
		$this->set("skillid","dodge");
		$this->set("skillname","提纵术");
	}
}
?>
