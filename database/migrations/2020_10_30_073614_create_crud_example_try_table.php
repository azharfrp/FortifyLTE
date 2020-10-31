<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrudExampleTryTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('crud_example_try', function (Blueprint $table) {
            $table->bigIncrements('crud_example_try_id');
            $table->foreignId('crud_example_base_id')->references('crud_example_base_id')->on('crud_example_base');
            $table->string('crud_example_try_photo');
            $table->string('crud_example_try_string');
            $table->text('crud_example_try_textarea');
            $table->decimal('crud_example_try_number');
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
        Schema::dropIfExists('crud_example_try');
    }
}
