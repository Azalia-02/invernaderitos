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
        Schema::create('tb_personal', function (Blueprint $table) {
            $table->bigIncrements('id_personal');
            $table->string('nombre', 50);
            $table->string('app', 50);//Apellido paterno
            $table->string('apm', 20);//Apellido materno
            $table->string('telefono', 8);
            $table->string('email', 8);
            $table->string('curp', 8); 
            $table->string('rfc', 8);
            $table->string('cargo', 8);
            $table->timestamps();
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
