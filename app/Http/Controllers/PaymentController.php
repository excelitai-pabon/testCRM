<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //list



    // details

    public function details()
    {
        $detalis = [
            'customer' => [
                'name' => "Saddam Cool",
                'id' => 'CU2580014',
            ],
            'payment' => [
                'total_payment' => [
                    'total' => '1800000',
                    'due' => '12000000',
                ],
                'as_of_today_payment' => [
                    'total' => '30000',
                    'due' => '74000',
                ],
                'number_of_installment' => [
                    'total' => '45000',
                    'due' => '16000',
                ],
                'installment_amount' => [
                    'total' => '35000',
                    'due' => '14000',
                ],
                'booking_money' => [
                    'total' => '25000',
                    'due' => '12000',
                ],
                'down_payment' => [
                    'total' => '62000',
                    'due' => '38400',
                ],
                'land_pilling_money_1' => [
                    'total' => '45000',
                    'due' => '37200',
                ],
                'land_pilling_money_2' => [
                    'total' => '48000',
                    'due' => '31200',
                ],
                'price_upgradation' => [
                    'total' => '68000',
                    'due' => '55700',
                ],
                '1st_roof_casting' => [
                    'total' => '32000',
                    'due' => '17000',
                ],
                '6th_roof_casting' => [
                    'total' => '35000',
                    'due' => '18000',
                ],
                'utility_charge' => [
                    'total' => '15000',
                    'due' => '17000',
                ],
                'building_pilling_amount' => [
                    'total' => '44000',
                    'due' => '37000',
                ],
                'final_work_amount' => [
                    'total' => '130000',
                    'due' => '800000',
                ],
                'other_charge' => [
                    'total' => '19000',
                    'due' => '11000',
                ],
                'car_parking' => [
                    'total' => '45000',
                    'due' => '20000',
                ],
            ],
        ];

        return response($detalis);

    }
}
