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
        Schema::table('artists', function (Blueprint $table) {
            $table->foreign('cover_id')->references('id')->on('covers')->onDelete('cascade');
        });
        
        Schema::table('bands', function (Blueprint $table) {
            $table->foreign('cover_id')->references('id')->on('covers')->onDelete('cascade');
        });
        
        Schema::table('songs', function (Blueprint $table) {
            $table->foreign('cover_id')->references('id')->on('covers')->onDelete('cascade');
        });
        
        Schema::table('song_genres', function (Blueprint $table) {
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
        });
        
        Schema::table('song_bands', function (Blueprint $table) {
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
            $table->foreign('band_id')->references('id')->on('bands')->onDelete('cascade');
        });
        
        Schema::table('song_artists', function (Blueprint $table) {
            $table->foreign('song_id')->references('id')->on('songs')->onDelete('cascade');
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
        });
        
        Schema::table('band_artists', function (Blueprint $table) {
            $table->foreign('band_id')->references('id')->on('bands')->onDelete('cascade');
            $table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
