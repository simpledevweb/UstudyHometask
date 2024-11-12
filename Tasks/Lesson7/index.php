<?php

//Задачи для углубленного понимания работы с массивами в PHP.
//1

$data = [
    [
        'name' => 'Worker 1',
        'age' => 24,
        'section' => 'Section 1',
        'salary' => 500  // 500$
    ],
    [
        'name' => 'Worker 2',
        'age' => 26,
        'section' => 'Section 2',
        'salary' => 600
    ],
    [
        'name' => 'Worker 3',
        'age' => 30,
        'section' => 'Section 3',
        'salary' => 650
    ],
    [
        'name' => 'Worker 4',
        'age' => 34,
        'section' => 'Section 3',
        'salary' => 400
    ],
    [
        'name' => 'Worker 5',
        'age' => 31,
        'section' => 'Section 2',
        'salary' => 450
    ],
    [
        'name' => 'Worker 6',
        'age' => 28,
        'section' => 'Section 1',
        'salary' => 800
    ],
    [
        'name' => 'Worker 7',
        'age' => 22,
        'section' => 'Section 2',
        'salary' => 680
    ],
];

function groupbysection(array $data) : array
{
    $group = array_reduce($data, function ($carry, $item) {
       $carry[$item['section']][] = $item;
        return $carry;
    });
    foreach ($group as $section => $items) {
        usort($group[$section], function ($a, $b) {
            return $b['salary'] <=> $a['salary'];
        });
    }
    return $group;
}
print_r(groupbysection($data));

//2

$country = ['USA', 'Uzbekistan', 'Russia', 'Turkey', 'Portugal'];
$population = [200000, 120000, 150000, 250000, 300000];

function combinearrays(array $data1, array $data2)
{
    if(count($data1) != count($data2)) {
        return "Error : Array's elements are not equal";
    }
        return array_combine($data1, $data2);
}

$data = combinearrays($country, $population);
print_r($data);

$limit = 200000;
$data2 = array_filter($data, function ($item) use ($limit) {
    return $item > $limit;
});
print_r($data2);

//3

$data = [
    'Notebooks' =>[
        [
            'name' => 'HP Spectre x360',
            'price' => 1500,
            'quantity' => 10
        ],
        [
            'name' => 'Apple MacBook Pro',
            'price' => 2500,
            'quantity' => 5
        ],
        [
            'name' => 'Dell XPS 13',
            'price' => 1300,
            'quantity' => 8
        ]
    ],
    'Phones' =>[
        [
            'name' => 'iPhone 15',
            'price' => 999,
            'quantity' => 15,
        ],
        [
            'name' => 'Samsung Galaxy S23',
            'price' => 850,
            'quantity' => 20
        ],
        [
            'name' => 'Google Pixel 8',
            'price' => 700,
            'quantity' => 10
        ]
    ],
    'Headphones' =>[
        [
            'name' => 'Sony WH-1000XM5',
            'price' => 350,
            'quantity' => 25
        ],
        [
            'name' => 'Bose QuietComfort 45',
            'price' => 330,
            'quantity' => 15
        ],
        [
            'name' => 'Apple AirPods Pro 2',
            'price' => 250,
            'quantity' => 30
        ]
    ]
];

function getbycategory(string $category, array $data) : array
{
    $data = $data[$category];
    usort($data, function ($a, $b) {
        return $a['price'] <=> $b['price'];
    });
    return $data;
}
$newdata = getbycategory("Notebooks",$data);
echo "Notebooks : \n";
print_r($newdata);


function limitproduct(int $limit, array $data) : array
{
    foreach ($data as $key => $item) {
        $data1[$key] = array_filter($data[$key], function($product) use ($limit) {
            return $product['quantity'] >= $limit;
        });
    }
    return  $data1;

}
$newdata2 = limitproduct(10, $data);
echo "Products that more than 10 : \n";
print_r($newdata2);

//5

$data = [
    ["Notebooks", "Phones", "Headphones"],
    ["Notebooks", "Headphones   "],
    ["Phones", "Notebooks"],
    ["Tablets", "Notebooks"],
    ["Tablets", "Notebooks", "Phones"],
    ["Phones", "Headphones"]
];

function getTopCategories($data)
{
    $categoryCount = [];

    foreach ($data as $userCategories) {
        foreach ($userCategories as $category) {
            if (isset($categoryCount[$category])) {
                $categoryCount[$category]++;
            } else {
                $categoryCount[$category] = 1;
            }
        }
    }

    arsort($categoryCount);

    return array_slice($categoryCount, 0, 3, true);
}

$topCategories = getTopCategories($data);

echo "Three top categories :\n";
print_r($topCategories);




//1

function factorial($n)
{

    if ($n == 0) {
        return 1;
    }

    return $n * factorial($n - 1);
}

echo factorial(5);

//2

function isPalindrome($string) {

    $string = strtolower($string);

    return $string === strrev($string);
}

var_dump(isPalindrome("Alla"));

//3


function gcd($a, $b)
{
    // Evklid Algo
    while ($b != 0) {
        $c = $b;
        $b = $a % $b;
        $a = $c;
    }

    return $a;
}

echo gcd(54, 24);

//4


function average($array)
{
    if (empty($array)) {
        return null;
    }

    $summa = array_sum($array);

    $count = count($array);

    return $summa / $count;
}

$array = [10, 20, 30, 40, 50];
echo average($array);


//5


function Fahrenheit($cels) {
    return $cels * 9 / 5 + 32;
}

echo Fahrenheit(0);
echo Fahrenheit(20);


