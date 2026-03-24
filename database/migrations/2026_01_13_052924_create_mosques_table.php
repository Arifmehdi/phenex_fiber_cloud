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
        Schema::create('mosques', function (Blueprint $table) {
            // Since your other tables use int UNSIGNED, use the same for consistency
            $table->increments('id'); // This creates int UNSIGNED AUTO_INCREMENT
            
            // Match the EXACT type of your referenced tables: int UNSIGNED
            $table->unsignedInteger('division_id');
            $table->unsignedInteger('district_id');
            $table->unsignedInteger('upazila_id');
            $table->unsignedInteger('union_id');
            $table->unsignedInteger('village_id');
            
            $table->string('name');
            $table->string('foundation_year')->nullable();
            $table->text('address');
            $table->string('imam_name')->nullable();;
            $table->string('secretary_name')->nullable();;
            $table->string('reg_number')->nullable();
            $table->string('phone');
            $table->string('image')->nullable();
            $table->text('description');
            $table->boolean('status')->default(true);
            $table->timestamps();
            
            // Add foreign key constraints - these will now match exactly
            $table->foreign('division_id')
                  ->references('id')
                  ->on('divisions')
                  ->onDelete('cascade');
                  
            $table->foreign('district_id')
                  ->references('id')
                  ->on('districts')
                  ->onDelete('cascade');
                  
            $table->foreign('upazila_id')
                  ->references('id')
                  ->on('upazilas')
                  ->onDelete('cascade');
            $table->foreign('union_id')
                  ->references('id')
                  ->on('unions')
                  ->onDelete('cascade');
            $table->foreign('village_id')
                  ->references('id')
                  ->on('villages')
                  ->onDelete('cascade');
            
            // Add indexes for better performance
            $table->index(['division_id', 'district_id', 'upazila_id']);
            $table->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mosques');
    }
};
