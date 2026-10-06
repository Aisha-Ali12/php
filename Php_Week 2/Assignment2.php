<?php
echo "
<style>

/* =========================
   GENERAL DESIGN
   ========================= */
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #eef2f7;
    margin: 0;
    padding: 30px;
    color: #222;
}

.container {
    max-width: 1200px;
    margin: auto;
}

h1 {
    background: linear-gradient(135deg, #1e3a5f, #2f6690);
    color: white;
    text-align: center;
    padding: 25px;
    border-radius: 12px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.15);
}

/* =========================
   QUESTION BOX
   ========================= */
.question-box {
    background: white;
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 30px;
    border-left: 6px solid #2f6690;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.question-title {
    background: #2f6690;
    color: white;
    padding: 14px 18px;
    border-radius: 8px;
    margin: -5px -5px 25px -5px;
    font-size: 22px;
}

/* =========================
   SUB QUESTIONS
   ========================= */
.section-box {
    background: #f8fafc;
    border: 1px solid #dce3ea;
    border-radius: 9px;
    padding: 15px 20px;
    margin: 15px 0;
}

h3 {
    color: #2f6690;
    margin-top: 0;
    font-size: 18px;
}

/* =========================
   TABLE DESIGN
   ========================= */
.table-box {
    overflow-x: auto;
    margin-top: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 8px;
    overflow: hidden;
}

th {
    background: #2f6690;
    color: white;
    padding: 12px;
    border: 1px solid #d5dce3;
}

td {
    padding: 12px;
    text-align: center;
    border: 1px solid #d5dce3;
}

tr:nth-child(even) {
    background: #f4f7fa;
}

tr:hover {
    background: #eaf2f8;
}

/* =========================
   RESULTS
   ========================= */
.result {
    background: #ffffff;
    border: 1px solid #dce3ea;
    padding: 10px 15px;
    border-radius: 7px;
    display: inline-block;
    margin-top: 5px;
}

.position {
    color: #1e3a5f;
    font-weight: bold;
}

/* =========================
   SEPARATOR
   ========================= */
hr {
    display: none;
}

/* =========================
   RESPONSIVE
   ========================= */
@media (max-width: 768px) {
    body {
        padding: 15px;
    }

    .question-box {
        padding: 15px;
    }

    h1 {
        font-size: 24px;
    }

    .question-title {
        font-size: 19px;
    }

    th, td {
        padding: 8px;
        font-size: 14px;
    }
}

</style>
";

echo "<div class='container'>";

echo "<h1>PHP ASSIGNMENT 2</h1>";

/* =========================================================
   QUESTION 1
   One Dimensional Array
   ========================================================= */

echo "<div class='question-box'>";
echo "<div class='question-title'>QUESTION 1</div>";

$array1 = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

// 1. Print all elements
echo "<div class='section-box'>";
echo "<h3>1. All Elements</h3>";

foreach ($array1 as $value) {
    echo $value . " ";
}

echo "</div>";

// 2. Total of all elements
$total1 = 0;

foreach ($array1 as $value) {
    $total1 += $value;
}

echo "<div class='section-box'>";
echo "<h3>2. Total of All Elements</h3>";
echo "<div class='result'>Total = $total1</div>";
echo "</div>";

// 3. Total of even elements
$even1 = 0;

foreach ($array1 as $value) {
    if ($value % 2 == 0) {
        $even1 += $value;
    }
}

echo "<div class='section-box'>";
echo "<h3>3. Total of Even Elements</h3>";
echo "<div class='result'>Even Total = $even1</div>";
echo "</div>";

// 4. Total of odd elements
$odd1 = 0;

foreach ($array1 as $value) {
    if ($value % 2 != 0) {
        $odd1 += $value;
    }
}

echo "<div class='section-box'>";
echo "<h3>4. Total of Odd Elements</h3>";
echo "<div class='result'>Odd Total = $odd1</div>";
echo "</div>";

// 5. Minimum and positions
$min1 = min($array1);

echo "<div class='section-box'>";
echo "<h3>5. Minimum Element and Positions</h3>";
echo "<div class='result'>";
echo "Minimum = $min1<br>";
echo "Positions: ";

foreach ($array1 as $index => $value) {
    if ($value == $min1) {
        echo "<span class='position'>[$index]</span> ";
    }
}

echo "</div>";
echo "</div>";

