<?php
$conn=new mysqli("sql212.epizy.com","epiz_22324478","VTAcapcse","epiz_22324478_workershub");
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}
?>