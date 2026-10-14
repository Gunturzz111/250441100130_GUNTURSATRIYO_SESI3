<?php

use Illuminate\Database\Migrations\Migration;

return new class extends kendaraan
{

 public function up(): void 
{ 
    Schema::create('sewas', function ($table) { 
        $table->id(); 
        $table->string('kendaraan_id'); 
        $table->string('nama_penyewa'); 
        $table->string('tanggal_mulai'); 
        $table->string('lama_sewa'); 
        $table->istring('total_biaya'); 
        $table->enum('berjalan', 'selesai'); 
        $table->timestamps('created_at','updated_at'); 
    }); 
} 
 
public function down(): void 
{ 
    Schema::dropIfExists('sewa');
    }
};
