<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Agency;
use App\Distance;

class AgencyController extends Controller

{

  public function __construct()

   {

     //  $this->middleware('auth:api');
     

   }

   /**

    * Display a listing of the resource.

    *

    * @return \Illuminate\Http\Response

    */

    public function showAllAgencies()
    {  
      return response()->json(Agency::all());
    }

    public function showOneAgency($id)
    {
        return response()->json(Agency::find($id));
    }

    public function create(Request $request)
    {
        $Agency = Agency::create($request->all());
       
        return response()->json($Agency, 201);
    }

    public function update($id, Request $request)
    {
        $Agency = Agency::findOrFail($id);
        $Agency->update($request->all());

        return response()->json($Agency, 200);
    }

    public function delete($id)
    {
        Agency::findOrFail($id)->delete();
        
        return response('Deleted Successfully', 200);
    }

    public function finddistance(Request $request){
        
            $dist= Distance::calculateDistance($request->latitudeFrom, $request->longitudeFrom,
                                               $request->latitudeTo, $request->longitudeTo);
            return response()->json($dist, 200);
    }

}    

?>
