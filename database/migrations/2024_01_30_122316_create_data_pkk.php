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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('email', 40)->unique()->min(10);
            $table->string('password')->min(8);
            $table->string('nama', 50);
            $table->enum('jenis_kelamin', ['Pria', 'Wanita', 'tidak ingin memberi tahu'])->default('tidak ingin memberi tahu');
            $table->string('no_telp', 15);
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->timestamps();
        });

        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->binary('image');
            $table->string('link', 15);
            $table->timestamps();
        });

        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->integer('produk_id');
            $table->integer('user_id');
            $table->timestamps();
        });

        Schema::create('komentar', function (Blueprint $table) {
            $table->id();
            $table->integer('produk_id');
            $table->integer('user_id');
            $table->text('komentar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
        Schema::dropIfExists('produk');
        Schema::dropIfExists('likes');
        Schema::dropIfExists('komentar');
    }
};
