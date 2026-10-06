<?php

$students = array(
    "CA221" => array(
        "Name" => "Ahmed Ali Hassan",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax Wardhigley"
    ),

    "CA223" => array(
        "Name" => "Hassan Ali Ahmed",
        "Phone" => "0647223201",
        "Address" => "Taleea, Hodan"
    ),

    "CA224" => array(
        "Name" => "Aisha Abdi",
        "Phone" => "0646990276",
        "Address" => "Adan Macmacaanka Dharkeynley"
    )
);

echo "<table border='1' cellpadding='8'>";

echo "<tr>";
echo "<th>Student</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $student => $data) {
    echo "<tr>";
    echo "<td>$student</td>";
    echo "<td>{$data['Name']}</td>";
    echo "<td>{$data['Phone']}</td>";
    echo "<td>{$data['Address']}</td>";
    echo "</tr>";
}

echo "</table>";

?>
