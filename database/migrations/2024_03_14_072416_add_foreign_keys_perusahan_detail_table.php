<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('info_perusahaan', function (Blueprint $table) {
            $table->foreign('users_id', 'fk_perusahaan_detail_to_users')->references('id')
            ->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('info_perusahaan', function (Blueprint $table) {
            $table->dropForeign('fk_perusahaan_detail_to_users');
        });
    }
};
