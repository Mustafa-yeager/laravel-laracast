<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact2 extends Model
{
    /** @use HasFactory<\Database\Factories\Contact2Factory> */
    use HasFactory;
    protected $fillable = ['name'];

    public function jobs(){
        return $this->hasMany(job_list::class);
    }

}
