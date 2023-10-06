<?php


/**
 * Log data the data
 *
 * @param $data
 * @param string $logType
 * @return void
 */
function m_logger($data, $logType = "info")
{
    $mLogger = \Magento\Framework\App\ObjectManager::getInstance()->create(\Dipu\MLogger\Helpers\MLogger::class);
    $mLogger->mLogger($data, $logType);
}
