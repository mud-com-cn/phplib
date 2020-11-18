<?php
require_once(MUD_LIB."/temp/skillcontrol.php");
class Skilld extends SkillControl {
	function __construct() {
		
        }
	function getSkill($skillid) {
		if(array_key_exists($skillid,$this->skills))
			return $this->skills[$skillid];
		return null;
	}
}
?>

