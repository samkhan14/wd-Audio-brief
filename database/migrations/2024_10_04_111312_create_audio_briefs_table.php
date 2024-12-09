<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudioBriefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audio_briefs', function (Blueprint $table) {
            $table->id();
            // Foreign key linking to the web_briefs table
            $table->foreignId('brief_id')
                ->constrained('web_briefs')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->longText('full_brief')->nullable();

            $table->text('q1')->nullable();
            $table->longText('ans1')->nullable();

            $table->text('q2')->nullable();
            $table->longText('ans2')->nullable();

            // Timestamps for created_at and updated_at
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
        Schema::dropIfExists('audio_briefs');
    }
}
