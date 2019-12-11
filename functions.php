<?php

use JsonMapper\Config;
use JsonMapper\Core\Container;

if (!function_exists("json_mapper_config")) {
    function json_mapper_config(): Config {
        return new Config();
    }
}

if (!function_exists("json_mapper_container")) {
    function json_mapper_container(): Container {
        return new Container();
    }
}

if (!function_exists("json_mapper")) {
    function json_mapper(): Container {
        return new Container();
    }
}