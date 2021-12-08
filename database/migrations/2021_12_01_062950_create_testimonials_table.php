<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->timestamps();
        });

    }
    public static function boot()
    {
        parent::boot();
        static::creating(function($table)
        {
            $user = Auth::user();
            $table->created_by = $user->id;
            $table->updated_by = $user->id;
        });
        static::updating(function($table)
        {
            $user = Auth::user();
            $table->updated_by = $user->id;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
}
