<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_default_dodge extends Skill {
	function __construct() {
		$this->set("skillid","dodge");
		$this->set("skillname","提纵术");
		$this->set("is-basic",1);
		$this->set("dodges",array(
                        array("dodge"=>"却被\$n轻松闪过。"),
                        array("dodge"=>"\$n脚下连闪，轻松避开。"),
));
	}
}
?>
