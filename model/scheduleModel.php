<?php 

function addSchedule($schedule){
    $data = file_get_contents('../data/schedules.json');
    $schedules = json_decode($data, true);
    
    $schedules[] = $schedule;
    
    file_put_contents('../data/schedules.json', json_encode($schedules, JSON_PRETTY_PRINT));
}

function getAllSchedules()
{
    $existingdata = file_get_contents("../data/schedules.json");
    $phpdata = json_decode($existingdata, true);
    return $phpdata;
}


function removeSchedule($id)
{
    $existingdata = file_get_contents("../data/schedules.json");
    $phpdata = json_decode($existingdata, true);


    for ($i = 0; $i < count($phpdata); $i++) {
        if ($phpdata[$i]["id"] == $id) {

            unset($phpdata[$i]);
        }
    }

    file_put_contents('../data/schedules.json', json_encode($phpdata, JSON_PRETTY_PRINT));

}
?>