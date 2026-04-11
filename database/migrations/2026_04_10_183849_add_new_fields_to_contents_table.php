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
        Schema::table('contents', function (Blueprint $table) {
            $table->string('accent_color', 20)->nullable()->after('side_note');
            $table->string('icon', 50)->nullable()->after('accent_color');
            $table->string('button_text', 100)->nullable()->after('icon');
            $table->string('button_link', 255)->nullable()->after('button_text');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contents', function (Blueprint $table) {
            $table->dropColumn(['accent_color', 'icon', 'button_text', 'button_link']);
        });
    }
};
