<?php
class Combatd  {
	function __construct() {
        }
	function init() {

	}
	function do_attack($from,$to) {
		$fromskillOb = $from->get_skill_enabled("unarmed");
		$str = "";
		if($fromskillOb) {
			$ac = $fromskillOb->get("actions");
			$r = rand(0,count($ac)-1);
			$str .= $ac[$r]["action"];
		} else {
			$str .= "\$N攻击\$n，";
		}
		$toskillOb = $to->get_skill_enabled("parry");
		if($toskillOb) {
                        $ac = $toskillOb->get("parrys");
                        $r = rand(0,count($ac)-1);
                        $str .= $ac[$r]["parry"];
                } else {
                        $str .= "，被\$n轻松闪开。";
                }
		$str = str_replace("\$N",$from->shortname(),$str);
		$str = str_replace("\$n",$to->shortname(),$str);
		$from->env->tell_room($str."\n");
	}
}
?>

