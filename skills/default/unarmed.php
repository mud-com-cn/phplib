<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_default_unarmed extends Skill {
	function __construct() {
		$this->set("skillid","unarmed");
		$this->set("skillname","基础拳脚");
		$this->set("is-basic",1);
                $this->set("actions",array(
                        array("action"=>"\$N一拳打向\$n，"),
                        array("action"=>"\$N一脚踢向\$n，"),
));

	}
}
?>
