<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <h1>Berlatih Array</h1>
        
    <?php 
        echo "<h3> Soal 1 </h3>";
        /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
        $kids = array("Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"); // Lengkapi di sini
        print_r($kids);
        $adults = array("Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"); 
        print_r($adults);
        echo "<h3> Soal 2</h3>";
        /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */

        $totalKids = count($kids);
        echo "Cast Stranger Things: ";
        echo "<br>";
        echo "Total Kids: $totalKids" ; // Berapa panjang array kids
        echo "<br>";
        echo "<ol>"; 
        echo "<li> $kids[0] </li>";
        // Lanjutkan

        for ($i=1; $i < $totalKids; $i++) { 
            echo "<li> $kids[$i] </li>";
        }

        echo "</ol>";
        
        $totalAdult = count($adults);
        echo "Total Adults: " ;// Berapa panjang array adults
        echo "<br>";
        echo "<ol>";
        echo "<li> $adults[0] </li>";
        // Lanjutkan
        for ($i=0; $i < $totalAdult; $i++) { 
            echo "<li> $adults[$i] </li>";
        }
        echo "</ol>";

        /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */

        $array3 = array(
            array(
                "Name" => "Will Byers",
                "Age" => 12,
                "Aliases" => "Will the Wise",
                "Status" => "Alive",
            ),

            array(
                "Name" => "Mike Wheeler",
                "Age" => 12,
                "Aliases" => "Dungeon Master",
                "Status" => "Alive",
            ),

            array(
                "Name"=> "Jim Hopper",
                "Age"=> 43,
                "Aliases"=> "Chief Hopper",
                "Status"=> "Deceased",
            ),
            
            array(
                "Name"=> "Eleven",
                "Age"=> 12,
                "Aliases"=> "El",
                "Status"=> "Alive",
            ),
        );

        print_r($array3);
        
    ?>
</body>
</html>