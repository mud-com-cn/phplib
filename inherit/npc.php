<?php
require_once(MUD_LIB.'/inherit/environment.php');
Class Npc extends Environment {
	function is_npc() {return 1;}
        function __construct() {
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
                $this->message($this->shortname()." HeartBteat (".HEART_BEAT." sec)\n");
        }
        function setup() {
                //$GLOBALS['app']->HEARTBEAT_D->start_heartbeat($this);
        }
}
?>
