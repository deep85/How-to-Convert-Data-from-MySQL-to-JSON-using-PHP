<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php
include_once('config.php');
    //fetch table rows from mysql db
    $results =$mysqli->query("select * from tbl_employee");
	//create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($results))
    {
        $emparray[] = $row;
    } 
	echo json_encode($emparray);   
?>

<!--If you want to write the data from mysql to json file, use this piece of code at the end instead of 'echo' statement.-->
<?php
//    //write to json file
//    $fp = fopen('empdata.json', 'w');
//    fwrite($fp, json_encode($emparray));
//    fclose($fp);
//?>

</body>
</html>