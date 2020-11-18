<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_guanfu_changquan extends Skill {
	function __construct() {
		$this->set("skillid","changquan");
		$this->set("skillname","长拳");
		$this->set("enable-skill",array("unarmed","parry"));
		$this->set("actions",array(
                        array("action"=>"\$N使一招「黑虎掏心」，对准\$n「呼」地一拳，"),
                        array("action"=>"\$N扬起拳头，一招「泰山压顶」便往\$n招呼过去，"),
                        array("action"=>"\$N左手虚晃，右拳「中宫直进」便往\$n击出，"),
));
		$this->set("parrys",array(
                        array("parry"=>"\$n以一招「鱼跃龙门」相抗，轻松化解。"),
                        array("parry"=>"\$n垫步拧腰，千钧一发之际闪开攻势。"),
));


	}
}
?>
