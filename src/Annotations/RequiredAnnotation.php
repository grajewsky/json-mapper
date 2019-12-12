<?php 
namespace JsonMapper\Annotations;

use JsonMapper\Interfaces\ValidationAnnotation;

/** 
 * @Annotation
 */
final class RequiredAnnotation implements ValidationAnnotation
{

    private $errors = [];


    /** 
     * @param mixed $value
     * 
     * @return bool
     */
    public function validate($value): bool 
    {
        if (is_null($value) || empty($value)) {
            return false;
        }
        return true;
    }
    /** 
     * 
     * @return string[]
     */
    public function errors(): array 
    {
        return $this->errors;
    }
    /** 
     * 
     * @return bool
     */
    public function isValid(): bool 
    {
        return count($this->errors()) > 0;
    }
}