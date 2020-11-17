<?php
require_once(MUD_LIB."/inherit/save.php");
class Emoted extends Save {
	function __construct() {
        }
	function init() {
		$this->restore();
	}
	function query_save_file() {
		return MUD_LIB."/data/daemons/emoted.o";
	}
	function doEmote($user,$emote,$target) {
		$m = $this->get($emote);
		if(!$m)
			return 0;
		$ob = $user->env->find_in_inv($target);
		if($ob) {
			if($ob == $user)
				$msg = $m['others_self'];
			else
				$msg = $m['others_target'];
		} else {
			$msg = $m['others'];
		}
		$msg = str_replace("\$N",$user->shortname().HIC,$msg);
		$msg = str_replace("\$P",$user->shortname().HIC,$msg);
		if($ob) {
			$msg = str_replace("\$n",$ob->shortname().HIC,$msg);
                	$msg = str_replace("\$p",$ob->shortname().HIC,$msg);
		}
		$user->env->tell_room(HIC.$msg.NOR."\n");
		return 1;
	}
}
?>

