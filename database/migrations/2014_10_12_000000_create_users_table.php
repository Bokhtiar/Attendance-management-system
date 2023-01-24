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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('f_name');
            $table->string('l_name');
            $table->longText('about')->nullable();
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('image')->nullable();
            $table->string('permanent_address');
            $table->string('present_address');
            $table->integer('role_id')->default(1);
            $table->integer('created_by')->nullable();
            $table->integer('designation_id');
            $table->integer('salary');
            $table->tinyInteger('status')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('users');
    }
};
