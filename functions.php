<?php

use JsonMapper\Core\Container;
use JsonMapper\Interfaces\Config;
use JsonMapper\Interfaces\JsonMapper as JsonMapperInterface;
use JsonMapper\Interfaces\ValidationAnnotation;
use JsonMapper\JsonMapper;

if (!function_exists("json_mapper_config")) {
    function json_mapper_config(): Config 
    {
        return new Config();
    }
}

if (!function_exists("json_mapper_container")) {
    function json_mapper_container(): Container 
    {
        return Container::instance();
    }
}

if (!function_exists("json_mapper")) {
    function json_mapper(): JsonMapperInterface 
    {
        return new JsonMapper();
    }
}

if (!function_exists("json_mapper_validation_plugin")) {
    function json_mapper_validation_plugin(ValidationAnnotation $validationPlugin)
    {
        
    }
}