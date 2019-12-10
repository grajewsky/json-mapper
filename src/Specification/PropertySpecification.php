<?php 
namespace JsonMapper\Specification;


interface PropertySpecification
{
    /** 
     * @return string
     */
    public function getType(): string;
    
    /** 
     * @return mixed
     */
    public function getValue();
}