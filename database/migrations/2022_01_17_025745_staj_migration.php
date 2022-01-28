<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StajMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stajs', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->string('soyad');
            $table->string('ogrenci_no');
            $table->string('bolum');
            $table->string('telefon');
            $table->string('firma_ad');
            $table->longText('firma_adres');
            $table->date('baslangic_tarihi');
            $table->date('bitis_tarihi');
            $table->string('toplam_gun');
            $table->string('staj_turu');
            $table->longText('belge')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stajs');
    }
}
