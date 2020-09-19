<?php

namespace App\Telegram\Commands;

use Telegram\Bot\Commands\Command;
use Telegram;

/**
 * Class HelpCommand.
 */
class StartCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'start';

    /**
     * @var array Command Aliases
     */
    protected $aliases = ['init'];

    /**
     * @var string Command Description
     */
    protected $description = 'Help command, Get a list of all commands';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $Update = $this->getUpdate();

        $Message = $Update->getMessage();

        $this->replyWithChatAction(['action' => Actions::TYPING]);
        $commands = $this->telegram->getCommands();
        $text = 'something';
        $text .= PHP_EOL . PHP_EOL;
        foreach ($commands as $name) {
            $text .= '/' . $name . PHP_EOL;
        }
        $response = $this->replyWithMessage(
            [
                'text'                      => $text,
                'parse_mode'                => 'Markdown',
                'disable_web_page_preview'  => false,
                'reply_to_message_id'       => $Message->getMessageId(),
                'reply_markup'              => null,
            ]
        );
    }
}
