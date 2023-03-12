<?php

namespace chapter3;
define('YEAR', 2023);
class Calendar
{
    public $name;
    public $seasons = ['Summer', 'Winter', 'Autumn', 'Spring'];
    const MONTHS_IN_YEAR = 12;
    static $days_in_february = 28;
    static $count = 0;
    public $weeks_in_a_year = 365 / 7;
    public $year = YEAR;

    public function __construct()
    {
        self::$count++;
    }
    public function getMonthsInYear()
    {
        return self::MONTHS_IN_YEAR;
    }
}

$calendar = new Calendar();

$calendar2 = new Calendar();

$calendar->name = 'Year Planner';
print $calendar->name.PHP_EOL;
print Calendar::MONTHS_IN_YEAR.PHP_EOL;
Calendar::$days_in_february++;
print $calendar::$days_in_february.PHP_EOL;
//print Calendar::$days_in_february.PHP_EOL;

print Calendar::$count.PHP_EOL;

print_r($calendar->seasons).PHP_EOL;
print $calendar->weeks_in_a_year.PHP_EOL;
print $calendar->year.PHP_EOL;