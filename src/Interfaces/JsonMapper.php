<?php
namespace JsonMapper\Interfaces;

interface JsonMapper 
{
    /** 
     * @template T
     * @param string $json
     * @param class-string<T> $class
     * 
     * Return $class type result
     * 
     * @return T
     */
    public function map(string $json, $class);
}