<?php
namespace App\Modal;

Class Product{

    public function stock()
    {
        return   $stock = Array(
                                0 => Array(
                                                'name'  => 'Bolsa',
                                                'price' => 19.50,
                                                'cd'    => 'SAO PAULO',
                                                'qts'   =>  150
                                           ),

                                1 => Array(
                                                'name'  => 'Sapato',
                                                'price' => 329.99,
                                                'cd'    => 'SAO PAULO',
                                                'qts'   =>  150
                                       )

                               );
    }
}