<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGithubsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('githubs', function (Blueprint $table) {
            $table->integer('id_cad')->autoIncrement();
            $table->integer('id');
            $table->char('login',191);
            $table->char('node_id',191);
            $table->string('avatar_url');
            $table->char('gravatar_id',191)->nullable();
            $table->string('url');
            $table->string('html_url');
            $table->string('followers_url');
            $table->string('following_url');
            $table->string('gists_url');
            $table->string('starred_url');
            $table->string('subscriptions_url');
            $table->string('organizations_url');
            $table->string('repos_url');
            $table->string('events_url');
            $table->char('received_events_url',191);
            $table->char('type',191)->nullable();
            $table->char('site_admin',191)->nullable();
            $table->char('name',191)->nullable();
            $table->char('company',191)->nullable();
            $table->char('blog',191)->nullable();
            $table->char('location',191)->nullable();
            $table->char('email',191)->nullable();
            $table->char('hireable',191)->nullable();
            $table->char('bio',191)->nullable();
            $table->char('twitter_username',191)->nullable();
            $table->integer('public_repos');
            $table->integer('public_gists');
            $table->integer('followers');
            $table->integer('following');
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
        Schema::dropIfExists('githubs');
    }
}
