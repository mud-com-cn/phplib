<?php
require_once(MUD_LIB.'/inherit/userskill.php');
Class User extends UserSkill {
	var $socket;
	function is_user() {return 1;}
        function __construct($socket) {
                $this->socket = $socket;
        }
        function onCommand($buf) {
                //socket_write($this->socket,$buf,strlen($buf));
                $GLOBALS['app']->COMMAND_D->doCommand($this,$buf);
        }
        function message($msg) {
                socket_write($this->socket,$msg,strlen($msg));
        }
        function shortname() {
                return HIY.$this->get('name')."(".$this->get('id').")".NOR;
        }
        function quit() {
                $this->save();
                $GLOBALS['app']->HEARTBEAT_D->stop_heartbeat($this);
                $GLOBALS['app']->SERVER_D->quit($this);
        }
        function heart_beat() {
                //$this->message($this->shortname()." HeartBteat (".HEART_BEAT." sec)\n");
        }
        function setup() {
                $GLOBALS['app']->HEARTBEAT_D->start_heartbeat($this);
        }
}
?>
