<?php 
namespace JsonMapper;

use JsonMapper\Specification\ClassSpecification;

interface ClassAudit 
{
    /** 
     * @return ClassSpecification
     */
    public function audit(string $className): ClassSpecification;
}