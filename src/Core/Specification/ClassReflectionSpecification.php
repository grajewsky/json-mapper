<?php 
namespace JsonMapper\Core\Specification;

use ArrayIterator;
use JsonMapper\Specification\ClassSpecification;
use JsonMapper\Specification\PropertySpecification;
/** 
 * @implements ClassSpecification
 */
final class ClassReflectionSpecification implements ClassSpecification 
{
    /** 
     * @var PropertySpecification[]
     */
    private $properties;

    /**
     * @return PropertySpecification[]
     */
    public function getPropertiesSpecification(): array
    {
        return $this->properties;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->properties);
    }
}