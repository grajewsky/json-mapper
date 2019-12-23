<?php 
namespace JsonMapper\Interfaces;


interface Config 
{
    /** 
     * JsonMapper
     * 
     * @return \JsonMapper\Interfaces\JsonMapper
     */
    public function getJsonMapperAdapterClass(): \JsonMapper\Interfaces\JsonMapper;
}