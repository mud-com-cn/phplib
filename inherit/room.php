<?php
require_once(MUD_LIB.'/inherit/environment.php');
Class Room extends Environment {
	var $objects;
	function desc() {
                return HIY.$this->get("name")."\n".HIG.$this->get("long").NOR."\n";
        }
        function tell_room($msg) {
                forEach($this->inv as $k => $v) {
                        $v->message($msg);
                }
        }
        function tell_room_exclude($msg,$ob) {
                forEach($this->inv as $k => $v) {
                        if($v != $ob)
                                $v->message($msg);
                }
        }
	function reset() {
		$objs = $this->get("objects");
		if(is_array($objs)) {
			forEach($objs as $k => $v) {
				for($i = 0;$i<$v;$i++) {
					$npc = $GLOBALS['app']->OBJECT_D->new_object($k);
					$npc->move($this);
				}
			}
		}
	}
}

