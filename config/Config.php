<?php

namespace Somenamespace;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config; // this is the use of thr config

class Config extends PluginBase implements Listener{ // Here you must type implements Listener else it will not work
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this); // this is for registering Events
		@mkdir($this->getDataFolder()); // This is for creating a folder with plugin name
		$message = [
		
		   'msg' => 'Hi', // if we type this then in the config.yml it will be (msg: hi) and you can change it
		];
		$cfg = new Config($this->getDataFolder() ."config.yml", Config::YAML, $message); // this is the code that creates config.yml
		$cfg->save(); // this one saves that config
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
		switch($cmd->getName()){
			case 'testconfig':
			$msg = $this->getConfig()->get("msg");
			$sender->sendMessage($msg);
		}
	}
}
