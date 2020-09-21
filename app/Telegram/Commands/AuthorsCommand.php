<?php

namespace App\Telegram\Commands;

use App\Author;
use Telegram;
use Telegram\Bot\Commands\Command;

/**
 * Class HelpCommand.
 */
class AuthorsCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'authors';

    /**
     * @var array Command Aliases
     */
    protected $aliases = ['listauthors'];

    /**
     * @var string Command Description
     */
    protected $description = 'Authors command, Get a list of all Authors';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $response = $this->getUpdate();

        $authors = Author::all();

        $text = '';

        foreach ($authors as $author) {
            $text .= "Name: " . $author->name . "\r\n";
            $text .= "----------------------------------" . "\r\n";
        }

        $this->replyWithMessage(compact('text'));
    }
}
