<?php
namespace App\Modal;

Class Product{

    public function stock()
    {
        return   $stock = Array(
                                01 => Array(
                                                'name'  => 'Bolsa',
                                                'price' => 19.50,
                                                'cd'    => 'SAO PAULO',
                                                'qts'   =>  150
                                           )

                               );
    }
}