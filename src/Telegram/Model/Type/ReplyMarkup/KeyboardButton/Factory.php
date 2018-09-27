<?php

/**
 * @author     School Assistant Developers Team
 * @copyright  2018-2018 School Assistant
 * @license    Any usage is forbidden
 */

namespace App\Telegram\Model\Type\ReplyMarkup\KeyboardButton;

class Factory
{
    // ########################################

    public function create(string $text, bool $requestContact = false, bool $requestLocation = false): Entity
    {
        return new Entity($text, $requestContact, $requestLocation);
    }

    // ########################################
}