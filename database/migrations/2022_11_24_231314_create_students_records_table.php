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
        Schema::create('student_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('my_class_id');
            $table->unsignedBigInteger('section_id');
            $table->string('adm_no', 30)->unique()->nullable();
            $table->unsignedBigInteger('my_parent_id')->nullable();
            $table->unsignedBigInteger('dorm_id')->nullable();
            $table->string('dorm_room_no')->nullable();
            $table->string('session');
            $table->string('house')->nullable();
            $table->tinyInteger('age')->nullable();
            $table->string('year_admitted')->nullable();
            $table->tinyInteger('grad')->default(0);
            $table->string('grad_date')->nullable();
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
        Schema::dropIfExists('students_records');
    }
};
