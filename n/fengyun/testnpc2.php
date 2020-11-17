<?php
require_once(MUD_LIB.'/inherit/npc.php');
Class Npc_n_fengyun_testnpc2 extends Npc {
	function __construct() {
		$this->set("name","测试NPC 2 for id test");
		$this->set("id","testnpc");
		$this->set("long","没有用的长描述。");
	}
	function reset(){
                $GLOBALS['app']->CALLOUT_D->start_call_out($this,'msg_say',9);
        }
        function msg_say() {
                $this->env->tell_room($this->shortname()."正在使用call_out向房间喊话(call_out 9)。\n");
                $GLOBALS['app']->CALLOUT_D->start_call_out($this,'msg_say',9);
        }

}
?>
