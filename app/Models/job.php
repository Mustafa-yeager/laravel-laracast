<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;


class job extends Model
{
    public static function jo(): array{
        return [
            [
            'id'=>1,
            'title'=>'programmer',
            'salary'=>'50,000'
        ],
        [
            'id'=>2,
           'title'=>'director',
            'salary'=>'60,000'
        ],
        [
            'id'=>3,
            'title'=>'teacher',
            'salary'=>'40,000'
        ]
        ];

    }

    public static function find($id){
        return  Arr::first(static::jo() , function($jobs) use ($id){
            return $jobs['id'] == $id;});
    }
}
