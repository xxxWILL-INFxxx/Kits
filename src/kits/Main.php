<?php

namespace kits;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\item\Item;

class Main extends PluginBase{
    
    public function onEnable() {
      $this->getLogger()->Info("Kits Is Running!");
    }
  
    public function onDisable() {
      $this->getLogger()->Info("Kits Is Disabled!");
    }
  
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) :bool {
      if($sender instanceof Player) {
        switch($cmd->getName()) {
          case "starterkit":
          case "sk":
          $sender->addTitle("Getting Starter Kit!");
          $item = item::get(267,0,1);
          $item->setCustomName("Starter Sword");
          $inv = $sender->getInventory();
          $inv->addItem($item);
          $sender->sendMessage("Kit...");
          }
      }
     return true;
    }
}
