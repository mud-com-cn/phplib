<?php
require_once(MUD_LIB.'/inherit/attack.php');
Class Npc extends Attack {
	function is_npc() {return 1;}
	function user_level() {return USER_LEVEL_NPC;}
        function __construct() {
		$GLOBALS['app']->CHAR_D->init_new_npc($this);
        }
        function onCommand($buf) {
                //socket_write($this->socket,$buf,strlen($buf));
                $GLOBALS['app']->COMMAND_D->doCommand($this,$buf);
        }
        function message($msg) {
        }
        function shortname() {
                return HIG.$this->get('name')."(".$this->get('id').")".NOR;
        }
        function quit() {
        }
        function heart_beat() {
                //$this->message($this->shortname()." HeartBteat (".HEART_BEAT." sec)\n");
		if($this->get("jing")<0 || $this->get("qi")<0 || $this->get("shen")<0) {
                        $this->die();
			return ;
                }

                if(count($this->enemies)) {
                        $enemy = $this->enemies[rand(0,count($this->enemies)-1)];
                        if($enemy->env == $this->env) {
                                $this->do_attack($enemy);
                        }
                }
        }
        function setup() {
                //$GLOBALS['app']->HEARTBEAT_D->start_heartbeat($this);
        }
}
?>
