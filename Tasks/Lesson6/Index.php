<?php

// 1

$array = [19, 7, 4, 1];

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . "<br>";
}

//2

$days = [
    'Monday' => 1,
    'Tuesday' => 2,
    'Wednesday' => 3,
    'Thursday' => 4,
    'Friday' => 5,
    'Saturday' => 6,
    'Sunday' => 7,
];

echo $days['Wednesday'];

//3

$data = [
    [
        'name' => 'Joldas',
        'age' => 35,
        'job_title' => 'Direktor'
    ],
    [
        'name' => 'Juldiz',
        'age' => 28,
        'job_title' => 'Buxgalter'
    ],
    [
        'name' => 'Almat',
        'age' => 25,
        'job_title' => 'Oqitiwshi'
    ],
];

foreach ($data as $value) {
    echo "Ati - " . $value['name'] . " Jasi - " . $value['age'] . " kasibi - " . $value['job_title'] . "<br>";
}

//4

$array = [56, 72, 23, 91, 14, 38, 63, 8, 47, 55];
sort($array);
print_r($array);

//5

$products = [
    "Fruits" => ["Apple", "Banana", "Orange", "Pineapple", "Kiwi"],
    "Vegetables" => ["Potato", "Carrot", "Tomato", "Cucumber"],
    "Drink" => ["Tea", "Coffee", "Juice"]
];

//6

$data = [
    [
        'name' => 'Joldas',
        'fizika' => 80,
        'ximiya' => 75
    ],
    [
        'name' => 'Azamat',
        'fizika' => 60,
        'ximiya' => 85
    ],
    [
        'name' => 'Kamal',
        'fizika' => 90,
        'ximiya' => 65
    ],
];

$sub1 = 0;
$sub2 = 0;

foreach ($data as $value) {
    $sub1 += $value['fizika'];
    $sub2 += $value['ximiya'];
}

$sub1 = $sub1 / count($data);
$sub2 = $sub2 / count($data);

echo "Average physic - $sub1, chemistry - $sub2";

//7

$products = ['apple', 'banana', 'orange'];
$str1 = "$products[0], $products[1], $products[2]";
echo $str1;

//8

$splarray = new SplFixedArray(5);
$splarray[0] = 19;
$splarray[1] = 5;
$splarray[2] = 13;
$splarray[3] = 21;
$splarray[4] = 34;

for ($i = 0; $i < count($splarray); $i++) {
    echo $splarray[$i] . "<br>";
}

//9

$data = [
    'Uzbekistan' => 'Tashkent',
    'Azerbaijan' => 'Baku',
    'Belarus' => 'Minsk',
    'China' => 'Beijing',
    'Cuba' => 'Havana'
];

function capitalname(string $country): string {
    global $data;
    return isset($data[$country]) ? $data[$country] : "Unknown";
}

echo capitalname('Uzbekistan');

//10

$chess = [
    ['brook', 'bknight', 'bbishop', 'bqueen', 'bking', 'bbishop', 'bknight', 'brook'],
    ['bpawn', 'bpawn', 'bpawn', 'bpawn', 'bpawn', 'bpawn', 'bpawn', 'bpawn'],
    [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '],
    [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '],
    [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '],
    [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '],
    [' ', ' ', ' ', ' ', ' ', ' ', ' ', ' '],
    ['wpawn', 'wpawn', 'wpawn', 'wpawn', 'wpawn', 'wpawn', 'wpawn', 'wpawn'],
    ['wrook', 'wknight', 'wbishop', 'wqueen', 'wking', 'wbishop', 'wknight', 'wrook']
];

foreach ($chess as $value) {
    echo implode(' ', $value) . "\n";
}

//11

$data = [
    [
        'name' => 'Azamat',
        'point' =>   79
    ],
    [
        'name' => 'Polat',
        'point' =>   89
    ],
    [
        'name' => 'Marat',
        'point' =>   80
    ],
    [
        'name' => 'Allayar',
        'point' =>   76
    ],
    [
        'name' => 'Kamal',
        'point' =>   60
    ],
];

function maxstudent(array $data): string{
    $points = array_column($data, 'point');
    $index = array_search(max($points), $points);
    return $data[$index]['name'] . " - " . $data[$index]['point'] . " point";
}

echo maxstudent($data);

//12

$array = [
    'Kamal',
    'Lola',
    'Alpamis',
    'Hamza',
    'Yoldash'
];
sort($array);
print_r($array);

//13

$workers = [
    'Gozal' => ['04.12.2022', '05.07.2023', '16.03.2024'],
    'Dastan' => ['14.10.2021', '23.05.2022', '19.07.2023'],
    'Almaz' => ['20.11.2022', '15.11.2023', '26.12.2024'],
    'Farxad' => ['24.10.2022', '27.09.2023', '26.05.2024']
];

var_dump($workers);

//14

$data = [11, 53, 23, 41, 32, 12, 8, 35, 90, 80];

foreach ($data as $value) {
    if($value % 2 == 0){
        echo $value . "\n";
    }
}

//15

$months = [
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
];

echo "Days in February: " . $months["February"];

//16

$schedule = [
    "Monday" => [
        "08:00 - 09:30" => "Mathematics",
        "12:00 - 13:30"=> "History",
        "14:00 - 15:30" => "Physics",
        "10:00 - 11:30" => "English",
],
    "Tuesday" => [
        "08:00 - 09:30" => "Biology",
        "12:00 - 13:30"=> "History",
        "14:00 - 15:30" => "Literature",
    ],
    "Wednesday" => [
        "08:00 - 09:30" => "Mathematics",
        "10:00 - 11:30" => "English",
    ],
    "Thursday" => [
        "08:00 - 09:30" => "Geography",
        "10:00 - 11:30" => "English",
    ],
    "Friday" => [
        "08:00 - 09:30" => "Mathematics",
        "12:00 - 13:30"=> "History",
    ]
];
echo "Monday : " . "\n";
print_r($schedule['Monday']);

//17

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function summa(array $data): int {
    $s = 0;
    foreach ($data as $val){
        $s += $val;
    }
    return $s;
}

echo summa($data);

//18

$data = [
    [
        'name' => 'Computer Science',
        'autor' => 'Kevin A',
        'year' => 2018
    ],

    [
        'name' => 'Mathematics',
        'autor' => 'Lucas S',
        'year' => 2008
    ],

    [
        'name' => 'Geography and Astronomy',
        'autor' => 'Patric L',
        'year' => 2020
    ],

    [
        'name' => 'Biology',
        'autor' => 'Loral B',
        'year' => 2010
    ]
];

function findyear($year): array
{
    global $data;
    return array_filter($data, function ($item) use ($year){
        return $item["year"] > $year;
    });
}
print_r(findyear(2010));

//19

$data = [
    [
        'team' => 'Tigers',
        'country' => 'United States',
        'players' => ['P1', 'P2', 'P3', 'P4', 'P5', 'P6', 'P7', 'P8'],
    ],
    [
        'team' => 'Bears',
        'country' => 'Russia',
        'players' => ['S1', 'S2', 'S3', 'S4', 'S5', 'S6', 'S7', 'S8'],
    ],
    [
        'team' => 'Kings',
        'country' => 'Cuba',
        'players' => ['F1', 'F2', 'F3', 'F4', 'F5', 'F6', 'F7', 'F8'],
    ],
];

foreach ($data as $val) {
    echo $val['team'] . " " . $val['country'] . " : " . implode(", ", $val["players"]) . "\n";
}

//20

$array = ['A', 'B', 'C', 'A', 'C', 'D'];
$arrayun = array_unique($array);
print_r($arrayun);