<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Listing;

class ListingController extends Controller

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

    public function showAllListings()
    {  
      return response()->json(Listing::all());
    }

    public function showOneListing($id)
    {
        return response()->json(Listing::find($id));
    }

    public function create(Request $request)
    {
        $Listing = Listing::create($request->all());
       
        return response()->json($Listing, 201);
    }

    public function update($id, Request $request)
    {
        $Listing = Listing::findOrFail($id);
        $Listing->update($request->all());

        return response()->json($Listing, 200);
    }

    public function delete($id)
    {
        Listing::findOrFail($id)->delete();
        
        return response('Deleted Successfully', 200);
    }


}    

?>
