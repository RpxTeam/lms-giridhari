<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1537287586CoursesdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('coursesdatas')) {
            Schema::create('coursesdatas', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('view')->nullable();
                $table->float('progress', 10 , 5)->nullable();
                $table->integer('rating')->nullable();
                $table->text('testimonal')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coursesdatas');
    }
}
