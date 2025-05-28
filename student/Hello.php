<?php
function add($a, $b) {
    return $a + $b;
}

$result = add(100000000000000000000, 150000000000000000000000000000); 
echo "លទ្ធផល: $result"; // បង្ហាញ: លទ្ធផល: 8

// function ដែលត្រឡប់ results ច្រើន
function getMinMax($numbers) { 
    return [
        'min' => min($numbers),
        'max' => max($numbers)
    ];
} 
$numbers = [150000000000,200000000000,3000000000000000,400000000000,100000000000000000];
$result = getMinMax($numbers);
echo "តម្លៃអប្បបរមា: " . $result['min'] . ", តម្លៃអតិបរមា: " . $result['max'];
// បង្ហាញ: តម្លៃអប្បបរមា: 5, តម្លៃអតិបរមា: 25
?>