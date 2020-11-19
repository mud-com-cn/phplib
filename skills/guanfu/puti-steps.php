<?php
require_once(MUD_LIB."/inherit/skill.php");
class Skill_guanfu_puti_steps extends Skill {
	function __construct() {
		$this->set("skillid","changquan");
		$this->set("skillname","长拳");
		$this->set("enable-skill",array("dodge"));
		$this->set("dodges",array(
			array("dodge"=>"\$n一招「菩提本无树」轻轻巧巧地避了开去。"),
			array("dodge"=>"只见\$n身影一晃，一式「灵镜亦非台」早已避在七尺之外。"),
			array("dodge"=>"\$n使出「本来无一物」，轻轻松松地闪过。"),
			array("dodge"=>"\$n左足一点，一招「何处惹尘埃」腾空而起，避了开去。"),
			array("dodge"=>"可是\$n使一招「身化曹溪水」，身子轻轻飘了开去。"),
			array("dodge"=>"\$n身影微动，已经藉一招「滔滔遍九垓」轻轻闪过。"),
			array("dodge"=>"但是\$n一招「行时步步有」使出，早已绕到\$N身後！"),
			array("dodge"=>"但是\$n身形飘忽，轻轻一纵，一招「说来句句空」，避开这一击。"),
			array("dodge"=>"\$n身形往上一拔，一招「辗转费疑猜」，一个转折落在数尺之外。"), 
));


	}
}
?>
