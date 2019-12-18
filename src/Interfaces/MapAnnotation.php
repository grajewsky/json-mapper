<?php 
namespace JsonMapper\Interfaces;

use JsonMapper\Interfaces\FieldInterface;


/** 
 * @Annotation
 */
interface MapAnnotation extends FieldInterface 
{
    /** 
     * @param mixed $value
     * 
     * @return mixed
     */
    public function map($value);
}