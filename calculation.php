<html>
<body>
<?php 
    $i = $P = $n = $A = $x = ""; 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $i = $_POST["iRate"];
        $P = $_POST["lAmount"];
        $n = $_POST["lTerm"];
    }
    
    $x = pow((1 + $i), $n);
    $A = ($i*$P*$x)/($x - 1);
    
    echo "The loan amount is $" . $A . " per month"; 
?>
     

</body>
</html>