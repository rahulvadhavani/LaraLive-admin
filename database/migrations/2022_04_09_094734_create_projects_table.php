<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('slug',255)->nullable();
            $table->longText('description')->nullable();
            $table->text('technologies')->nullable();
            $table->tinyInteger('team_size')->default(1)->nullable();
            $table->string('image')->nullable();
            $table->bigInteger('category_id')->unsigned()->index();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('source_code')->nullable();
            $table->string('project_url')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 = pending, 1 = under-working, 2 = completed');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('projects');
    }
}
