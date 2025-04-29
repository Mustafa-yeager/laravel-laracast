<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_listing extends Model
{
    /** @use HasFactory<\Database\Factories\JobListingFactory> */
    use HasFactory;
    protected $table="job_listing";
    protected $fillable=['title','salary'];

    public function tags()
    {
        return $this->belongsToMany(tag::class);
    }
}
