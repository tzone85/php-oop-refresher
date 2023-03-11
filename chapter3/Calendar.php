<?php

namespace chapter3;
define('YEAR', 2023);
define('MONTHS_IN_YEAR', 12);
class Calendar
{
    public string $name;
    public array $seasons = ['Summer', 'Winter', 'Autumn', 'Spring'];
    public int $months_in_year= MONTHS_IN_YEAR;
    static int $days_in_february = 28;
    static $count = 0;
    public ?float $weeks_in_a_year = 365 / 7;
    public ?int $year = YEAR;

    public function __construct()
    {
        self::$count++;
    }
    public function getMonthsInYear(): ?int
    {
        return $this->months_in_year;
    }
}

$calendar = new Calendar();

$calendar2 = new Calendar();

$calendar->name = 'Year Planner';
print $calendar->name.PHP_EOL;
print $calendar->getMonthsInYear().PHP_EOL;
//print Calendar::MONTHS_IN_YEAR.PHP_EOL;
Calendar::$days_in_february++;
print $calendar::$days_in_february.PHP_EOL;
//print Calendar::$days_in_february.PHP_EOL;

print Calendar::$count.PHP_EOL;

print_r($calendar->seasons, true).PHP_EOL;
print $calendar->weeks_in_a_year.PHP_EOL;
print $calendar->year.PHP_EOL;