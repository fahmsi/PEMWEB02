 <?php
$profileArray = [
    "nama" => "Ahmad",
     "semester" => 2
];

echo $profileArray['nama']. "<br>";
echo $profileArray['semester']. "<br>";

$profileMultiArray = [
    [
        "nama" => "ahmad",
        "semester" => 2
    ],
    [
        "nama" => "dilan",
        "semester" => 3
    ]
];

foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}