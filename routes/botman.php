<?php
use App\Conversations\mainConversation;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('/start', function ( $bot ) { $bot->startConversation ( new mainConversation ); } );
