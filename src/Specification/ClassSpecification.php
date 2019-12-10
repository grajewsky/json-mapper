<?php 
namespace JsonMapper\Specification;

use IteratorAggregate;
use JsonMapper\Specification\PropertySpecification;

/** 
 * @extends IteratorAggregate<PropertySpecification>
 */
interface ClassSpecification extends IteratorAggregate
{ 
    /**
     * @return PropertySpecification[]
     */
    public function getPropertiesSpecification(): array;
}