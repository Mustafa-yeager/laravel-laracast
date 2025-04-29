<?php

use App\Models\job_list;
use App\Models\job_listing;
use App\Models\tag;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
        Schema::create('job_list_tag', function (Blueprint $table) {
            $table->id();
               $table->foreignIdFor(job_list::class,'job_list_id')->constrained('job_list')->cascadeOnDelete();
               $table->foreignIdFor(Tag::class)->constrained('tags')->cascadeOnDelete();
               $table->timestamps();
            });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
