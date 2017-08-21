<?php

namespace Somenamespace;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

class Config extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		@mkdir($this->getDataFolder());
		$message = [
		
		   'msg' => 'Hi',
		];
		$cfg = new Config($this->getDataFolder() ."config.yml", Config::YAML, $message);
		$cfg->save();
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case 'testconfig':
			$msg = $this->getConfig()->get("msg");
			$sender->sendMessage($msg);
		}
	}
}
