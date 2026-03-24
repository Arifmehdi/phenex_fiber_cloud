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
        Schema::create('unions', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('division_id')->nullable();
            $table->unsignedInteger('district_id')->nullable();
            $table->unsignedInteger('upazila_id')->nullable();


            $table->string('name', 30)->nullable();
            $table->string('bn_name', 50)->nullable();

            $table->double('lat')->nullable();
            $table->double('lng')->nullable();

            $table->unsignedBigInteger('addedby_id')->default(1);
            $table->unsignedBigInteger('editedby_id')->nullable();

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();

                
            // ===========================
            // Foreign Key Constraints
            // ===========================

            $table->foreign('division_id')
                ->references('id')->on('divisions')
                ->nullOnDelete();

            $table->foreign('district_id')
                ->references('id')->on('districts')
                ->nullOnDelete();

            $table->foreign('upazila_id')
                ->references('id')->on('upazilas')
                ->nullOnDelete();

            $table->foreign('addedby_id')
                ->references('id')->on('users')
                ->cascadeOnDelete();

            $table->foreign('editedby_id')
                ->references('id')->on('users')
                ->nullOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('villages');
    }
};
