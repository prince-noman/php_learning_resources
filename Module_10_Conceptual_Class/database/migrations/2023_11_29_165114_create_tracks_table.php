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
        Schema::create( 'tracks', function ( Blueprint $table ) {
            $table->id();
            $table->foreignId( 'album_id' )->constrained();
            // $table->foreign( 'artist_id' )->references( 'id' )->on( 'artists' );
            $table->string( 'name' );
            $table->double( 'duration', 4, 2 );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists( 'tracks' );
    }
};
