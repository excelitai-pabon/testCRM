<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //information method

    public function information()
    {
        $clientInfo = [
            [
                "customer_booking_date" => "2022-05-21",
                "customer_country" => "Bangladesh",
                "customer_name" => "Mr. Abul",
                "customer_id" => 5248678,
                "customer_address" => "111/C Moghbazar, Dhaka 1217",
                "customer_mobile_no" => "01756324158",
                "building_no" => "G+15",
                "file_no" => "52A1C4",
                "flat_size" => 1091,
                "status" => true
            ],
            [
                "customer_booking_date" => "2022-06-01",
                "customer_country" => "India",
                "customer_name" => "Jolil",
                "customer_id" => 5248660,
                "customer_address" => "111/C Dhanmondi, Dhaka 1205",
                "customer_mobile_no" => "01756325246",
                "building_no" => "B+05",
                "file_no" => "52A1K4",
                "flat_size" => 1091,
                "status" => true
            ],
            [
                "customer_booking_date" => "2022-07-25",
                "customer_country" => "Bangladesh",
                "customer_name" => "Samirun Shuvo",
                "customer_id" => 5248679,
                "customer_address" => "12/A Kolabagan, Dhaka 1205",
                "customer_mobile_no" => "01676667145",
                "building_no" => "A+12",
                "file_no" => "12A1D4",
                "flat_size" => 1700,
                "status" => false
            ]
        ];
        return response($clientInfo);
    }

    public function viewInformation()
    {
        
    }


    public function priceInformation()
    {
        $clientPriceInfo = [
            [
                "customer_country" => "Bangladesh",
                "customer_name" => "Auko Abul",
                "customer_id" => 5248678,
                "building_no" => "G+15",
                "file_no" => "52A1C4",
                "flat_size" => 1091,
                "flat_price" => 500000,
                "utility_charge" => 1000,
                "car_parking_price" => 40000,
                "additional_work_cost" => 10000,
                "total_amount" => 10000,
                "status" => 1
            ],
            [
                "customer_country" => "Africa",
                "customer_name" => "Bluetooth boy Saddam",
                "customer_id" => 52486358,
                "building_no" => "G+15",
                "file_no" => "52A1C4",
                "flat_size" => 710,
                "flat_price" => 550000,
                "utility_charge" => 11000,
                "car_parking_price" => 21000,
                "additional_work_cost" => 12000,
                "total_amount" => 12000,
                "status" => 1
            ],
            [
                "customer_country" => "Bangladesh",
                "customer_name" => "Healty Gunjon",
                "customer_id" => 523538,
                "building_no" => "R-d",
                "file_no" => "52D3GE",
                "flat_size" => 1091,
                "flat_price" => 340000,
                "utility_charge" => 3444,
                "car_parking_price" => 40000,
                "additional_work_cost" => 5000,
                "total_amount" => 5200000,
                "status" => 1
            ],
            [
                "customer_country" => "Bangladesh",
                "customer_name" => "Digital Radia",
                "customer_id" => 5248678,
                "building_no" => "G+15",
                "file_no" => "52A1C4",
                "flat_size" => 1091,
                "flat_price" => 500000,
                "utility_charge" => 1000,
                "car_parking_price" => 40000,
                "additional_work_cost" => 10000,
                "total_amount" => 10000,
                "status" => 1
            ],
            [
                "customer_country" => "Bangladesh",
                "customer_name" => "Shuvo",
                "customer_id" => 554448,
                "building_no" => "G+74",
                "file_no" => "2D33V4",
                "flat_size" => 1091,
                "flat_price" => 532000,
                "utility_charge" => 4000,
                "car_parking_price" => 32000,
                "additional_work_cost" => 12000,
                "total_amount" => 12000,
                "status" => 1
            ],
            [
                "customer_country" => "Ghana",
                "customer_name" => "Sujoy Babu",
                "customer_id" => 675645,
                "building_no" => "K+15",
                "file_no" => "524RV4",
                "flat_size" => 1091,
                "flat_price" => 300000,
                "utility_charge" => 2000,
                "car_parking_price" => 40000,
                "additional_work_cost" => 10000,
                "total_amount" => 10000,
                "status" => 1
            ],

        ];

        return response($clientPriceInfo);
    }


    public function viewPriceInformation()
    {
        $info = [
            'profile' => [
                'name' => "Kashem",
                'id' => 'CU571254',
                'media_name' => 'Saddam',
                'number' => '01478523644',
            ],
            'file' => [
                'file_no' => 'J45IH41',
                'other_no' => 'BE41K45'
            ],
            'building'=> [
                'name' => 'Ht Height',
                'building_no' => '45/C',
                'building_location' => 'Dhaka',
                'building_face_direction' => 'West',
                'total_no_of_floor' => '8',
                'road_no' => '5C-8'
            ],
            'flat' => [
                'no' => '4B',
                'size' => '1091',
                'floor_no' => '4',
                'face_direction' => 'East',
                'total_no_of_flat' => '4',
            ],
            'price' => [
                'total_price' => '5650000',
                'booking_money' => '412500',
                'downpayment_money' => '145200',
                'building_pilling_money' => '145200',
                'landpilling_money_1' => '108000',
                'landpilling_money_2' => '208000',
                '1st_roof_casting_amount' => '245000',
                '6th_roof_casting_amount' => '145000',
                'final_work_amount' => '65000',
                'car_parking_amount' => '32000',
                'aditional_work_amount' => '74110',
                'land_registry_amount' => '208000',
                'mutation_cost_amount' => '2500',
                'power_of_atoney_cost_amount' => '3200',
                'number_of_installment' => '34',
                'flat_registration_cost' => '14700',
                'eqal_installment' => '4230',
                'utility_charge' => '1400',
            ]
        ];

        return response($info);
    }
}
