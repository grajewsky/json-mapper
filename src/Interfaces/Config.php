<?php 
namespace JsonMapper\Interfaces;


interface Config 
{
    /** 
     * JsonMapper Class instance of \JsonMapper\JsonMapper
     * 
     * @return string
     */
    public function getJsonMapperClass(): string;
}