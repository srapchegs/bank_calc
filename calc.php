<?php
$summAdd = $_POST["second_text"];
$percent = 0.1;
$summN = floatval($_POST["first_text"]);
$years = intval($_POST["list"]);
$date = DateTime::createFromFormat('m/d/Y', $_POST["date"]);
$date2 = clone $date;
$interval = new DateInterval('P1Y');
$date2->add($interval);
$diff = $date2->diff($date);
$daysDifference = $diff->days;

$radioButton = $_POST["radio"];
$summAdd = ($radioButton == 'Yes') ? $summAdd : 0;
for ($currYear = 0; $currYear < $years; $currYear++) {
    $currentYear = $date->format('Y');
    for ($month = 1; $month <= 12; $month++) {
        $daysN = cal_days_in_month(CAL_GREGORIAN, $month, $currentYear);
        $summN += ($summN + $summAdd) * (($daysN * $percent) / $daysDifference);
    }
}
$result = array('res' => (round(($summN + ($years * 12 * $summAdd)),2)) . " руб.");
echo json_encode($result);
?>
