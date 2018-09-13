<?php

/**
 * @author     School Assistant Developers Team
 * @copyright  2018-2018 School Assistant
 * @license    Any usage is forbidden
 */

namespace App\Service\Helper;

class DateTime
{
    // ########################################

    public function create(int $timestamp): \DateTime
    {
        return new \DateTime('@' . $timestamp, new \DateTimeZone('UTC'));
    }

    // ########################################
}