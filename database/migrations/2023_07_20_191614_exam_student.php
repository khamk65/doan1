<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exam_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('id_doexam');
            $table->string('class');
            $table->string('id_student');
            $table->foreign('id_doexam')->references('id')->on('doexams')->onDelete('cascade');
            $table->foreign('id_student')->references('id')->on('students')->onDelete('cascade');
            $table->timestamps('end_time');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_students');
    }
};
