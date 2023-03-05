<?php


namespace App\classes;


class Serise
{
    public $fnumber,$lnumber,$result,$i;
    public function __construct($post)
    {
        $this->fnumber=$post['fnumber'];
        $this->lnumber=$post['snumber'];

    }
    public function SeriseMaker(){
        if ($this->fnumber>$this->lnumber){
            for ($this->i=$this->fnumber;$this->i>=$this->lnumber;$this->i--){
                $this->result.=$this->i.' ';

            }
            return $this->result;
        }
        elseif ($this->fnumber<$this->lnumber){
            for ($this->i;$this->i<=$this->lnumber;$this->i++){
                $this->result.=$this->i.' ';

            }
            return $this->result;
        }
    }
}