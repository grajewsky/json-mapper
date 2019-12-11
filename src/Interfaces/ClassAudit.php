<?php 
namespace JsonMapper\Interfaces;

use JsonMapper\Specification\ClassSpecification;

interface ClassAudit 
{
    /** 
     * @return ClassSpecification
     */
    public function audit(string $className): ClassSpecification;
}