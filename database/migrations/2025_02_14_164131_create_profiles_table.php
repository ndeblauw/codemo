<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->string('location');
            $table->string('bio');
            $table->string('instagram_handle')->nullable();

            $table->timestamps();
        });
    }
};
