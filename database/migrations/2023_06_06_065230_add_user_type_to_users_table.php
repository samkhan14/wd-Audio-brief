<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserTypeToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->string('first_name')->nullable()->after('id');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('phone_number')->nullable()->after('password');
            $table->string('company_name')->nullable()->after('phone_number');
            $table->string('city')->nullable()->after('company_name');
            $table->string('zipcode')->nullable()->after('city');
            $table->string('country')->nullable()->after('zipcode');
            $table->string('state')->nullable()->after('country');
            $table->string('image')->nullable()->after('state');
            $table->longText('address')->nullable()->after('image');
            $table->string('user_type')->nullable()->after('address');
            $table->boolean('status')->default(1)->after('user_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('company_name')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('image')->nullable();
            $table->longText('address')->nullable();
            $table->string('user_type')->nullable();
            $table->boolean('status')->default(1);
        });
    }
}
