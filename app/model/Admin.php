<?php

class Category
{
    // Khai báo thuộc tính
    // Code...
   public $category_id ;
   public $name;
}

class Product  {
    public $id;
    public $name;
    public $price;
    public $sale_price;
    public $image;
    public $quantity;
    public $short_description;
    public $category_id;
}

class User {
    public $id;
    public $userName;
    public $password;
    public $email;
    public $address;
    public $tel;
    public $image;
    public $role;
}

class Cart {
    public $id;         
    public $user_id;     
    public $items = []; 
    public $total_price;
}
?>