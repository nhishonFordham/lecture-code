<?php

namespace app\controllers;

class TimeController
{
    public function dateTimesView() {
        $title = 'Date and Times ';

        //date converts unix timestamps into human readable formats
//        $dateFormat = date("l F j y");
//        $dateTime = date("l F j y g:i a");
//        echo $dateFormat;
//        echo $dateTime;


        //returns the current date as unix
//        echo time();

        //converts a string to a unix time
        $stringToTime = strtotime("10:30pm April 15 2014");
//        echo $stringToTime;

        $backToReadable = date("l F j y g:i a", $stringToTime);
//        echo $backToReadable;


        //date time objects
        $date = new \DateTime('2001-02-01 15:01:05');
//        $date = new \DateTime();
//        echo $date->getTimestamp();

        //create from format
//        $formatDate = date_create_from_format('j-M-Y', '15-Jan-2020');
//        echo $formatDate;

        //output to a format
//        $formattedDate = $date->format('Y/m/d H:i');
//        echo $formattedDate;

        //update datetime
//        $tomorrow = $date->modify('+1 day');
//        echo $tomorrow->format('Y-m-d H:i');


        //date timezone
        //https://www.php.net/manual/en/timezones.php
        $tzChicago = new \DateTimeZone('America/Chicago');
        $chicagoTime = new \DateTime('now', $tzChicago);
        echo $chicagoTime->format('Y-m-d H:i e');

        include './assets/views/images/datesTimesView.php';
        exit();
    }

}