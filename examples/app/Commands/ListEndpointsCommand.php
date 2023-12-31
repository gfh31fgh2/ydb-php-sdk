<?php

namespace App\Commands;

use App\AppService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use YdbPlatform\Ydb\Ydb;

class ListEndpointsCommand extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'list-endpoints';

    /**
     * @var AppService
     */
    protected $appService;

    public function __construct()
    {
        $this->appService = new AppService;

        parent::__construct();
    }

    protected function configure()
    {
        $this->setDescription('Get the endpoints.');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $ydb = $this->appService->initYdb();

        $result = $ydb->retry(function (Ydb $ydb) use ($output) {

            $discovery = $ydb->discovery();

            return $discovery->listEndpoints();

        }, true);

        $output->writeln(json_encode($result, 480));

        return Command::SUCCESS;
    }
}
