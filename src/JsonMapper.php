<?php
namespace GLibsky;

interface JsonMapper {
    /** 
     * @param string $json Encoded Json object
     * @param string $class Output class result type
     * 
     * @return $$class
     */
    public function map(string $json, string $class);
}