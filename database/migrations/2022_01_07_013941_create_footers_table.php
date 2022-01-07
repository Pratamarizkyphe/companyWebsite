<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('text');
            $table->string('about');
            $table->string('home');
            $table->string('gallery');
            $table->string('blog');
            $table->string('portfolio');
            $table->string('contact');
            $table->string('profile');
            $table->string('us');
            $table->string('tlp');
            $table->string('email');
            $table->string('address');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('footers');
    }
}
