<?php 
include_once 'dbconnect.php';
class dbqueries(){
 
function setUser($username,$email, $password, $firstname, $lastname, $access){
    $result=mysql_query("INSERT into users (username,email, password, firstname, lastname, access)
            VALUES ('$username', '$email', '$password','$firstname', '$lastname', $access)";
    $arr = mysql_fetch_array($result);
    return $arr;
}
 
/*function getUserByName(){
    $query="SELECT * FROM users
            WHERE username='$username'";
    $result=mysql_query($query);
    return $result;
}
function setCategory(){
    $query="INSERT into category(category_name, category_description)
        VALUES ($category_name, $category_description)";
    $result=mysql_query($query);
    return $result;
}

function getCategory (){
    $query="SELECT * FROM Category
            WHERE category_name='$category_name'";
    $result=mysql_query($query);
    return $result;
}

function setProduct(){
    $query="INSERT into Product(product_name,mfd,price,description)
        VALUES ('$product_name', '$product_name',$mfd,$price,'$description')";
    $result=mysql_query($query);
    return $result;
}

function getProduct(){
    $query="SELECT * FROM Product
            WHERE product_name='$product_name'";
    $result=mysql_query($query);
    return $result;
}
*/


}
?>