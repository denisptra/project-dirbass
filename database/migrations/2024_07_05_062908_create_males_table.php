<?php

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
        Schema::create('males', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->unique();
            $table->string('number_tlp', 15);
            $table->string('city');
            $table->text('motivation');
            $table->string('image');
            $table->timestamps();

        });

    }

    
    /**
     * Reverse the migrations.
     */     
};
