<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebBriefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('web_briefs', function (Blueprint $table) {
            $table->id();
            $table->string('cus_name')->nullable();
            $table->string('cus_email')->nullable();
            $table->bigInteger('cus_phone')->nullable();
            $table->string('company_name')->nullable();
            $table->longText('industry')->nullable();
            $table->longText('industryName')->nullable();
            $table->string('type_of_website')->nullable();
            $table->longText('service')->nullable();
            $table->longText('data')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('web_briefs');
    }
}
