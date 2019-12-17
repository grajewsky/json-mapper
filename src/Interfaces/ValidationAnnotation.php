<?php 
namespace JsonMapper\Interfaces;

use JsonMapper\Interfaces\FieldInterface;

/** 
 * @Annotation
 */
interface ValidationAnnotation extends FieldInterface {
    
    /** 
     * @param mixed $value
     * 
     * @return bool
     */
    public function validate(): bool;
    /** 
     * 
     * @return string[]
     */
    public function errors(): array;
}