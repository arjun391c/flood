<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->double('phone');
            $table->string('email')->nullable();
            $table->string('doc',100)->nullable();
            $table->string('dno')->nullable();
            $table->string('dfname',50);
            $table->string('dlname',50);
            $table->integer('pincode')->nullable();
            $table->date('dob')->nullable();
            $table->string('pname',50)->nullable();
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
        Schema::dropIfExists('uploads');
    }
}
