convertDate = ($date) => {
    $date = "2020-06-01";
    $newDate = date("F jS, Y", strtotime($date));
    return $newDate;
}
echo convertDate($date);