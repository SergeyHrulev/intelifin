<?php

namespace App\Models;

class FotCalculator {
    
    protected $fotcalc = [
        
    ];


    public function replaceTriggers($data){
        $data = str_replace(",", ".", $data);
        return $data;
    }
    
    public function toFloat($data){
        $arr = [];
        if (!is_array($data)){
            $data = $this->replaceTriggers($data);
            return (float)$data;
        } else {
            foreach ($data as $value){
                array_push($arr, (float)$this->replaceTriggers($value));
            }
            return $arr;
        }
    }
    
    public function fotCalculator($fot){
        if(gettype($fot)!= 'double'){
            $fot = $this->toFloat($fot);
        } 
        $calc = [];
        $calc['tax'] = (float)($fot / 113 * 13);
        $calc['fot'] = (float)($fot - $calc['tax']);
        $calc['pension'] = (float)($fot * 22 / 100);
        $calc['oms'] = (float)($fot * 51 / 1000);
        $calc['ossvn'] = (float)($fot * 29 / 1000);
        $calc['ossnspz'] = (float)($fot * 2 / 1000);
        $calc['sum'] = 0;
        foreach ($calc as $value){
            $calc['sum'] += $value;
        }
        return $calc;
    }
}
