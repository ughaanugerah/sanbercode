<?php
function ubah_huruf($string){
    $newString = '';
    for ($i=0; $i < strlen($string); $i++) { 
        $secondString = $string[$i];
        $secondString++;
        $newString = $newString.$secondString;
    }

    return $newString;

}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu