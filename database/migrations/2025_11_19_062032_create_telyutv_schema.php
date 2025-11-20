<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /* -----------------------------------
        | USERS TABLE
        ------------------------------------*/
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // your custom fields
            $table->string('fullname');
            $table->string('email')->unique();
            $table->string('password');

            $table->text('bio')->nullable();
            $table->date('join_date')->nullable();
            $table->string('location')->nullable();

            // preference toggles
            $table->boolean('email_notify')->default(true);
            $table->boolean('dark_mode')->default(false);
            $table->boolean('adult_content')->default(false);

            $table->string('language')->default('id');
            $table->string('avatar')->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        /* -----------------------------------
        | CATEGORY TABLE
        ------------------------------------*/
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('favicon_logo')->nullable();
            $table->timestamps();
        });

        /* -----------------------------------
        | CONTENT TABLE
        ------------------------------------*/
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('views')->default(0);

            $table->text('description')->nullable();
            $table->string('thumbimg')->nullable();

            $table->date('date')->nullable();

            // user who created content
            $table->foreignId('user_id')->index()->constrained('users')->cascadeOnDelete();

            // category link (optional)
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();

            $table->timestamps();
        });

        /* -----------------------------------
        | POSTS TABLE
        ------------------------------------*/
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('textfill')->nullable();
            $table->string('thumbimg')->nullable();

            $table->date('date')->nullable();

            // user who created post
            $table->foreignId('user_id')->index()->constrained('users')->cascadeOnDelete();

            // like count is stored separately
            $table->unsignedBigInteger('likes')->default(0);

            $table->timestamps();
        });

        /* -----------------------------------
        | CONTENT COMMENTS
        ------------------------------------*/
        Schema::create('content_comments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('content_id')->index()->constrained('contents')->cascadeOnDelete();
            $table->foreignId('user_id')->index()->constrained('users')->cascadeOnDelete();

            $table->text('text');
            $table->unsignedBigInteger('likes')->default(0);

            $table->date('date')->nullable();

            $table->timestamps();
        });

        /* -----------------------------------
        | POST COMMENTS
        ------------------------------------*/
        Schema::create('post_comments', function (Blueprint $table) {
            $table->id();

            $table->foreignId('post_id')->index()->constrained('posts')->cascadeOnDelete();
            $table->foreignId('user_id')->index()->constrained('users')->cascadeOnDelete();

            $table->text('text');
            $table->unsignedBigInteger('likes')->default(0);

            $table->date('date')->nullable();

            $table->timestamps();
        });

        /* -----------------------------------
        | FAVORITES TABLE
        ------------------------------------*/
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->index()->constrained('users')->cascadeOnDelete();

            // only posts are favoritable for now
            $table->foreignId('post_id')->index()->constrained('posts')->cascadeOnDelete();

            $table->timestamps();

            $table->unique(['user_id', 'post_id']); // nothing twice
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
        Schema::dropIfExists('favorites');
        Schema::dropIfExists('post_comments');
        Schema::dropIfExists('content_comments');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('contents');
        Schema::dropIfExists('categories');
    }
};
