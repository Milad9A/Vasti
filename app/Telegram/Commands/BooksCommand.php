<?php

namespace App\Telegram\Commands;

use App\Book;
use Telegram;
use Telegram\Bot\Commands\Command;

/**
 * Class HelpCommand.
 */
class BooksCommand extends Command
{
    /**
     * @var string Command Name
     */
    protected $name = 'books';

    /**
     * @var array Command Aliases
     */
    protected $aliases = ['listbooks'];

    /**
     * @var string Command Description
     */
    protected $description = 'Help command, Get a list of all commands';

    /**
     * {@inheritdoc}
     */
    public function handle()
    {
        $response = $this->getUpdate();

        $books = Book::all();
        $text = '';
        foreach ($books as $book) {
            $text .= "Title: " . $book->title . "\r\n";
            $text .= "Price:" . $book->price . '$' . "\r\n";
            $text .= "Author: " . $book->author->name . "\r\n";
            $text .= "Publishing House:" . $book->publishing_house->name . "\r\n";
            $text .= "Language:" . $book->language . "\r\n";
            $text .= "ISBN:" . $book->isbn . "\r\n";
            $text .= "Rating:" . $book->rating . "\r\n";
            $text .= "----------------------------------" . "\r\n";
        }

        $this->replyWithMessage(compact('text'));
    }
}
