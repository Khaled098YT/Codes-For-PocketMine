<?php

namespace SomeNamespace;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Command extends PluginBase{
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case 'hi':
			  $sender->sendMessage("Hello Player");
		}
	}
}
?>
