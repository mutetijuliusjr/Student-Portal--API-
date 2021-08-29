<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semesters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->char('code', 10);
            $table->foreignId('course_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreignId('unit_1')->references('id')->on('units')->onDelete('cascade');
            $table->foreignId('unit_2')->references('id')->on('units')->onDelete('cascade');
            $table->foreignId('unit_3')->references('id')->on('units')->onDelete('cascade');
            $table->foreignId('unit_4')->references('id')->on('units')->onDelete('cascade');
            $table->foreignId('unit_5')->references('id')->on('units')->onDelete('cascade');
            $table->foreignId('unit_6')->references('id')->on('units')->onDelete('cascade');
            $table->foreignId('unit_7')->references('id')->on('units')->onDelete('cascade');
            $table->foreignId('unit_8')->references('id')->on('units')->onDelete('cascade');
            $table->foreignId('unit_9')->references('id')->on('units')->onDelete('cascade');
            $table->foreignId('unit_10')->references('id')->on('units')->onDelete('cascade');
            $table->timestamps();
        });
		
		Schema::table('semesters', function (Blueprint $table) {
			$table->unsignedBigInteger('unit_4')->nullable()->change();
			$table->unsignedBigInteger('unit_5')->nullable()->change();
			$table->unsignedBigInteger('unit_6')->nullable()->change();
			$table->unsignedBigInteger('unit_7')->nullable()->change();
			$table->unsignedBigInteger('unit_8')->nullable()->change();
			$table->unsignedBigInteger('unit_9')->nullable()->change();
			$table->unsignedBigInteger('unit_10')->nullable()->change();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semesters');
    }
}
