<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('man_name');
            $table->string('woman_name');
            $table->string('man_nickname');
            $table->string('woman_nickname');
            $table->string('man_father');
            $table->string('woman_father');
            $table->text('man_about');
            $table->text('woman_about');
            $table->text('man_photo');
            $table->text('woman_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abouts');
    }
}
