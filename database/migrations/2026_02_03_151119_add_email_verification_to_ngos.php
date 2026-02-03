<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('ngos', function (Blueprint $table) {
        $table->timestamp('email_verified_at')->nullable();
        $table->string('verification_token')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ngos', function (Blueprint $table) {
            //
        });
    }
};
