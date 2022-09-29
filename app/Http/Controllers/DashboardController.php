<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $numberOfCustomer = 20;
        $numberOfActiveCustomer = 14;
        $numberOfLandCustomer = 13;
        $numberOfFlatCustomer = 7;
        $numberOfLocalCustomer = 15;
        $numberOfAbroadCustomer = 5;
        $numberOfCustomer1091ft = 8;
        $numberOfCustomer701ft = 3;
        $numberOfBuilding = 9;
        $numberOfBuildingUnderConstruction = 4;

        return response([
        
            'numberOfCustomer' => $numberOfCustomer,
            'numberOfActiveCustomer' => $numberOfActiveCustomer,
            'numberOfLandCustomer' => $numberOfLandCustomer,
            'numberOfFlatCustomer' => $numberOfFlatCustomer,
            'numberOfLocalCustomer' => $numberOfLocalCustomer,
            'numberOfAbroadCustomer' => $numberOfAbroadCustomer,
            'numberOfCustomer1091ft' => $numberOfCustomer1091ft,
            'numberOfCustomer701ft' => $numberOfCustomer701ft,
            'numberOfBuilding' => $numberOfBuilding,
            'numberOfBuildingUnderConstruction' => $numberOfBuildingUnderConstruction
            
        ]);
    }
}
