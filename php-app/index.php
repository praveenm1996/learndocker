<?php  
    echo "Hello, Meena CA"; 

$mysqli = new mysqli("db","root","example","company1");
$sql = "INSERT INTO users (name, emailid) VALUES('Praveen M','Praveen.m@Google.com')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, emailid) VALUES('Meena M','Meena.m@Google.com')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, emailid) VALUES('Radhika M','Radhika.m@Google.com')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO users (name, emailid) VALUES('Muthu M','Muthu.m@Google.com')";
$result = $mysqli->query($sql);

$sql = 'SELECT * FROM users';

if ($result = $mysqli->query($sql)){
    while($data = $result->fetch_assoc()){
        echo '<br>';
        echo $data['name'];
    }
}


?>  