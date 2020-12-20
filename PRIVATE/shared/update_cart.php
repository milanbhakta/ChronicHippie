<?php
    require_once('../initialize.php');
    $mode=$edit_id=$edit_size="";
    if(isset($_POST['mode'])){
        $mode=sanitize($_POST['mode']);
    }
    if(isset($_POST['edit_size'])){
        $edit_size=sanitize($_POST['edit_size']);
    }
    if(isset($_POST['edit_id'])){
        $edit_id=sanitize($_POST['edit_id']);
    }
    

$cartQ=$db->query("SELECT * FROM cart where id='{$cart_id}'");
$result=mysqli_fetch_assoc($cartQ);
$items=json_decode($result['items'],true);

$updated_items=array();
$domian=(($_SERVER['HTTP_HOST']!='localhost')?'.'.$_SERVER['HTTP_HOST']:false);

if($mode=='removeone'){
    foreach($items as $item)
    {
        if($item['id']==$edit_id && $item['size']==$edit_size){
            $item['quantity']=$item['quantity']-1;
        }
        if($item['quantity']>0){
            $updated_items[]=$item;
        }

    }
}
if($mode=='addone'){
    foreach($items as $item)
    {
        if($item['id']==$edit_id && $item['size']==$edit_size){
            $item['quantity']=$item['quantity']+1;
        }
        
        $updated_items[]=$item;
        

    }
}

if(!empty($updated_items)){
    $json_updated=json_encode($updated_items);
    $db->query("UPDATE cart SET items='{$json_updated}' WHERE id='{$cart_id}'");
    $_SESSION['success_flash']='Your S!';
}
if(empty($updated_items)){
    //$db->query("DELETE from cart where id='{$cart_id}'");
    //setcookie("CART_COOKIE",'',1,"/",$domian,false);
}
?>