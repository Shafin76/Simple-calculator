<?php


namespace App\classes;
class Data
{
public $data=[];
public function __construct()
{
    $this->data=[
        0=>[
            'id'=>1,
            'name'=>'Shafin Ahamed',
            'email'=>'shafin@gmail.com',
            'password'=>'123456',
            'image'=>'shafin-2.jpg',
            'address'=>'Lorem ipsum dolor sit amet, '
        ],
        1=>[
            'id'=>2,
            'name'=>'Pervej',
            'email'=>'pervej@gmail.com',
            'password'=>'11111',
            'image'=>'pervej.jpg',
            'address'=>'Lorem ipsum dolor sit amet, '
        ],
        2=>[
            'id'=>3,
            'name'=>'Hadi',
            'email'=>'hadi420@gmail.com',
            'password'=>'4343',
            'image'=>'hadi.jpg',
            'address'=>'Lorem ipsum dolor sit amet, '

        ],
        3=>[
            'id'=>4,
            'name'=>'hanzala',
            'email'=>'hanzalahadi@gmail.com',
            'password'=>'1111',
            'image'=>'shafin-2.jpg',
            'address'=>'Lorem ipsum dolor sit amet, '
        ],
    ];
}
public function userInfo(){
    return $this->data;
}


}