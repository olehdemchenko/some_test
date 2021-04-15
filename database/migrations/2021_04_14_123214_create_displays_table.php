<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('displays', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reseller_id');
            $table->string('type', 20);
            $table->string('serial_number', 32);
            $table->string('file_path', 120);

            $table->timestamps();

            $table->foreign('reseller_id')->references('id')->on('resellers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('displays');
    }
}
