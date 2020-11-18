<?php
require_once(MUD_LIB.'/inherit/environment.php');
Class UserSkill extends Environment {
        var $skills = array();
	var $skillenabled = array();
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
	function query_skill_level($skillid){
		if(array_key_exists($skillid,$this->skills)) {
			return $this->skills[$skillid][0];
		} else {
			return null;
		}
	}
        function get_skill_list() {
                return $this->skills;
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
		if(!$this->query_skill_level($basic)) {
			return -6;
		}
		if(!$this->query_skill_level($skill)) {
                        return -7;
                }
		$this->skillenabled[$basic] = $skill;
		return 1;
	}
}
?>
