<?php 
namespace JsonMapper\Core\Specification;

use JsonMapper\Specification\PropertySpecification as IPropertySpecification;

final class PropertySpecification implements IPropertySpecification 
{
    /** 
     * @var string
     */
    private $type;

    /** 
     * @var mixed
     */
    private $value;
    
    /** 
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    
    /** 
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
}