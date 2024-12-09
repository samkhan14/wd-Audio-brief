<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBusinessemailAndMessageToContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->string('businessemail')->nullable()->after('service');
            $table->string('message')->nullable()->after('businessemail');
            $table->dropColumn('project');
            $table->dropColumn('industry');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('businessemail');
            $table->dropColumn('message');
            $table->longText('project')->nullable();
            $table->string('industry')->nullable();
        });
    }
}
