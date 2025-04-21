<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('instas', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('password');

            $table->timestamps();
        });
    }
};
