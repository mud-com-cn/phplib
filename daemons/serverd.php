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
	function quit($user) {
		print_r("quit socket=".$user->socket."\n");
		$idx = array_search($user->socket,$this->sockets);
		if($idx>=0) {
			print_r("idx=".$idx."\n");
			print_r($this->sockets);
			array_splice($this->sockets,$idx,1);
			array_splice($this->users,$idx,1);
			socket_close($user->socket);
		}
		print_r($this->sockets);
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
							$this->users[] = $user;
                                                        $this->sockets[] = $client;
							$user->set_temp("is_loging",1);
							$user->set_temp("login_step","getid");
							$user->message(HIG.file_get_contents(MUD_LIB."/etc/welcome").NOR);
							$user->message(HIR."请输入您的ID：".NOR);
						}
					} else {
						$buf = socket_read($value,8192);
						$k = array_search($value,$this->sockets);
						if($k>=0) {
							if(strlen($buf)){
								$this->users[$k]->onCommand($buf);
							} else {
								$this->quit($this->users[$k]);
							}
						}
					}
				}
			}
		}
	}
}
?>
