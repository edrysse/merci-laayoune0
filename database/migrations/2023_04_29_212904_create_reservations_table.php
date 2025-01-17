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
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
            $table->string('date');
            $table->string('heure');
            $table->string('gens');
            $table->string('nom');
            $table->string('phone');
            $table->string('email');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the foreign key if it exists before dropping the table
        Schema::table('reservations', function (Blueprint $table) {
            if (Schema::hasColumn('reservations', 'id_user')) {
                $table->dropForeign(['id_user']);
            }
        });

        Schema::dropIfExists('reservations');
    }
};
