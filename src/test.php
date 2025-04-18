<?php

// src/Command/LeagueList.php
namespace Tamzidan\Sportcliapp;

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

// the name of the command is what users type after "php bin/console"
#[AsCommand(name: 'leagues:list')]
class GetLeagues extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $apikey = trim(file_get_contents( __DIR__ . '/../apikey.txt'));
        $client = new Client(['base_uri' => 'https://v3.football.api-sports.io/']);
        $response = $client->request('GET', 'leagues',['headers' => [
            'x-rapidapi-key: ' . $apikey,
            'x-rapidapi-host: v3.football.api-sports.io'        
        ]]);

        var_dump($response);

        // ... put here the code to create the user

        // this method must return an integer number with the "exit status code"
        // of the command. You can also use these constants to make code more readable

        // return this if there was no problem running the command
        // (it's equivalent to returning int(0))

        return Command::SUCCESS;

        // or return this if some error happened during the execution
        // (it's equivalent to returning int(1))
        // return Command::FAILURE;

        // or return this to indicate incorrect command usage; e.g. invalid options
        // or missing arguments (it's equivalent to returning int(2))
        // return Command::INVALID
    }
}


$app = new Application('myapp', '0.1');
$app->add(new GetLeagues());
$app->run();
