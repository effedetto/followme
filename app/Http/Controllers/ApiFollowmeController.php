<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class ApiFollowmeController extends Controller
{
    public function saveCoords(Request $request){


		// === LOGICA DB
		// --- Con Auth__() recuper ID utente attualmente loggato
		// https://laravel.com/docs/5.5/authentication#retrieving-the-authenticated-user
		// --- istranzio model
		// --- faccio la mia insert di lat e lng 
		// ---- restituisco risultato



    	// $distance=scopeCloseTo(lat,lng); 
    	

		return response()->json([
			       'status'    => 'success',
			       'request'  =>$request,
			       'msg'       => [
			       		'lat' => $request->json('lat'),
			       		'lng' => $request->json('lng')
			       ]
			      ], 200);
	}

	private function scopeCloseTo(Builder $query, $lat1, $lng1,$lat2,$lng2)
	{
		$max_range=50; 
	    return $query->whereRaw("
	       ST_Distance_Sphere(
	            point($lat1, &lng1),
	            point($lat2, $lng2)
	        )/1000 < max_range
	    ", [
	        $lat1,
	        $lng1,
	        $lat2,
	        $lng2,
	    ]);
	}


}
