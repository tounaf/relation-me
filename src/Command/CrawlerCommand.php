<?php

namespace App\Command;

use Symfony\Component\BrowserKit\HttpBrowser;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;

class CrawlerCommand extends Command
{
    protected static $defaultName = 'app:crawler';

    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');
        $client = new HttpBrowser(HttpClient::create());
        $response = $client->request('GET','https://etory.net/smartbaiboly/online');
        $container = $response->filter('#booksGrid')->children('div')->first()->children('div.row')->children('div')->first()->children('p')->children('a');
//        $nodeA = $container; //->link();
//        $link = $client->click($nodeA);
//        dump($container->text());die;
//        dump($response);
        dump($client->click($container->link()));die;
//        dump($link);die;
        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        if ($input->getOption('option1')) {
            // ...
        }

        $io->success('You have a new command! Now make it your own! Pass --help to see your options.');

        return 0;
    }
}
