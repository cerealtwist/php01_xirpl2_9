<!DOCTYPE html>
<head>
<title>Latihan PHP 3 - Array</title>
</head>
<body>
    <?php
    $data = [
        [
            "nama" => "Satria",
            "kelas" => "Rpl 1"
        ],
        [
            "nama" => "Arsyi",
            "kelas" => "Rpl 2"
        ],
        [
            "nama" => "Dhika",
            "kelas" => "Rpl 3"
        ],
        [
            "nama" => "Evan",
            "kelas" => "Rpl 4"
        ],
        [
            "nama" => "Fabian",
            "kelas" => "Rpl 5"
        ],
        [
            "nama" => "Irfan",
            "kelas" => "Rpl 6"
        ],
    ];

    echo "<pre>";
    print_r($data);
    echo "</pre>";

    foreach($data as $siswa){
        echo "<p>Nama : " . "<b>" . $siswa["nama"] . "</
        b>" . "Kelas : " . "<b>" . $siswa["kelas"] . "</
        b>" . "</p>";
    }
    ?>
</body>
</html>