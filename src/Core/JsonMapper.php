<?php 
namespace JsonMapper\Core;

use JsonMapper\JsonMapper as JsonMapperInterface;
/**
 *  @template T
 */
class JsonMapper implements JsonMapperInterface 
{
    /** 
     * @param string $json
     * @param class-string<T> $class
     * 
     * @return T
     */
    public function map(string $json, $class) 
    {
        return new $class;
    }
}