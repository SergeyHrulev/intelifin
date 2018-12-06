<?php
namespace App\Models;

class RiscMapCalculator{
    
    public $results = [
        'passed' => 'Данный показатель не вызывает вопросов.',
        'warning'=> 'Обратите внимание на данный параметр. Возможны дополнительные вопросы со стороны банков и контролирующих органов',
        'failed' => 'Данный показатель находится в повышенной зоне риска.'
        ];

    public $data = [
            'min',
            'max'
        ];
    
     public $base = [
        'main_capital' => ['min' => 15000, 'max' => 20000],
        'cache' => ['min' => 15000, 'max' => 20000],
        'gd_count' => ['min' => 15000, 'max' => 20000],
        'employes' => ['min' => 15000, 'max' => 20000],
        'company_cont' => ['min' => 15000, 'max' => 20000],
        'fiscal_debt' => ['min' => 15000, 'max' => 20000],
        'closed_acc' => ['min' => 15000, 'max' => 20000],
        'employee_get' => ['min' => 15000, 'max' => 20000],
        'credit_cards' => ['min' => 1, 'max' => 1],
        'grc' => ['min' => 1, 'max' => 1],
        'legal_addr_fact' => ['min' => 1, 'max' => 1],
        'illegal_addr' => ['min' => 1, 'max' => 1],
        'fiscal_rate' => ['min' => 15000, 'max' => 20000]
    ];
    
//public function __construct() {
//    $this->results;
//    $this->data;
//}

    public function setRating($argument = null){
            if(is_null($argument)){
                return;
            } else {
                switch ($argument){
                    case $argument <= $this->data['min']:
                        return $argument = $this->results['failed'];
                        break;
                    case $argument > $this->data['min'] && $argument < $this->data['max']:
                        return $argument = $this->results['warning'];
                        break;
                    case $argument >= $this->data['max']:
                        return $argument = $this->results['passed'];
                        break;
                }
            }
        }
        
    public function setDoubleRating($argument = null){
        if($argument == null){
            return;
        } else{
            switch ($argument){
                case $argument == $this->data['min']:
                    return $argument = $this->results['failed'];
                    break;
                case $argument == $this->data['max']:
                    return $argument = $this->results['passed'];
                    break;
            }
        }
    }
    
//    public function testModel(){
//        
//        $data->data = $this->res;
//        $result = $data->setRating($this->calc);
//        dd($result);
//    }
         
   
   
}

