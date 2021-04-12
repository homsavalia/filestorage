<?php
namespace App\Http\Controllers;
use App\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class CountryController extends Controller 
{
	public $successStatus = 200;
/**  Get countrie **/ 
    public function countries(){
       $results = DB::select( DB::raw("SELECT * FROM countries"));
       return response()->json(['status'=>true,'message'=>'countrie list','data' => $results], $this->successStatus); 
	}
	
    /** Get state by countrie id **/ 
    public function states($country_id){ 
       $results = DB::select( DB::raw("SELECT * FROM states WHERE country_id = :country_id ORDER BY name ASC"), array(
        'country_id' => $country_id,
        ));
       return response()->json(['status'=>true,'message'=>'State list','data' => $results], $this->successStatus); 
    } 
}