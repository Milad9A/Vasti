<?php

namespace App\Telegram\Commands;

use App\Category;
use Telegram;
use Telegram\Bot\Commands\Command;

/**
 * Class HelpCommand.
 */
class CategoriesCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'categories';

    /**
     * @var array Command Aliases
     */
    protected $aliases = ['listcategories'];

    /**
     * @var string Command Description
     */
    protected $description = 'Categories command, Get a list of all Categories';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $response = $this->getUpdate();

        $categories = Category::all();

        $text = '';

        foreach ($categories as $category) {
            $text .= "Name: " . $category->name . "\r\n";
            $text .= "----------------------------------" . "\r\n";
        }

        $this->replyWithMessage(compact('text'));
    }
}
