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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('my_class_id');
            $table->unsignedBigInteger('section_id');
            $table->unsignedBigInteger('exam_id');
            $table->integer('t1')->nullable();
            $table->integer('t2')->nullable();
            $table->integer('t3')->nullable();
            $table->integer('t4')->nullable();
            $table->integer('tca')->nullable();
            $table->integer('exm')->nullable();
            $table->integer('tex1')->nullable();
            $table->integer('tex2')->nullable();
            $table->integer('tex3')->nullable();
            $table->tinyInteger('sub_pos')->nullable();
            $table->integer('cum')->nullable();
            $table->string('cum_ave')->nullable();
            $table->unsignedBigInteger('grade_id')->nullable();
            $table->string('year');
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
        Schema::dropIfExists('marks');
    }
};
