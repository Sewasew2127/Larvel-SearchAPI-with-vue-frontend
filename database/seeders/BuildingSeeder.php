<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Building;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen(base_path("database/data/data.csv"),"r");
        $firstLine = true;
        while(($data = fgetcsv($csvFile,2000,",")) !== FALSE)
        {
            if(!$firstLine){
                Building::create([
                    "name" => $data['0'],
                    "price" => $data['1'],
                    "bedrooms" => $data['2'],
                    "bathrooms" => $data['3'],
                    "storeys" => $data['4'],
                    "garages" => $data['5']
                ]);
            }
            $firstLine = false;
        }
       
        fclose($csvFile);
    }
}
