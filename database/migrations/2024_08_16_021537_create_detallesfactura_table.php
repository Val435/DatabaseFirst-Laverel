<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallesfactura', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('factura_id')->nullable()->index('factura_id');
            $table->integer('producto_id')->nullable()->index('producto_id');
            $table->integer('cantidad');
            $table->decimal('precio_unitario', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallesfactura');
    }
};
