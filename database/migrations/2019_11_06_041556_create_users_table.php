<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('name', 100);
            $table->string('last_name', 100);
            $table->date('birthday');
            $table->string('address', 200);
            $table->bigInteger('dni')->unsigned()->unique();
            $table->string('nationality', 100);
            $table->string('email', 150)->unique();
            $table->bigInteger('phone')->unsigned();
            $table->text('comments');
            $table->text('event_question');
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
}
