<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('link')->unique();
            $table->decimal('price');
            $table->decimal('old_price');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('category_id');
            $table->integer('lesson');
            $table->integer('view_count');
            $table->json('benefits');
            $table->json('fqa');
            $table->tinyInteger('is_feature');
            $table->tinyInteger('is_online');
            $table->text('description');
            $table->longText('content');
            $table->string('meta_title');
            $table->string('meta_desc');
            $table->string('meta_keyword');
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
        Schema::dropIfExists('courses');
    }
};
