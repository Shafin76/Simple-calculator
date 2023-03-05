<?php


namespace App\classes;


class Evenodd
{
    public $fnumber,$snumber,$i,$even,$odd,$numberType;
    public function __construct($post)
    {
        $this->fnumber=$post['fnumber'];
        $this->snumber=$post['snumber'];
        $this->numberType=$post['numberType'];


    }
    public function EvenorOdd(){
        if($this->numberType==="Even"){
            for ($this->i=$this->fnumber;$this->i<=$this->snumber;$this->i++){
                if ($this->i%2===0){
                    $this->even.=$this->i.' ';
                }
            }
            return $this->even;
        }
        elseif($this->numberType==="Odd"){
            for ($this->i=$this->fnumber;$this->i<=$this->snumber;$this->i++){
                if ($this->i%2!==0){
                    $this->odd.=$this->i.' ';
                }
            }
            return $this->odd;

        }
        else{
            return "It's not a number";
        }

    }

}