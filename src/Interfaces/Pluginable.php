<?php 


interface Pluginable 
{
    /** 
     * @param mixed $plugin
     */
    public function addPlugin($plugin): bool;

    /** 
     * @return array
     */
    public function plugins();
}