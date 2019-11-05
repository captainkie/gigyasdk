<?php
/**
 * Gigya Socialize Key Not Found Exception
 */

namespace Gigya\Lib;

use Gigya\Lib\GSException;
use Gigya\Lib\GSRequest;
use Gigya\Lib\GSResponse;
use Gigya\Lib\GSObject;
use Gigya\Lib\GSArray;
use Gigya\Lib\SigUtils;

class GSKeyNotFoundException extends GSException
{
    public function __construct($key)
    {
        $this->errorMessage = "GSObject does not contain a value for key " . $key;
    }
}