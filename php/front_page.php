<?php
require_once('functions.php');
$product_search = false;

if(isset($_POST['product_search'])){
    $product_name = $_POST['product_name'];
    $product_search = true;
    if(!empty($product_name)){
        $sql = "SELECT * FROM product WHERE product_name LIKE '%$product_name%'";
        if($result = $db->query($sql)){

            if(mysqli_num_rows($result)>1){
                // result will fetch in main front page
                } else {
                    $product_search =false;
                    $_SESSION['msg_wrn'] = 'Sorry ' . $product_name .' not Available!';
                    header('location: ./front_page.php');
                    exit();
                }
        }
    } else {
        $product_search =false;
        $_SESSION['msg_wrn'] = 'What R U You Looking?';
        header('location: ./front_page.php');
        exit();
    }
    

} 