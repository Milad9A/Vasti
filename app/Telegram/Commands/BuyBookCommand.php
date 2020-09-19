<?php

namespace App\Telegram\Commands;

use Telegram;
use Telegram\Bot\Commands\Command;


/**
 * Class HelpCommand.
 */
class BuyBookCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'buyBook';

    /**
     * @var array Command Aliases
     */
    protected $aliases = [];

    /**
     * @var string Command Description
     */
    protected $description = 'Buy Book Command, Choose a book buy entering the name, then Confirm your payment';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $this->replyWithMessage(['text' => 'Please enter the name of the book!']);

        $web = Telegram::getWebhookUpdates();
        $this->replyWithMessage(['text' => 'Please ' . $web->getMessage()]);

    }


}


