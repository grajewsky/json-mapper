<?php 
namespace JsonMapper\Interfaces;

/** 
 * @Annotation
 */
interface MapAnnotation {
    
    /** 
     * @param mixed $value
     * 
     * @return mixed
     */
    public function map($value);
}