<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('sections_setups', function (Blueprint $table) {
            $table->string('section_type')->default('default')->after('content_id');
            $table->string('image')->nullable()->after('section_type');
        });
    }

    public function down()
    {
        Schema::table('sections_setups', function (Blueprint $table) {
            $table->dropColumn(['section_type', 'image']);
        });
    }
};