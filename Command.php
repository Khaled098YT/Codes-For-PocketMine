<?php

namespace SomeNamespace;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command; // command use
use pocketmine\command\CommandSender; // Sender is the player

class Command extends PluginBase{
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case 'hi': // set command as hi
			  $sender->sendMessage("Hello Player"); // send message Hello Player, Soon i will make more things than that
		}
	}
}
?>
