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
        schema::create(table: 'tasks', callback: function (Blueprint $table)
        $table->id();
        $table->string(column 'name');
        $table->timestamps();


    });
     /**
     * Run the migrations.
     */
    public function up(): void
    {
        schema::droplfExists(table: 'tasks');
    }

};