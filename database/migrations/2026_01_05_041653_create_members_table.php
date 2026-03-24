<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('designation')->nullable(); // Engineer / Student
            $table->string('join_info')->nullable(); // Joined May'16
            $table->text('short_description')->nullable(); // card description
            $table->longText('about')->nullable(); // detail page bio
            $table->string('photo')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('website')->nullable();
            $table->string('map_embed')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('members');
    }
};
