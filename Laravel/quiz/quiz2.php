<?php


function perolehan_medali($array)
{

    $idemas = 0;
    $idperak = 0;
    $idperunggu = 0;

    $inemas = 0;
    $inperak = 0;
    $inperunggu = 0;

    $kremas = 0;
    $krperak = 0;
    $krperunggu = 0;


    for ($i=0; $i < count($array); $i++) { 
        if ($array[$i][0] == "Indonesia") {
            if ($array[$i][1] == "emas") {
                $idemas++;
            }elseif($array[$i][1] == "perak") {
                $idperak++;
            }elseif($array[$i][1] == "perunggu") {
                $idperunggu++;
            }
        }elseif($array[$i][0] == "India") {
            if ($array[$i][1] == "emas") {
                $inemas++;
            }elseif($array[$i][1] == "perak") {
                $inperak++;
            }elseif($array[$i][1] == "perunggu") {
                $inperunggu++;
            }
        }elseif($array[$i][0] == "Korea Selatan") {
            if ($array[$i][1] == "emas") {
                $kremas++;
            }elseif($array[$i][1] == "perak") {
                $krperak++;
            }elseif($array[$i][1] == "perunggu") {
                $krperunggu++;
            }
        }
        

    }


    return array(
        array(
            "Negara" => "Indonesia",
            "emas" => $idemas,
            "perak" => $idperak,
            "perunggu" => $idperunggu
        ),
        array(
            "Negara" => "India",
            "emas" => $inemas,
            "perak" => $inperak,
            "perunggu" => $inperunggu
        ),
        array(
            "Negara" => "Korea Selatan",
            "emas" => $kremas,
            "perak" => $krperak,
            "perunggu" => $krperunggu
        )

        );
}


$input = array(
                array('Indonesia', 'emas'),
                array('India', 'perak'),
                array('Korea Selatan', 'emas'),
                array('India', 'perak'),
                array('India', 'emas'),
                array('Indonesia', 'perak'),
                array('Indonesia', 'emas')

);

print_r (perolehan_medali($input));



?>