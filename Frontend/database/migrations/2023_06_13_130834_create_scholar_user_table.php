<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScholarUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scholar_user', function (Blueprint $table) {
            $table->id('scholar_user_id');
            $table->id('category_id');
            $table->text('username');
            $table->text('email');
            $table->text('password');
            $table->text('bio');
            $table->text('work');
            $table->text('education');
            $table->text('experience');
            // Role used to define user type
            // 1 = Student User
            // 2 = Scholar User
            // 3 = Admin
            $table->tinyInteger('status')->default(2);
            $table->boolean('is_banned')->default(false);
            $table->unsignedBigInteger('ban_by_admin_id')->nullable();
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
        Schema::dropIfExists('scholar_user');
    }
}
