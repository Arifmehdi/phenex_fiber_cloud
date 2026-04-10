<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('sections_setups', function (Blueprint $table) {
            $table->foreignId('page_id')->nullable()->constrained()->nullOnDelete();
            $table->boolean('active')->default(true)->after('side_note');
        });
    }

    public function down()
    {
        Schema::table('sections_setups', function (Blueprint $table) {
            $table->dropForeign(['page_id']);
            $table->dropColumn(['page_id', 'active']);
        });
    }
};