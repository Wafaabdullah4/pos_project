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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('nama_makanan')->nullable();
            $table->string('kelas')->nullable();
            $table->decimal('harga', 8, 2);
            $table->integer('stock');
            $table->string('jenis')->nullable();
            $table->text('content')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
