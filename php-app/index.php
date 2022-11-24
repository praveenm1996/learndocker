<?php  
    echo "Hello, Meena CA"; 

$mysqli = new mysqli("db","root","example","company1");
$sql = "INSERT INTO users1 (name, emailid) VALUES('userer1 ','userer1@Google.com')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users1 (name, emailid) VALUES('userer1 ','userer1@Google.com')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users1 (name, emailid) VALUES('userer1 ','userer1@Google.com')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users1 (name, emailid) VALUES('userer1 ','userer1@Google.com')";
$result = $mysqli->query($sql);

$sql = 'SELECT * FROM users1';

if ($result = $mysqli->query($sql)){
    while($data = $result->fetch_assoc()){
        echo '<br>';
        echo $data['name'];
    }
}


?>  