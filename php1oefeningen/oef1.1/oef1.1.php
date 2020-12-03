<?php
$student =	array(
    "voornaam" =>  "Jan",
    "naam" =>  "Janssens",

    "straat" =>  "Oude baan",
    "huisnr" =>  "22",
    "postcode" =>  2800,
    "gemeente" =>  "Mechelen",
    "geboortedatum" =>  "14/05/1991",
    "telefoon" =>  "015 24 24 26",
    "e-mail" =>  "jan.janssens@gmail.com"
);
function add_label($label,$word) {
    strval($word);
    return "<".ucfirst($label).">".$word."</".ucfirst($label).">";
}
function add_label_and_capitalize($label,$word) {
    strval($word);
    return "<".ucfirst($label).">".ucfirst($word)."</".ucfirst($label).">";
}

function StudentToTable(){
    echo add_label("h1","Student");
    global $student;
    echo "<Table>";
    foreach ($student as $x => $val){
        ucfirst($x);
        $a = add_label_and_capitalize("td",$x);
        $b = add_label("td",$val);
        echo add_label("tr", $a.$b);
 }

}
StudentToTable();
function studenttable($studenten)
{
    echo "<h1>Student</h1>";
    echo "<table>";
    foreach($studenten as $a => $x) {
        $a = ucfirst($a);
        echo "<tr><td>$a</td> = <td>$x</td></tr>";
    }
}

studenttable($student)
?>
