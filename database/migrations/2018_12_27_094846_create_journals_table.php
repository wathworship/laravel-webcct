<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_journals', function (Blueprint $table) {
            $table->increments('idt_journals');
            $table->string('journals_name');
            $table->string('issue');
            $table->text('journals_file');
            $table->text('journals_cover');
            $table->integer('users_iduser');
            $table->integer('t_journalstype_idt_journalstype');
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
        Schema::dropIfExists('t_journals');
    }
}
