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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id('id_barang'); // Auto increment ID
            $table->string('nama_barang', 30); // varchar(30) nama_barang
            $table->integer('kategori'); // int kategori
            $table->decimal('harga', 8, 2); // decimal harga
            $table->string('foto'); // string foto
            $table->integer('stok'); // int stok
            $table->timestamps(); // created_at and updated_at
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
