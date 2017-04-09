<?php

/*INSERT INTO THE CUSTOMER TABLE*/

$query = "INSERT INTO Customer (name, address, email, phone) VALUES(?,?,?,?)";

/*Customer Insert*/ 
$cInsert = $conn->prepare($query);
/*Which varibale should be binded to the statement*/
$cInsert->bind_param("ssss", $name, $adress, $email, $phone);



/*INSERT INTO THE PROVIDER TABLE*/
$query = "INSERT INTO Customer (name, email, phone) VALUES(?,?,?)";
/*Provider Insert*/ 
$pInsert = $conn->prepare($query);
/*Which varibale should be binded to the statement*/
$pInsert->bind_param("sss", $name, $email, $phone);

/*SELECT statement Customer id based on name*/
$query = "SELECT id from Customer where name =?";
$cSelect = $conn->prepare($query);
$cSelect->bind_param("s", $name);

/*INSERT SERVICE ORDER*/
$query = "INSERT INTO BookOrder(cid,sid) VALUES (?,?)";
$orderInsert = $conn->prepare($query);
$orderInsert->bind_param("ss", $cid, $sid);


$query = "INSERT INTO ServiceItem(name, description, categoryId, price) VALUES (?,?,?,?)";
$cookieInsert = $conn->prepare($query);
$cookieInsert->bind_param("isii", $name, $description, $categoryId, $price);

?>


/*