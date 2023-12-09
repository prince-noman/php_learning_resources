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
        Schema::create( 'playlist_tracks', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'track_id' )->constrained();
            $table->foreignId( 'playlist_id' )->constrained();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists( 'playlist_tracks' );
    }
};
