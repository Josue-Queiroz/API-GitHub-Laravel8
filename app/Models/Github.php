<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Github extends Model
{
    use HasFactory;
    protected $fillable = [
    'id',
    'login',
    'node_id',
    'avatar_url',
    'gravatar_id',
    'url',
    'html_url',
    'followers_url',
    'following_url',
    'gists_url',
    'starred_url',
    'subscriptions_url',
    'organizations_url',
    'repos_url',
    'events_url',
    'received_events_url',
    'type',
    'site_admin',
    'name',
    'company',
    'blog',
    'location',
    'email',
    'hireable',
    'bio',
    'twitter_username',
    'public_repos',
    'public_gists',
    'followers',
    'following'];

}
