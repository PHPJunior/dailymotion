<?php
/**
 * Created by PhpStorm.
 * User: Nyi Nyi Lwin
 * Date: 5/22/2018
 * Time: 12:31 PM.
 */


/*
|--------------------------------------------------------------------------
| Dailymotion
|--------------------------------------------------------------------------
|
|  Scope :  `read', `write', `delete', `email', `userinfo', `feed',
|           `manage_videos', `manage_comments', `manage_playlists',
|           `manage_tiles', `manage_subscriptions', `manage_friends',
|           `manage_favorites', `manage_likes', `manage_groups', `manage_records',
|           `manage_subtitles', `manage_features', `manage_history', `ifttt', `read_insights',
|           `manage_claim_rules', `delegate_account_management', `manage_analytics', `manage_player',
|           `manage_user_settings', `manage_collections', `manage_app_connections', `manage_applications'
|
|  Whitespace separated
*/

return [
    'client_id'     => 'client_id',
    'client_secret' => 'client_secret',
    'username'      => 'username',
    'password'      => 'password',
    'scope'         => 'manage_videos userinfo manage_playlists manage_user_settings manage_applications'
];
