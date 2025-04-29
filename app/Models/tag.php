<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    public function job_list()
    {
        return $this->belongsToMany(job_list::class, foreignPivotKey:"job_list_id");
    }
}
