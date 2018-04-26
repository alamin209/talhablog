<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogAddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_add', function (Blueprint $table) {
            $table->increments('blog_id');
            $table->integer('admin_id');
            $table->Integer('id');
            $table->string('blog_title');
            $table->text('short_description');
            $table->longtext('long_description');
            $table->tinyInteger('Publication_status');
            $table->string('blog_image');

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
        Schema::dropIfExists('blog_add');
    }
}
