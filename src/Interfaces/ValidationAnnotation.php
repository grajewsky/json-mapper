<?php 
namespace JsonMapper\Interfaces;

/** 
 * @Annotation
 */
interface ValidationAnnotation {
    
    /** 
     * @param mixed $value
     * 
     * @return bool
     */
    public function validate($value): bool;
    /** 
     * 
     * @return string[]
     */
    public function errors(): array;
    /** 
     * 
     * @return bool
     */
    public function isValid(): bool;
}