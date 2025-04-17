# sportcliapp

## Overview

Aplikasi penampil informasi skor olahraga.

## 15 April 2025
- [x] Feature: get list of leagues
- [x] Read documentation on how to get list of leagus
- [x] Try out the API
- [x] Initialize composer
- [x] Install guzzle

## 17 April 2025
- [ ] Install [symfony console](https://symfony.com/doc/current/components/console.html#creating-a-console-application) with composer
- [ ] Read documentation on how to create and process command line arguments with symfony console
- [ ] API Key should be set from a file named `apikey.txt` with content is the API Key itself
      with no other information, only API Key.
- [ ] Handle command `php src/app.php leagues:list`. The result/response should print-out
      list of leagues.
- [ ] Handle command `php src/app.php leagues:seasons`. The result/response shoud print-out
      list of available seasons.

## Features
- Get list of leagues & and seasons
- Get list of teams and it's detail information for each teams
- Get player top scorer
- Get player top assists

## Refs:
- https://www.api-football.com/documentation-v3#tag/Standings/operation/get-standings

