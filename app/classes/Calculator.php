<?php


namespace App\classes;


class Calculator
{
    public $fNumber,$sNumber,$result,$opt;
    public function __construct($post)
    {
        $this->fNumber=$post['fnumber'];
        $this->sNumber=$post['snumber'];
        $this->opt=$post['operator'];
    }
    public function calculation(){
        if ($this->opt=='+'){
            return $this->fNumber+$this->sNumber;
        }
        elseif ($this->opt=='-'){
            return $this->fNumber-$this->sNumber;
        }
        elseif ($this->opt=='*'){
            return $this->fNumber*$this->sNumber;
        }
        elseif ($this->opt=='/'){
            return number_format($this->fNumber/$this->sNumber, 2, '.', '');
        }
        elseif ($this->opt=='%'){
            return $this->fNumber%$this->sNumber;
        }

    }
}