<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trainings_id')->constrained();
            $table->string('name');
            $table->date('dob');
            $table->string('relative_name');
            $table->text('address');
            $table->string('contact');
            $table->string('qualification');
            $table->string('passport_photo');
            $table->string('document_photo');
            $table->string('payment_mode');
            $table->boolean('fee_paid');
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
        Schema::dropIfExists('applications');
    }
}
