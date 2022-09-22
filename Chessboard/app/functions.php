<?php
for ($row=1; $row<=8;$row++) {
    echo "<tr>";
    for ($colum=1;$colum<=8;$colum++) {
        $total=$row+$colum;
        if ($total%2==0) {
            echo "<td class='white'></td>";
        } else {
            echo "<td class='black'></td>";
        }
    } echo "</tr>";
}
?>