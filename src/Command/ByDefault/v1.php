<?php

/**
 * @author     School Assistant Developers Team
 * @copyright  2018-2018 School Assistant
 * @license    Any usage is forbidden
 */

namespace App\Command\ByDefault;

use App\Command\BaseAbstract;
use App\Command\Response;
use App\Command\Response\Factory as ResponseFactory;

class v1 extends BaseAbstract
{
    // ########################################

    public function __construct(ResponseFactory $responseFactory) {
        parent::__construct($responseFactory);
    }

    public function process(): Response
    {
        //todo is not register

        return $this->createSuccessResponse();
    }

    // ########################################
}