<?php

$errors = [];

require "data/userdata.php";

function getAllData()
{
    global $data;
    if (isset($data)) {
        return $data;
    } else {
        return null;
    }
}

function printAllData($allData){
    foreach ($allData as $singleData) {

        echo "<tr>";
        echo "<td> <a style='text-decoration: none' href='details.php?id=" . $singleData['id'] . "'>" . $singleData['firstname'] . " ". $singleData['lastname'] . "</a></td>";
        echo "<td>" . $singleData['email'] . "</td>";
        echo "<td>" . date("d.m.Y", strtotime($singleData['birthdate']))  . "</td>";
        echo "</tr>";
    }
}


function getDataPerId($id)
{
    foreach (getAllData() as $data) {
        if($id==$data['id']){

            $dataPerId = array("firstname"=>$data['firstname'],

                "lastname"=>$data['lastname'],
                "birthdate"=>$data['birthdate'],
                "email"=>$data['email'],
                "phone"=>$data['phone'],
                "street"=>$data['street']);
        }
    }
    return $dataPerId;
}

function getFilteredData($filter)
{
    $filterData = [];


        foreach (getAllData() as $data) {
            $foundFirstname = strpos($data['firstname'], $filter);
            $foundLastname = strpos($data['lastname'], $filter);
            $foundEmail =  strpos($data['email'], $filter);
            if ($foundFirstname !== false | $foundLastname !== false | $foundEmail !== false ) {
                $filterData[] = $data;
            }
        }

    return $filterData;
}
