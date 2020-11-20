<?php
require_once(MUD_LIB."/inherit/environment.php");
class Corpse_object extends Environment {
	function init($name) {
		$this->set("id","corpse");
		$this->set("name",$name."的尸体");
		$GLOBALS['app']->CALLOUT_D->start_call_out($this,"unnamed",10);
	}
	function unnamed()
	{
		$this->env->tell_room($this->get("name")."腐烂了。\n");
		$this->set("name","腐烂的尸体");
		$GLOBALS['app']->CALLOUT_D->start_call_out($this,"skeletoned",10);
	}
	function skeletoned()
	{
		$this->env->tell_room("一阵风吹过，".$this->get("name")."化为骸骨。\n");
		$this->set("name","干枯的骸骨");
		$this->set("id","skeleton");
		$GLOBALS['app']->CALLOUT_D->start_call_out($this,"dispear",5);
	}
	function dispear()
	{
		$this->env->tell_room("一阵风吹过，".$this->get("name")."化为飞灰消散不见。\n");
		$this->leave();
		unset($this);
	}
}
?>
