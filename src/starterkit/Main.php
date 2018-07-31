<?php
namespace starterkit;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\item\Item;
class Main extends PluginBase{
    public function onEnable() {
      $this->getLogger()->Info("StarterKit-PMMP Is Running!");
    }
  
    public function onDisable() {
      $this->getLogger()->Info("StarterKit-PMMP Is Disabled!");
    }
  
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) {
      if($sender instanceof Player) {
        switch($cmd->getName()) {
          case "starterkit":
          $sender->addTitle("Getting Starter Kit!")
          $item = item::get(267,0,1);
          $inv = $sender->getInventory();
          $item->setCustomName("Starter Sword");
          $inv->addItem($item);
      }else{
          $sender->sendMessage("A error acured. please go to https://github.com/joshuasing/StarterKit-PMMP for more info. Error Code: 1");
          return true;
      }
    }
  }
}
