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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary()->index();
            $table->string('email', 40)->unique()->min(10);
            $table->string('password')->min(8);
            $table->string('nama', 50);
            $table->enum('jenis_kelamin', ['Pria', 'Wanita', 'tidak ingin memberi tahu'])->default('tidak ingin memberi tahu');
            $table->string('no_telp', 15);
            $table->enum('role', ['admin', 'user'])->default('user');
            $table->dateTime('email_verified_at')->nullable();
            $table->timestamps();
        });

        Schema::create('produk', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50)->unique();
            $table->string('tipe_image', 20);
            $table->string('image_path');
            $table->string('desk');
            $table->string('link');
            $table->timestamps();
        });

        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->integer('produk_id');
            $table->string('user_id');
            $table->timestamps();
        });

        Schema::create('komentar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produk_id');
            $table->foreign('produk_id')->references('id')->on('produk')->onDelete('cascade');
            $table->string('user_id');
            $table->text('komentar');
            $table->timestamps();
        });

        Schema::create('user_otps', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->integer('otp_code');
            $table->dateTime('expired_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('produk');
        Schema::dropIfExists('likes');
        Schema::dropIfExists('komentar');
        Schema::dropIfExists('user_otps');
    }
};
