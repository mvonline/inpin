<?php

namespace App;

class distance{
public static function calculateDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
    {
        $rad = M_PI / 180;
        $theta = $longitudeFrom - $longitudeTo;
        $dist = sin($latitudeFrom * $rad) 
            * sin($latitudeTo * $rad) +  cos($latitudeFrom * $rad)
            * cos($latitudeTo * $rad) * cos($theta * $rad);
        $m = new \stdClass();
        $m->latitudeFrom = $latitudeFrom;
        $m->longitudeFrom = $longitudeFrom;
        $m->latitudeTo = $latitudeTo;
        $m->longitudeTo = $longitudeTo;
        $m->distance = (acos($dist) / $rad * 60 *  1.853)*1000;

         return $m;
    }
}