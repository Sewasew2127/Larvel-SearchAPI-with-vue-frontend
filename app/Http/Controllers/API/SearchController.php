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

    public function search(Request $request){

        $result = [];


        if (preg_match('~[0-9]+~', $request->keyword)) {
            
            $number = (int) filter_var ($request->keyword, FILTER_SANITIZE_NUMBER_INT);
            if(Str::contains($request->keyword, ['price','price range']))
            {
                $result = Building::where('price','like',$number)-> get();
            }

            if(Str::contains($request->keyword, ['bathrooms','bathroom']))
            {
                $result = Building::where('bathrooms','like',$number)-> get();
            }
            if(Str::contains($request->keyword, ['bedrooms','bedroom']))
            {
                $result = Building::where('bedrooms','like',$number)-> get();
            }
            if(Str::contains($request->keyword, ['garages','garage']))
            {
                $result = Building::where('garages','like',$number)-> get();
            }
            
        }
        
        else 
        {
         
         $result = Building::where('name','like','%'.$request->keyword.'%')-> get();

        }

      if(count($result) >= 1)
       {
        return response() -> json($result);
       }
      else
       { 
        $result = "No House found by the given keyword";
        return response()->json($result);
       }
}







}
