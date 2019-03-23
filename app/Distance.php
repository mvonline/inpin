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

         return $m; // return in meter
    }
}


// select concat('[', GROUP_CONCAT( res SEPARATOR ',') ,']') from 
// ( select JSON_OBJECT('name',child.name,'parent',child.parent_agency_id,'id',child.id) as res from agency child 
// join agency parent on child.parent_agency_id = parent.id union ALL select 
// JSON_OBJECT('name',parent.name,'parent',parent.parent_agency_id,'id',parent.id) as res 
// from agency parent where parent.parent_agency_id is null ) as t1