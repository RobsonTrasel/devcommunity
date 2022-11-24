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
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('code', 100);
            $table->string('username', 100)->nullable()->unique();
            $table->string('user_type');
            $table->string('birth_date')->nullable();
            $table->string('gender')->nullable();
            $table->string('photo');
            $table->string('phone')->nullable();
            $table->string('address');
            $table->unsignedInteger('bt_id')->nullable();
            $table->unsignedInteger('state_id')->nullable();
            $table->unsignedInteger('lga_id')->nullable();
            $table->unsignedInteger('nal_id')->nullable();
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
