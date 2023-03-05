<?php


namespace App\classes;


class Project
{
    public $project=[];
    public function __construct()
    {
        $this->project=[
            0=>[
                'id'=>1,
                'name'=>'Calculator',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, voluptatem.',
                'image'=>'clculator-logo.png'
            ],
            1=>[
                'id'=>2,
                'name'=>'Series',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, voluptatem.',
                'image'=>'series-3.png'
            ],
            2=>[
                'id'=>3,
                'name'=>'EvenOdd',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, voluptatem.',
                'image'=>'evenodd.png'
            ],
            3=>[
                'id'=>4,
                'name'=>'Fullname',
                'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, voluptatem.',
                'image'=>'name-2.png'
            ],
        ];
    }
    public function allProject(){
        return $this->project;
    }

}