<?php
/**
 * @package   Lof\PimcoreIntegration
 * @author    Mateusz Bukowski <mbukowski@divante.pl>
 * @copyright 2018 Lof Sp. z o.o.
 * @license   See LICENSE_DIVANTE.txt for license details.
 */

namespace Lof\PimcoreIntegration\Logger;

use Lof\PimcoreIntegration\Logger\Greylog\LoggerFactory as GraylogLoggerFactory;
use Lof\PimcoreIntegration\Logger\Stream\LoggerFactory as StreamLoggerFactory;
use Lof\PimcoreIntegration\Model\Config\Source\Logger\Type;
use Lof\PimcoreIntegration\System\ConfigInterface;
use Monolog\Logger;

/**
 * Class BridgeLogger
 */
class BridgeLoggerFactory
{
    /**
     * @var StreamLoggerFactory|GraylogLoggerFactory
     */
    protected $loggerFactory;

    /**
     * @var ConfigInterface
     */
    protected $config;

    /**
     * @var StreamLoggerFactory
     */
    protected $streamLoggerFactory;

    /**
     * @var GraylogLoggerFactory
     */
    protected $graylogLoggerFactory;

    /**
     * BridgeLogger constructor.
     *
     * @param ConfigInterface $config
     * @param StreamLoggerFactory $streamLoggerFactory
     * @param GraylogLoggerFactory $graylogLoggerFactory
     */
    public function __construct(
        ConfigInterface $config,
        StreamLoggerFactory $streamLoggerFactory,
        GraylogLoggerFactory $graylogLoggerFactory
    ) {
        $this->config = $config;
        $this->streamLoggerFactory = $streamLoggerFactory;
        $this->graylogLoggerFactory = $graylogLoggerFactory;
    }

    /**
     * @return Logger
     */
    public function getLoggerInstance(): Logger
    {
        switch ($this->config->getLoggerType()) {
            case Type::LOGGER_TYPE_STREAM:
                $this->loggerFactory = $this->streamLoggerFactory;
                break;
            case Type::LOGGER_TYPE_GRAYLOG:
                $this->loggerFactory = $this->graylogLoggerFactory;
                break;
            default:
                $this->loggerFactory = $this->streamLoggerFactory;
        }

        return $this->loggerFactory->create();
    }
}
