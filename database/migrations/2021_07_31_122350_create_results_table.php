<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('unit_id')->references('id')->on('units')->onDelete('cascade');
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->integer('cat_1');
            $table->integer('cat_2')->nullable();
            $table->integer('cat_3')->nullable();
            $table->integer('assignment_1');
            $table->integer('assignment_2')->nullable();
            $table->integer('assignment_3')->nullable();
            $table->integer('exams')->nullable();
            $table->integer('attendance')->nullable();
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
        Schema::dropIfExists('results');
    }
}
