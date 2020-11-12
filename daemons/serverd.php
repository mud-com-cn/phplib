<?php
class Serverd {
	var $socket;
	var $users;
	var $sockets;
	function __construct() {
	}
	function init() {
		set_time_limit(0);
		$this->socket = socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
		$ret = socket_bind($this->socket,0,MUD_PORT);
		$ret = socket_listen($this->socket,100);
		$this->users = array();
	}

	function back_end() {
		while(1) {
			$rs = $this->sockets;
			$rs[] = $this->socket;
			$ws = array();
			$e = null;
			socket_select($rs, $ws, $e, 100);
			if(count($rs)) {
				foreach($rs as $key => $value) {
					if($value == $this->socket) {
						$client = socket_accept($this->socket);
						if($client ) {
							require_once(MUD_LIB.'/obj/user.php');
							$user = new User($client);
							$user->message(HIG.file_get_contents(MUD_LIB.'/etc/welcome').NOR);
							$user->set('name',"很不温柔");
							$user->set("id","akuma");
							$this->users[] = $user;
							$this->sockets[] = $client;
							require_once(MUD_LIB.'/d/center.php');
							$startroom = new Room();
							$user->move($startroom);
						}
					} else {
						$buf = socket_read($value,8192);
						$k = array_search($value,$this->sockets);
						if($k>=0) {
							print_r("onCommand ".$buf."\n");
							$this->users[$k]->onCommand($buf);
						}
					}
				}
			}
		}
	}
}
?>
