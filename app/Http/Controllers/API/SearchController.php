<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Building;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
   public function search($keyword){

   
  
        if (preg_match('~[0-9]+~', $keyword)) {
            $number = (int) filter_var($keyword, FILTER_SANITIZE_NUMBER_INT);
            if(Str::contains($keyword, ['bathrooms','bathroom'])){
                $result = Building::where('bathrooms','like',$number)-> get();
            }
            if(Str::contains($keyword, ['bedrooms','bedroom'])){
                $result = Building::where('bedrooms','like',$number)-> get();
            }
            if(Str::contains($keyword, ['garages','garage'])){
                $result = Building::where('garages','like',$number)-> get();
            }
            
        }
        else {
           $result = Building::where('name','like','%'.$keyword.'%')-> get();

       }

       if(count($result)){
        return response() -> json($result);
        }
        else
            {
                return response()->json(['Result' => 'No data found by the given name'],404);
            }
}



    


        
}
