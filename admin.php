<?php

include 'config.php';
include 'style.php';
include 'navbar.php';

$getname = $_GET['name'];
$pwd = $_GET['pwd'];

echo '<html><head><title>Sign in Page</title></head>
<body>   
<div style="background-color:darkblue;width:100%;height:70px;"></div>
<div class="container-fluid">';


echo '<div class="row justify-content-md-center">
<div class="col-lg-12">
    <div class="panel">

    <div class="panel-body"><br>
    <table class="table rcorners" style="font-size:10px"><thead><tr class="bg-success text-white"><th>Name</th><th>E-Mail</th>
	<th>Subject</th><th>message</th><th>time</th></tr></thead><tbody>';


    echo "<tr class='bg-info text-white'><th colspan='9'>
    <b>Latest Messages</b></th></tr>";

if($getname == "apkchanlee" && $pwd == "chans555"){
    
    
$name = "";
    $get_class = $dbConn->query("SELECT  * FROM messages ORDER BY sno DESC");
        while($row = $get_class->fetch(PDO::FETCH_ASSOC)) {

            $name = $row['name'];
            $email = $row['email'];
            $subject = $row['subject'];
            $text = $row['text'];
            $time = $row['time'];

        
        echo '
        <tr><td>'.$name.'</td><td>'.$email.'</td><td>'.$subject.'</td><td>'.$text.'</td><td>'.$time.'</td>';

    }
    if($name == ""){
        echo "<tr class='bg-warning text-white'><th colspan='5'> No Data Found </th></tr>";
    }
}
else{
    
    echo "<tr class='bg-danger text-white'><th colspan='7'>
    <b>Your Username or Password is incorrect.</b></th></tr>";
}

    echo '
    </tbody></table>
</div>
</div>
</div>
</div></div></body></html>';

?>