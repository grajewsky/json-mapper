<?php 
namespace JsonMapper\Annotations;

use JsonMapper\Interfaces\ValidationAnnotation;

/** 
 * @Annotation
 */
final class RequiredAnnotation implements ValidationAnnotation
{

    private $errors = [];

    private $fieldname;

    private $value;
    
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
    public function setField(string $name, $value): void {
        $this->fieldName = $name;
        $this->value = $value;
    }
    public function getFieldName(): string;
    public function getFieldValue();
}