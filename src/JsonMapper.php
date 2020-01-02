<?php 
namespace JsonMapper;

use JsonMapper\Core\Container;
use JsonMapper\Core\Plugins;
use JsonMapper\Interfaces\JsonMapper as JsonMapperInterface;
use Pluginable;

class JsonMapper implements JsonMapperInterface, Pluginable
{

    /** 
     * @var Container
     */
    private $container = null;

    public function __construct() 
    {
        $this->container = json_mapper_container();
        $this->container->set('plugins', new Plugins());
    }
    public function map(string $json, $class)
    {

    }

    /** 
     * @param mixed $plugin
     */
    public function addPlugin($plugin): bool 
    {
        return false;
    }

    /** 
     * @return array
     */
    public function plugins()
    {
        return [];
    }
}