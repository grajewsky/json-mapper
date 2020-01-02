<?php 
namespace JsonMapper\Core;


class Plugins {

    /** 
     * @var array
     */
    private $plugins;

    /** 
     * @param mixed $plugin
     * 
     * @return void
     */
    public function add($plugin): void {
        
    }

    public function toArray(): array 
    {
        return $this->plugins;
    }
}