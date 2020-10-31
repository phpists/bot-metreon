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
            $table->increments('id');
            $table->integer('chat_id')->nullable();
            $table->integer('is_admin')->nullable();
            $table->string('first_name')->nullable();
            $table->string('user_name')->nullable();
            $table->enum('status', [
                'new', 'done', 'order_start', 'mailing'
            ]);
            $table->integer('is_active');
            $table->integer('verify');
            $table->integer('product_id')->nullable();

            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
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
}
