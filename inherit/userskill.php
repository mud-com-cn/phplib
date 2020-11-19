<?php
require_once(MUD_LIB.'/inherit/environment.php');
Class UserSkill extends Environment {
        var $skills = array();
	var $skillenabled = array();
	function get_max($p) {
		switch($p) {
		case "jing":
			return 100;
		case "qi":
			return 100;
		case "shen":
			return 100;
		case "neili":
			return 50;
		case "fali":
			return 50;
		case "jingli":
			return 50;
		}
	}
        function set_skill($skillid,$level) {
                $skillOb = $GLOBALS['app']->SKILL_D->getSkill($skillid);
                if(!$skillOb) {
                        return 0;
                }
                if(array_key_exists($skillid,$this->skills)) {
                        $sk = $this->skills[$skillid];
                        $sk[0] = $level;
                        $this->skills[$skillid] = $sk;
                } else {
                         $this->skills[$skillid] = array($level,0);
                }
        }
	function get_skill_level($skillid){
		if(array_key_exists($skillid,$this->skills)) {
			return $this->skills[$skillid][0];
		} else {
			return null;
		}
	}
	function get_basic_level_enabled($basicid){
		$blv = 0;
		$alv = 0;
                if(array_key_exists($basicid,$this->skills)) {
			$blv = $this->skills[$basicid][0];
			if(array_key_exists($basicid,$this->skillenabled)) {
				$skid = $this->skillenabled[$basicid];
				if(array_key_exists($skid,$this->skills)) {
					$alv = $this->skills[$skid][0];
				}
			}
                }
		return floor($blv/2)+$alv;
        }

        function get_skill_list() {
                return $this->skills;
        }
	function get_skill_enabled($basic)
	{
		$basicOb = $GLOBALS['app']->SKILL_D->getSkill($basic);
		if(!$basicOb)
			return null;
		if(array_key_exists($basic,$this->skillenabled)) {
			$skillOb = $GLOBALS['app']->SKILL_D->getSkill($this->skillenabled[$basic]);
			return $skillOb;
		} else {
			return $basicOb;
		}
	}
	function enable_skill($basic,$skill) {
		$basicOb = $GLOBALS['app']->SKILL_D->getSkill($basic);
		$skillOb = $GLOBALS['app']->SKILL_D->getSkill($skill);
		if(!$basicOb) {
			return -1;
		}
		if(!$skillOb) {
			return -2;
		}
		if(!$basicOb->get("is-basic")) {
			return -3;
		}
		$enable = $skillOb->get("enable-skill");
		if(!$enable) {
			return -4;
		}
		if(!in_array($basic,$enable)) {
			return -5;
		}
		if(!$this->get_skill_level($basic)) {
			return -6;
		}
		if(!$this->get_skill_level($skill)) {
                        return -7;
                }
		$this->skillenabled[$basic] = $skill;
		return 1;
	}
	
}
?>
