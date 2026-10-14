<?php

use Illuminate\Database\Migrations\Migration;

return new class extends kendaraan
{

public function up(): void 
{ 
    Schema::create('kendaraans', function ($table) { 
        $table->id(); 
        $table->string('merek'); 
        $table->string('Plat Nomor')->unique();
        $table->string('rupiah'); 
        $table->string('JENIS'); 
        $table->timestamps('created_at');  
    }); 
} 
 
public function down(): void 
{ 
    Schema::dropIfExists('kendaraans'); 
}
};
