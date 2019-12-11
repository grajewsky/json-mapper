<?php 
namespace JsonMapper;

use ReflectionFunction;
use JsonMapper\Core\Container;
use JsonMapper\Interfaces\Config;
use JsonMapper\Interfaces\JsonMapper as JsonMapperInterface;

class JsonMapper implements JsonMapperInterface {

    /** 
     * @var Container
     */
    private $container = null;

    public function __construct() {
        $this->container = json_mapper_container();
        $this->container->set('config', $this->selectConfig());

    }
    public function map(string $json, $class)
    {
        
    }

    private function selectConfig(): Config {
        
        if (function_exists("json_mapper_config_user")) {
            $reflectionFunc  = new ReflectionFunction("json_mapper_config_user");
            if ($reflectionFunc->hasReturnType()->getName() === 'JsonMapper\Interfaces\JsonMapper') {
                return json_mapper_config_user();
            }
        }

        return json_mapper_config();
    }
}