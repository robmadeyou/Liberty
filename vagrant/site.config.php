<?php

namespace Project\Liberty;

use Rhubarb\Crown\Context;
use Rhubarb\Crown\Exceptions\Handlers\ExceptionHandler;
use Rhubarb\Crown\Logging\Log;
use Rhubarb\Crown\Logging\PhpLog;
use Rhubarb\Stem\StemSettings;

$dbSettings = new StemSettings();
$dbSettings->Host = "localhost";
$dbSettings->Username = "root";
$dbSettings->Password = "";
$dbSettings->Database = "vagrant";

$set = new Context();
$set->DeveloperMode = true;

// Add a PHP logger
Log::attachLog( new PhpLog( Log::ERROR_LEVEL ) );


ExceptionHandler::disableExceptionTrapping();