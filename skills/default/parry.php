<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_default_parry extends Skill {
	function __construct() {
		$this->set("skillid","parry");
		$this->set("skillname","基础防御");
		$this->set("is-basic",1);
		$this->set("parrys",array(
                        array("parry"=>"但被\$n轻松躲过。"),
                        array("parry"=>"\$n稍稍撤步，跳了开去。"),
));

	}
}
?>
