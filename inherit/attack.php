<?php
require_once(MUD_LIB.'/inherit/userskill.php');
Class Attack extends UserSkill {
	var $enemies = array();
	function die() {
		$this->remove_all_enemy();
		$this->env->tell_room($this->shortname().HIR."死了！！\n".NOR);
		$this->set("jing",1);
		$this->set("qi",1);
		$this->set("shen",1);
		$e = $this->get_temp("last_damage_from");
		if($e) {
			if($this->user_level <= USER_LEVEL_NPC)
				$e->add("NPS",1);
			else
				$e->add("PKS",1);
		}
	}
	function remove_all_enemy() {
		$e = $this->enemies;
		forEach($e as $k=>$v) {
			$this->remove_enemy($v);
		}
	}
	function receive_damage($dmg,$type,$ob) {
		if($type != "jing" && $type != "qi" && $type != "shen") {
			return 0;
		} else {
			$this->add($type,-$dmg);
			if($ob) {
				$this->add_enemy($ob);
				$this->set_temp("last_damage_from",$ob);
			}
			return 1;
		}
	}
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
			array_splice($this->enemies,$idx,1);
		}
		if($ob->user_level()>= USER_LEVEL_NPC)
			$ob->to_remove_enemy($this);
	}
	function to_remove_enemy($ob) {
                $idx = array_search($ob,$this->enemies);
                if($idx >= 0) {
                        array_splice($this->enemies,$idx,1);
                }
        }

}
?>
