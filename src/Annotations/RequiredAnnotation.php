<?php 
namespace JsonMapper\Annotations;

use JsonMapper\Interfaces\ValidationAnnotation;

/** 
 * @Annotation
 */
final class RequiredAnnotation implements ValidationAnnotation
{

    private $errors = [];

    private $fieldName;

    private $value;

    /** 
     * @param mixed $value
     * 
     * @return bool
     */
    public function validate(): bool 
    {
        $value = $this->getFieldValue();
        $this->errors = [];
        if (is_null($value) || empty($value)) {
            $this->errors[] = sprintf("Field '%s' is empty, is required", $this->fieldName);
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
    public function getFieldName(): string {
        return $this->fieldName;
    }
    public function getFieldValue() {
        return $this->value;
    }
}