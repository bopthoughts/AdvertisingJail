<?php

namespace da123rrell\AdvertisingJail;

use DevTools\commands\ExtractPluginCommand;
use FolderPluginLoader\FolderPluginLoader;
use pocketmine\command\Command;
use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\network\protocol\Info;
use pocketmine\permission\Permission;
use pocketmine\Player;
use pocketmine\plugin\Plugin;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\PluginLoadOrder;
use pocketmine\Server;
use pocketmine\utils\TextFormat;

class AdvertisingJail extends PluginBase{

    public function onEnable(){
        $this->getLogger()->info("AdvertisingJail Starterd");
        $this->listener = new EventListener($this);
        $this->getServer()->getPluginManager()->registerEvents($this->listener, $this);
    }

    public function onDisable(){
        $this->getLogger()->info("AdvertisingJail Stopped");
    }
}