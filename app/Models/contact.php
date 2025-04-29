<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class contact extends Model
{
    public static function con():array{
        return [
            [
                'id'=>1,
                'name'=>'Mahmoud',
                'phone'=>'+201013037002'
            ],
            [
                'id'=>2,
                'name'=>'Mustafa',
                'phone'=>'+201110792037'
            ],
            [
                'id'=>3 ,
                'name'=>'Dalia',
                'phone'=>'+201019327502'
            ]
            ];
    }

    public static function find($id){
        $contacts = Arr::first(static::con() ,function($contacts) use ($id)
        {
            return $contacts['id'] == $id;
        });

        if(!$contacts)
        {
            abort(404);
        }
        return $contacts;

    }
}
