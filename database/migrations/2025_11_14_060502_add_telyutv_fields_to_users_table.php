<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('fullname')->nullable()->after('id');
            $table->text('bio')->nullable()->after('password');
            $table->date('join_date')->nullable()->after('bio');
            $table->string('location')->nullable()->after('join_date');

            // preference toggles
            $table->boolean('email_notify')->default(true)->after('location');
            $table->boolean('dark_mode')->default(false)->after('email_notify');
            $table->boolean('adult_content')->default(false)->after('dark_mode');

            // language
            $table->string('language')->default('id')->after('adult_content');

            // optional: avatar
            $table->string('avatar')->nullable()->after('language');
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'fullname', 'bio', 'join_date', 'location',
                'email_notify', 'dark_mode', 'adult_content',
                'language', 'avatar'
            ]);
        });
    }
};
