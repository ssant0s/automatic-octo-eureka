<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gardes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('candidate_id');
            $table->integer('user_id');
            $table->char('grade',2);
            $table->text('feedback');
            $table->text('file');

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
        Schema::dropIfExists('gardes');
    }
}
