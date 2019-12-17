<?php 
namespace JsonMapper\Annotations;

use JsonMapper\Interfaces\ValidationAnnotation;

/** 
 * @Annotation
 */
final class RequiredAnnotation implements ValidationAnnotation
{

    private $errors = [];

    public function __construct() {
        
    }
    /** 
     * @param mixed $value
     * 
     * @return bool
     */
    public function validate($value): bool 
    {
        $this->errors = [];
        if (is_null($value) || empty($value)) {
            $this->errors[] = "Field is empty, is required";
            return false;
        }
        return true;
    }
    /** 
     * 
     * @r
     * eturn string[]
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