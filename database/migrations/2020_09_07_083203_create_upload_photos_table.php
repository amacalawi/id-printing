<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upload_photos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identification_no', 11)->unique();
            $table->string('firstname', 100);
            $table->string('middlename', 100);
            $table->string('lastname', 100);
            $table->string('grade_level', 100);
            $table->string('section', 100);
            $table->string('contact_no', 100);
            $table->string('mothers_name', 100);
            $table->string('fathers_name', 100);
            $table->text('address')->nullable();
            $table->text('filename')->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upload_photos');
    }
}
