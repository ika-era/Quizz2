<?php

namespace App\Http\Controllers;

use App\Airline;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlightController extends Controller
{
    public function index()
    {
    	return view('flight.index');
    }

    public function listFlight() {
        return view('flight.list');
    }

   	public function detail()
   	{
   		return view('flight.detail');
   	}

    public function run()
    {
        $airline = Airline::select('id')->get();
        \App\Flight::truncate();
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $random = random_int(0 , 49);
            \App\Flight::create([
                'code' => $faker->postcode . $faker->countryCode,
                'gafrenis_dro' => $faker->date(),
                'dashvebis_dro' => $faker->date(),
                'gafrena_dasaxeleba' => $faker->name(),
                'dashveba_dasaxeleba' => $faker->name(),

            ]);
        }
    }
}