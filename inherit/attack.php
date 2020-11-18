<?php
require_once(MUD_LIB.'/inherit/userskill.php');
Class Attack extends UserSkill {
	var $enemies = array();
	function do_attack($ob) {
		//$this->env->tell_room($this->shortname()."向".$ob->shortname()."进行了一次攻击。\n");
		$GLOBALS['app']->COMBAT_D->do_attack($this,$ob);
	}
	function add_enemy($ob) {
		if($ob->user_level()>= USER_LEVEL_NPC) {
			if($ob != $this) {
				if(!in_array($ob,$this->enemies)) {
					$this->enemies[] = $ob;
					if($this->user_level()== USER_LEVEL_NPC) {
						$GLOBALS['app']->HEARTBEAT_D->start_heartbeat($this);
					}
					$ob->to_add_enemy($this);
				}
			}
		}
	}
	function to_add_enemy($ob) {
		if($ob->user_level()>= USER_LEVEL_NPC) {
                        if($ob != $this) {
                                if(!in_array($ob,$this->enemies)) {
                                        $this->enemies[] = $ob;
					if($this->user_level()== USER_LEVEL_NPC) {
                                                $GLOBALS['app']->HEARTBEAT_D->start_heartbeat($this);
                                        }

                                }
                        }
                }
	}
	function remove_enemy($ob) {
		$idx = array_search($ob,$this->enemies);
		if($idx >= 0) {
			unset($this->enemies[$idx]);
		}
		if($ob->user_level()>= USER_LEVEL_NPC)
			$ob->to_remove_enemy($this);
	}
	function to_remove_enemy($ob) {
                $idx = array_search($ob,$this->enemies);
                if($idx >= 0) {
                        unset($this->enemies[$idx]);
                }
        }

}
?>
