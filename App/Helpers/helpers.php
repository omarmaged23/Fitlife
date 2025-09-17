<?php
function logError($msg) {
    $logFile = __DIR__ . "/../../db_errors.log";
    error_log("[" . date("Y-m-d H:i:s") . "] ".$msg, 3, $logFile);
}