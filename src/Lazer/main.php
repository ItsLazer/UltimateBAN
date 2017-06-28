<?php
namespace Lazer;
use pocketmine\Server;
use pocketmine\plugin\PluginBase;
class main extends PluginBase {
    public function onLoad(){
        $this->getLogger()->info("UltimateBAN is loading.");
    }
    public function onEnable(){
        $this->getLogger()->info("UltimateBAN by Lazer is enabled.");
    }
    public function onDisable(){
        $this->getLogger()->info("UltimateBAN is disabled.");
    }
}
