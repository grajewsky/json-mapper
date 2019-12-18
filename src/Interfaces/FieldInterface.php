<?php 
namespace JsonMapper\Interfaces;


interface FieldInterface 
{
    public function setField(string $name, $value): void;
    public function getFieldName(): string;
    public function getFieldValue();
}