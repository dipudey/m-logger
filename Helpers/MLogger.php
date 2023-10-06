<?php

namespace Dipu\MLogger\Helpers;

use Psr\Log\LoggerInterface;

class MLogger
{

    /**
     * @var LoggerInterface
     */
    public $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Log the data
     *
     * @param $data
     * @param string $logType
     * @return void
     */
    public function mLogger($data, $logType = "info")
    {
        if (is_array($data) || is_object($data)) {
            $this->$logType(print_r($data, true));
        } else {
            if (is_bool($data)) {
                $this->$logType($data ? $data . ' is true' . PHP_EOL : $data . ' is false' . PHP_EOL);
            } elseif (is_null($data)) {
                $this->$logType("NULL");
            } else {
                $this->$logType($data);
            }
        }
    }

    /**
     * @param $data
     * @return void
     */
    private function info($data)
    {
        $this->logger->info($data);
    }

    /**
     * @param $data
     * @return void
     */
    private function error($data)
    {
        $this->logger->error($data);
    }

    /**
     * @param $data
     * @return void
     */
    private function alert($data)
    {
        $this->logger->alert($data);
    }

    /**
     * @param $data
     * @return void
     */
    private function emergency($data)
    {
        $this->logger->emergency($data);
    }

    /**
     * @param $data
     * @return void
     */
    private function notice($data)
    {
        $this->logger->notice($data);
    }

    /**
     * @param $data
     * @return void
     */
    private function warning($data)
    {
        $this->logger->warning($data);
    }

}
