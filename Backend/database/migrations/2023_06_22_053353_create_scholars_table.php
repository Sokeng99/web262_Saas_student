<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('scholars', function (Blueprint $table) {
    //         $table->id('scholars_id');
    //         $table->string('name');
    //         $table->string('email')->unique();
    //         $table->timestamp('email_verified_at')->nullable();
    //         $table->string('password');
    //         $table->rememberToken();
    //         $table->tinyInteger('ban');
    //         $table->timestamp('created_at')->useCurrent();
    //         $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
    //     });
    // }
    // {
        public function up()
        {
            Schema::create('scholars', function (Blueprint $table) {
                    $table->id('scholars_id');
                    $table->string('name');
                    $table->string('email')->unique();
                    $table->timestamp('email_verified_at')->nullable();
                    $table->string('password');
                    $table->rememberToken();
                    
                    $table->tinyInteger('ban');
                    $table->timestamp('created_at')->useCurrent();
                    $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
                });
   }
    
  

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scholars');
    }
}
