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
        Schema::create( 'users', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'name', 100 );
            $table->string( 'email', 100 )->unique();
            $table->timestamp( 'email_verified_at' )->nullable();
            $table->string( 'password', 50 );
            $table->date( 'date_of_birth' )->nullable();
            $table->string( 'profile_picture' )->nullable();
            $table->rememberToken();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists( 'users' );
    }
};