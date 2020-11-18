<?php
require_once(MUD_LIB.'/inherit/environment.php');
Class UserSkill extends Environment {
        var $skills = array();
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
        function get_skill_list() {
                return $this->skills;
        }
}
?>
