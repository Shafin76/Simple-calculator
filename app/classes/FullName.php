<?php


namespace App\classes;


class FullName
{
    public $fname,$lname;
        public function __construct($post)
        {
            $this->fname=$post['fname'];
            $this->lname=$post['lname'];
        }
        public function makeFullName(){
            return $this->fname.' '.$this->lname;
        }
}