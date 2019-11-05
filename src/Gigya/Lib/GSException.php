<?php
/**
 * Gigya Socialize Exception
 */

namespace Gigya\Lib;

use Gigya\Lib\GSKeyNotFoundException;
use Gigya\Lib\GSRequest;
use Gigya\Lib\GSResponse;
use Gigya\Lib\GSObject;
use Gigya\Lib\GSArray;
use Gigya\Lib\SigUtils;

class GSException extends Exception 
{
    public $errorMessage;
}