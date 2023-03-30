<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {   
        //  FACTURAS
        Schema::create('facturas', function (Blueprint $table) {
            $table->foreign('id_registro_viaje')->references('id')->on('registro_viaje');
        });
        // MUNICIPIOS
        Schema::create('municipios', function (Blueprint $table) {
            $table->foreign('id_departamento')->references('id')->on('departamentos');
        });
        // ORDEN DE COMPRA
        Schema::create('orden_compra', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuario');
        });
        // MANTENIMIENTOS
        Schema::create('mantenimientos', function (Blueprint $table) {
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
        });
        // COMPRA
        Schema::create('compra', function (Blueprint $table) {
            $table->foreign('id_autorizacion')->references('id')->on('_autorizacion');
        });
        // PROVEEDOR
        Schema::create('proveedor', function (Blueprint $table) {
            $table->foreign('id_compra')->references('id')->on('compra');
        });
        //  VIATICOS DEL CONDUCTOR
        Schema::create('viaticos_conductor', function (Blueprint $table) {
            $table->foreign('id_registro_viaje')->references('id')->on('registro_viaje');
        });
        // COTIZACION DEL CLIENTE
        Schema::create('cotizacion_cliente', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->foreign('id_tipo_carga')->references('id')->on('tipo_cargas');
            $table->foreign('id_municipio_destino')->references('id')->on('municipios');
            $table->foreign('id_minicipio_origen')->references('id')->on('municipios');
        });
        // REGISTRO DE VIAJE
        Schema::create('registro_viaje', function (Blueprint $table) {
            $table->foreign('id_tipo_carga')->references('id')->on('tipo_cargas');
            $table->foreign('id_municipio_origen')->references('id')->on('municipios');
            $table->foreign('id_municipio_destino')->references('id')->on('municipios');
            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->foreign('id_cotizacion_cliente')->references('id')->on('cotizacion_cliente');
            $table->foreign('id_vehiculo')->references('id')->on('vehiculos');
        });
        // AUTORIZACION
        Schema::create('_autorizacion', function (Blueprint $table) {
            $table->foreign('id_orden_compra')->references('id')->on('orden_compra');
            $table->foreign('id_usuario')->references('id')->on('usuario');
        });
        // USUARIOS
        Schema::create('usuario', function (Blueprint $table) {
            $table->foreign('id_tipo_documento')->references('id')->on('tipo_documentos');
            $table->foreign('id_cargo')->references('id')->on('cargos');
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