// 6. Maximum and positions
$max1 = max($array1);

echo "<div class='section-box'>";
echo "<h3>6. Maximum Element and Positions</h3>";
echo "<div class='result'>";
echo "Maximum = $max1<br>";
echo "Positions: ";

foreach ($array1 as $index => $value) {
    if ($value == $max1) {
        echo "<span class='position'>[$index]</span> ";
    }
}

echo "</div>";
echo "</div>";

echo "</div>";

/* =========================================================
   QUESTION 2
   Associative Two Dimensional Array
   ========================================================= */

echo "<div class='question-box'>";
echo "<div class='question-title'>QUESTION 2</div>";

$colors = [
    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],
    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],
    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]
];

echo "<div class='section-box'>";
echo "<h3>Color Table</h3>";

echo "<div class='table-box'>";
echo "<table>";

echo "<tr>";
echo "<th></th>";
echo "<th>Red</th>";
echo "<th>Green</th>";
echo "<th>Blue</th>";
echo "</tr>";

foreach ($colors as $rowName => $row) {

    echo "<tr>";

    echo "<th>$rowName</th>";

    foreach ($row as $value) {
        echo "<td>$value</td>";
    }

    echo "</tr>";
}

echo "</table>";
echo "</div>";

echo "</div>";
echo "</div>";

/* =========================================================
   QUESTION 3
   2D Square Array
   ========================================================= */

echo "<div class='question-box'>";
echo "<div class='question-title'>QUESTION 3</div>";

$array3 = [
    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]
];

// 1. Print all elements
echo "<div class='section-box'>";
echo "<h3>1. All Elements</h3>";

foreach ($array3 as $row) {

    foreach ($row as $value) {
        echo $value . " ";
    }

    echo "<br>";
}

echo "</div>";

// 2. Total of odd elements
$odd3 = 0;

foreach ($array3 as $row) {

    foreach ($row as $value) {

        if ($value % 2 != 0) {
            $odd3 += $value;
        }

    }
}

echo "<div class='section-box'>";
echo "<h3>2. Total of Odd Elements</h3>";
echo "<div class='result'>Odd Total = $odd3</div>";
echo "</div>";

// 3. Total of even elements
$even3 = 0;

foreach ($array3 as $row) {

    foreach ($row as $value) {

        if ($value % 2 == 0) {
            $even3 += $value;
        }

    }
}

echo "<div class='section-box'>";
echo "<h3>3. Total of Even Elements</h3>";
echo "<div class='result'>Even Total = $even3</div>";
echo "</div>";

// 4. Total of each row
echo "<div class='section-box'>";
echo "<h3>4. Total of Each Row</h3>";

for ($i = 0; $i < 3; $i++) {

    $rowTotal = 0;

    for ($j = 0; $j < 3; $j++) {
        $rowTotal += $array3[$i][$j];
    }

    echo "<div class='result'>Row " . ($i + 1) . " = $rowTotal</div><br>";
}

echo "</div>";

// 5. Total of each column
echo "<div class='section-box'>";
echo "<h3>5. Total of Each Column</h3>";

for ($j = 0; $j < 3; $j++) {

    $columnTotal = 0;

    for ($i = 0; $i < 3; $i++) {
        $columnTotal += $array3[$i][$j];
    }

    echo "<div class='result'>Column " . ($j + 1) . " = $columnTotal</div><br>";
}

echo "</div>";

// 6. Total of each diagonal
$diagonal1 = 0;
$diagonal2 = 0;

for ($i = 0; $i < 3; $i++) {

    $diagonal1 += $array3[$i][$i];
    $diagonal2 += $array3[$i][2 - $i];

}

echo "<div class='section-box'>";
echo "<h3>6. Total of Each Diagonal</h3>";

echo "<div class='result'>";
echo "Main Diagonal = $diagonal1<br>";
echo "Second Diagonal = $diagonal2";
echo "</div>";

echo "</div>";

// 7. Total of all elements
$total3 = 0;

foreach ($array3 as $row) {

    foreach ($row as $value) {
        $total3 += $value;
    }

}

echo "<div class='section-box'>";
echo "<h3>7. Total of All Elements</h3>";
echo "<div class='result'>Total = $total3</div>";
echo "</div>";

