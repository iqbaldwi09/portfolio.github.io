<?php
$array = [790, 483, 281, 224, 198, 60, 698, 400, 709, 168];

// Fungsi QuickSort untuk mengurutkan array
function quicksort($array) {
    if (count($array) < 2) {
        return $array;
    }

    $left = $right = [];
    reset($array);
    $pivot_key = key($array);
    $pivot = array_shift($array);

    foreach ($array as $k => $v) {
        if ($v < $pivot)
            $left[$k] = $v;
        else
            $right[$k] = $v;
    }

    return array_merge(quicksort($left), [$pivot_key => $pivot], quicksort($right));
}

$sortedArray = quicksort($array);

// Menampilkan angka terkecil
echo "Angka terkecil: " . $sortedArray[0] . "<br>";

// Menghitung rata-rata
$n = count($sortedArray);
$sum = array_reduce($sortedArray, function ($carry, $item) {
    return $carry + $item;
});
$average = $sum / $n;
echo "Rata-rata: " . $average . "<br>";
?>
