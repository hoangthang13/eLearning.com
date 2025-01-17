<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product', function(Blueprint $table){
            $table->id();
            $table->string('title');
            $table->string('category');
            $table->integer('price');
            $table->timestamps();
        });
    }
};