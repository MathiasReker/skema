<?php

require_once __DIR__ . '/vendor/autoload.php';

use ICal\ICal;

\date_default_timezone_set('Europe/Copenhagen');

$ical = new ICal(__DIR__ . '/stud.kea.dk.ics', [
    'defaultSpan' => 0,
    'defaultTimeZone' => 'Europe/Copenhagen',
    'defaultWeekStart' => 'MO',
    'disableCharacterReplacement' => false,
    'filterDaysAfter' => null,
    'filterDaysBefore' => null,
    'skipRecurrence' => false,
]);

$array = \json_decode(\json_encode($ical), true);

$out = [];
for ($days = 0; $days <= (int) \implode('', \getopt('d:')); ++$days) {
    $today = \date('d-m-Y', \strtotime('+' . $days . ' day'));
    foreach ($array['cal']['VEVENT'] as $key) {
        if ($today === \date('d-m-Y', \strtotime($key['DTSTART_tz']))) {
            $out[] = [
                "\033[97mFag: \033[96m" . \substr($key['SUMMARY'], 0, \strpos($key['SUMMARY'], ' &lt;')),
                "\033[97mLokation: \033[96m" . $key['LOCATION'],
                "\033[97mStart: \033[96m" . \date('d-m-Y H:i:s', \strtotime($key['DTSTART_tz'])),
                "\033[97mSlut: \033[96m" . \date('d-m-Y H:i:s', \strtotime($key['DTEND_tz'])),
            ];
        }
    }
}

if (!empty($out)) {
    foreach ($out as $key => $part) {
        $sort[$key] = \strtotime($part[0]);
    }

    \array_multisort($sort, \SORT_ASC, $out);

    foreach ($out as $key) {
        echo \implode("\n", $key) . "\n\033[33m--\n\033[39m";
    }
}
