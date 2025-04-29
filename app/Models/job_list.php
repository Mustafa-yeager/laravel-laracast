<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Support\Arr;


//use HasFactory;

class job_list extends Model
{

    use HasFactory;
    protected $table='job_list';

    protected $fillable=['contact2_id','title','salary'];

    public function contact2()
    {
        return $this->belongsTo(contact2::class);
    }

    public function tags()
    {
        return $this->belongsToMany(tag::class);
    }

    public static function find($id)
    {
        $list = Arr::first(job_list::all() , function($lis) use($id){
            return $lis['id'] == $id;
        });
        if(!$list)
        {
            abort(404);
        }
        return $list;
    }
}
