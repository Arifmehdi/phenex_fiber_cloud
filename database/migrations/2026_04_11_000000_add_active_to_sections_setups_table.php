<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('sections_setups', function (Blueprint $table) {
            $table->tinyInteger('active')->default(1)->after('side_note');
        });
    }

    public function down()
    {
        Schema::table('sections_setups', function (Blueprint $table) {
            $table->dropColumn('active');
        });
    }
};