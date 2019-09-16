<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        // Schema::create('suppliers', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->timestamps();
        // });

        Schema::create('suppliers', function (Blueprint $table) {
             $table->increments('id');
             $table->string('username', 100)->unique();
             $table->string('email', 150)->unique();
             $table->string('password', 200);
             $table->string('nama', 100);
             $table->text('alamat')->nullable();
             $table->string('telepon', 13)->nullable();
             $table->string('tempat_lahir', 50)->nullable();
             $table->date('tanggal_lahir')->nullable();
             $table->string('foto', 100)->nullable();
             $table->enum("status", ["ACTIVE", "INACTIVE"]);
             $table->rememberToken();
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
        Schema::dropIfExists('suppliers');
    }
}