// 8. Minimum element and positions
$min3 = $array3[0][0];
$minPositions3 = [];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array3[$i][$j] < $min3) {

            $min3 = $array3[$i][$j];
            $minPositions3 = [[$i, $j]];

        } elseif ($array3[$i][$j] == $min3) {

            $minPositions3[] = [$i, $j];

        }

    }

}

echo "<div class='section-box'>";
echo "<h3>8. Minimum Element and Positions</h3>";

echo "<div class='result'>";
echo "Minimum = $min3<br>";
echo "Positions: ";

foreach ($minPositions3 as $position) {

    echo "<span class='position'>";
    echo "[" . $position[0] . "," . $position[1] . "] ";
    echo "</span>";

}

echo "</div>";
echo "</div>";

// 9. Maximum element and positions
$max3 = $array3[0][0];
$maxPositions3 = [];

for ($i = 0; $i < 3; $i++) {

    for ($j = 0; $j < 3; $j++) {

        if ($array3[$i][$j] > $max3) {

            $max3 = $array3[$i][$j];
            $maxPositions3 = [[$i, $j]];

        } elseif ($array3[$i][$j] == $max3) {

            $maxPositions3[] = [$i, $j];

        }

    }

}

echo "<div class='section-box'>";
echo "<h3>9. Maximum Element and Positions</h3>";

echo "<div class='result'>";
echo "Maximum = $max3<br>";
echo "Positions: ";

foreach ($maxPositions3 as $position) {

    echo "<span class='position'>";
    echo "[" . $position[0] . "," . $position[1] . "] ";
    echo "</span>";

}

echo "</div>";
echo "</div>";

// 10. Print array as table
echo "<div class='section-box'>";
echo "<h3>10. Array Table</h3>";

echo "<div class='table-box'>";
echo "<table>";

foreach ($array3 as $row) {

    echo "<tr>";

    foreach ($row as $value) {
        echo "<td>$value</td>";
    }

    echo "</tr>";
}

echo "</table>";
echo "</div>";

echo "</div>";

echo "</div>";

/* =========================================================
   QUESTION 4
   Associative Student Array
   ========================================================= */

echo "<div class='question-box'>";
echo "<div class='question-title'>QUESTION 4</div>";

$students = [
    [
        "ID" => "CA221",
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ],
    [
        "ID" => "CA223",
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ],
    [
        "ID" => "CA221",
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    ]
];

echo "<div class='section-box'>";
echo "<h3>Student Information</h3>";

echo "<div class='table-box'>";
echo "<table>";

echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Phone</th>";
echo "<th>Address</th>";
echo "</tr>";

foreach ($students as $student) {

    echo "<tr>";

    echo "<td>" . $student["ID"] . "</td>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Phone"] . "</td>";
    echo "<td>" . $student["Address"] . "</td>";

    echo "</tr>";
}

echo "</table>";
echo "</div>";

echo "</div>";
echo "</div>";

/* =========================================================
   QUESTION 5
   Student Transcript
   ========================================================= */

echo "<div class='question-box'>";
echo "<div class='question-title'>QUESTION 5</div>";

$transcript = [
    "Semester 1" => [
        "subject1" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],
        "subject2" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],
        "subject3" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]
    ],
    "Semester 2" => [
        "subject1" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ],
        "subject2" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],
        "subject3" => [
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]
    ]
];

echo "<div class='section-box'>";
echo "<h3>Student Transcript</h3>";

echo "<div class='table-box'>";
echo "<table>";

echo "<tr>";
echo "<th>Semester</th>";
echo "<th>Course</th>";
echo "<th>CW1</th>";
echo "<th>MidTerm</th>";
echo "<th>CW2</th>";
echo "<th>Final</th>";
echo "<th>Total</th>";
echo "<th>Status</th>";
echo "</tr>";

foreach ($transcript as $semester => $courses) {

    foreach ($courses as $course => $marks) {

        echo "<tr>";

        echo "<td>$semester</td>";
        echo "<td>$course</td>";
        echo "<td>" . $marks["CW1"] . "</td>";
        echo "<td>" . $marks["MidTerm"] . "</td>";
        echo "<td>" . $marks["CW2"] . "</td>";
        echo "<td>" . $marks["Final"] . "</td>";
        echo "<td>" . $marks["Total"] . "</td>";
        echo "<td>" . $marks["Status"] . "</td>";

        echo "</tr>";
    }
}

echo "</table>";
echo "</div>";

echo "</div>";

echo "</div>";

echo "</div>";

echo "</body></html>";
?>
