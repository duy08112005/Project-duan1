<?php
class Query
{
    // Khai báo thuộc tính
    public $pdo;

    // Khai báo phương thức
    public function __construct()
    {
        try {
            // 1. Kết nối CSDL
            // Code...
            $this->pdo = new PDO("mysql:host=localhost;port=3306;dbname=duan1_nhom11", "root", "");
           
           
        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi kết nối CSDL: " . $error->getMessage();
            echo "</h1>";
        }
    }
    public function __destruct()
    {
        // Đóng kết nối với CSDL
        // Code...
    }


    public function all()
    {
        // Khai báo try catch
        try {
            // 1. Khai báo câu sql
            // Code...
            $sql = "SELECT * FROM duan1_nhom11.categories order by category_id desc";

            // 2. Thực hiện truy vấn
            // Code...
            $data = $this->pdo->query($sql)->fetchAll();

            // 3. Convert array data sang object data
            // Code...
            $listCategory = [];
           foreach($data as $value){
              $category = new Category();
              $category->category_id = $value['category_id'];
              $category->name = $value['name'];
              array_push($listCategory,$category);
   
           }


            // 4. Return kết quả
            // Code...
             return $listCategory;
        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm all trong model: " . $error->getMessage();
            echo "</h1>";
        }
    } // END function all()
   public function insert(Category $category){
    try{
       $sql = "INSERT INTO `categories`(`category_id`, `name`) VALUES (null,'$category->name')";
       $data = $this->pdo->exec($sql);
       if($data===1){
        return "success";
       }
    }catch (Exception $error) {
        echo "<h1>";
        echo "Lỗi hàm insert trong model: " . $error->getMessage();
        echo "</h1>";
    }
   }
   public function delete($id){
    try{
        $sql = "DELETE FROM duan1_nhom11.categories where category_id =$id";
        $data = $this->pdo->exec($sql);
        if($data === 1){
            return "success";
        }

    }catch (Exception $error) {
        echo "<h1>";
        echo "Lỗi hàm insert trong model: " . $error->getMessage();
        echo "</h1>";
    }
   }
   public function find($id){
    try{
      $sql = "SELECT * FROM duan1_nhom11.categories where category_id =$id";
      $data = $this->pdo->query($sql)->fetch();
      if($data!==""){
       $category = new Category();
       
       $category->name = $data['name'];
       return $category;

      }else{ 
        echo"Không tìm thấy dữ liệu";
      }
    }catch (Exception $error) {
        echo "<h1>";
        echo "Lỗi hàm find trong model: " . $error->getMessage();
        echo "</h1>";
    }
   }
   public function update($id,Category $category){
    try{
        $sql ="UPDATE duan1_nhom11.categories SET name='$category->name' WHERE category_id=$id";
        $data = $this->pdo->exec($sql);
        if($data ==1 || $data == 0){
            return "success";
        }


    }catch (Exception $error) {
        echo "<h1>";
        echo "Lỗi hàm update trong model: " . $error->getMessage();
        echo "</h1>";
    }

   }

   public function allUser()
    {
        // Khai báo try catch
        try {
            // 1. Khai báo câu sql
            // Code...
            $sql = "SELECT * FROM duan1_nhom11.users";

            // 2. Thực hiện truy vấn
            // Code...
            $data = $this->pdo->query($sql)->fetchAll();

            // 3. Convert array data sang object data
            // Code...
            $list = [];
           foreach($data as $value){
              $user = new User();
              $user->id = $value['user_id'];
              $user->userName = $value['userName'];
              $user->password = $value['password'];
              $user->email = $value['email'];
              $user->address = $value['address'];
              $user->tel = $value['tel'];
              $user->image = $value['image'];
              $user->role = $value['role'];
              
              array_push($list,$user);
   
           }
            // 4. Return kết quả
            // Code...
             return $list;
        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm all trong model: " . $error->getMessage();
            echo "</h1>";
        }
    } // END function all()
    public function insertUser(User $user){
        try {
            $sql = "INSERT INTO `users`(`user_id`, `userName`, `password`, `email`, `address`, `tel`, `image`, `role`) VALUES (null,'$user->userName','$user->password','$user->email','$user->address','$user->tel','$user->image','$user->role')";
            $data = $this->pdo->exec($sql);
            if($data === 1){
                return "success";
            }

        }catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm insertUser trong model: " . $error->getMessage();
            echo "</h1>";
        }

    }
    public function deleteUser($id){
      try{
        $sql= "DELETE FROM `users` WHERE user_id =$id ";
        $data = $this->pdo->exec($sql);
        if($data === 1){
            return "success";
        }

      }catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm deleteUser trong model: " . $error->getMessage();
            echo "</h1>";
        }

    }
    public function findUser($id){
        try{
            $sql = "SELECT * FROM duan1_nhom11.users where user_id=$id";
            $data = $this->pdo->query($sql)->fetch();
            if($data!==""){
                $user = new User();
                $user->id = $data['user_id'];
                $user->userName = $data['userName'];
                $user->password = $data['password'];
                $user->email = $data['email'];
                $user->address = $data['address'];
                $user->tel = $data['tel'];
                $user->role = $data['role'];
                return $user;
            }else{
                echo"Không tìm thấy dữ liệu";
            }
            

        }catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm findUser trong model: " . $error->getMessage();
            echo "</h1>";
        }
    }
    public function updateUser($id,User $user){
        try{
            $sql ="UPDATE users SET userName ='$user->userName',`password`='$user->password',`email`='$user->email',`address`='$user->address',`tel`='$user->tel',`image`='$user->image',`role`='$user->role' WHERE user_id = $id";
            
            $data = $this->pdo->exec($sql);
            if($data ===1 || $data===0){
                return "success";
            }

        }catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm updateUser trong model: " . $error->getMessage();
            echo "</h1>";
        }
    }
    public function createProduct(Product $product){
        try {
            $sql = "INSERT INTO `products`(`product_id`, `name`, `price`, `sale_price`, `image`, `quantity`, `views`, `short_description`, `category_id`) 
            VALUES (null, '$product->name', $product->price, $product->sale_price, '$product->image', $product->quantity, null, '$product->short_description', $product->category_id)";
    
            $data = $this->pdo->exec($sql);
            if($data === 1){
                return "success";
            }

        }catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm insertUser trong model: " . $error->getMessage();
            echo "</h1>";
        }

    }
    public function allProduct($keyword,$iddm)
    {
        // Khai báo try catch
        try {
            // 1. Khai báo câu sql
            // Code...
            $sql = "SELECT * FROM duan1_nhom11.products where 1";
            if ($keyword !== "") {
                $sql .= " AND name LIKE '%" . addslashes($keyword) . "%'";
            }
            if ($iddm > 0) {
                $sql .= " AND category_id = '" . intval($iddm) . "'";
            }
            $sql.=" order by category_id desc";

            // 2. Thực hiện truy vấn
            // Code...
            $data = $this->pdo->query($sql)->fetchAll();

            // 3. Convert array data sang object data
            // Code...
            $listProduct = [];
           foreach($data as $value){
              $product = new Product();
              $product->id = $value['product_id'];
              $product->name = $value['name'];
              $product->price= $value['price'];
              $product->sale_price = $value['sale_price'];
              $product->image = $value['image'];
              $product->quantity = $value['quantity'];
              $product->short_description=$value['short_description'];
              $product->category_id = $value['category_id'];

              array_push($listProduct,$product);
   
           }
            // 4. Return kết quả
            // Code...
             return $listProduct;
        } catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm all trong model: " . $error->getMessage();
            echo "</h1>";
        }
    } // END function all()
    public function deleteProduct($id){
        try{
          $sql= "DELETE FROM `products` WHERE product_id =$id ";
          $data = $this->pdo->exec($sql);
          if($data === 1){
              return "success";
          }
  
        }catch (Exception $error) {
              echo "<h1>";
              echo "Lỗi hàm deleteProduct trong model: " . $error->getMessage();
              echo "</h1>";
          }
  
      }
      public function findProduct($id){
        try{ 
              $sql = "SELECT * From products where product_id = $id";
              $data = $this->pdo->query($sql)->fetch();
              if($data!==""){
                $product = new Product();
              $product->id = $data['product_id'];
              $product->name = $data['name'];
              $product->price= $data['price'];
              $product->sale_price = $data['sale_price'];
              $product->image = $data['image'];
              $product->quantity = $data['quantity'];
              $product->short_description=$data['short_description'];
              $product->category_id = $data['category_id'];

              return $product;

              }else{
                echo"Không tìm thấy dữ liệu";
              }

        }catch (Exception $error) {
              echo "<h1>";
              echo "Lỗi hàm findProduct trong model: " . $error->getMessage();
              echo "</h1>";
          }
      }
      public function updateProduct($id,Product $product){
        try{ 
            $sql ="UPDATE `products` SET `name`='$product->name',`price`=$product->price,`sale_price`=$product->sale_price,`image`='$product->image',`quantity`='$product->quantity',`short_description`='$product->short_description'
,`category_id`='$product->category_id' WHERE product_id = $id";
            $data = $this->pdo->exec($sql);
            if ($data >= 0) {
                return "success";
            }
            
        }catch (Exception $error) {
              echo "<h1>";
              echo "Lỗi hàm updateProduct trong model: " . $error->getMessage();
              echo "</h1>";
          }
      }
   
     
      public function createNewUser(User $user1){
        try {
            $sql = "INSERT INTO `users`(`user_id`, `userName`, `password`, `email`, `address`, `tel`) VALUES (null,'$user1->userName','$user1->password','$user1->email','$user1->address','$user1->tel')";
            $data = $this->pdo->exec($sql);
            if($data === 1){
                return "success";
            }

        }catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm insertUser trong model: " . $error->getMessage();
            echo "</h1>";
        }

    }
    public function checkUser(){
        try{
            $userName = trim($_POST['username']);
            $password = trim($_POST['password']);
           
          $sql = "SELECT * FROM duan1_nhom11.users where userName ='".$userName."' AND password ='".$password."' ";
          $data = $this->pdo->query($sql)->fetch();
           return $data;
        
        }catch (Exception $error) {
            echo "<h1>";
            echo "Lỗi hàm checkUser trong model: " . $error->getMessage();
            echo "</h1>";
        }
       }
   //


// public function getCart($user_id) {
    
//     try {
//         $query = "SELECT c.*, p.name, p.price FROM cart c JOIN products p ON c.product_id = p.id WHERE c.user_id = ?";
//     $stmt = $this->db->prepare($query);
//     $stmt->execute([$user_id]);
//     return $stmt->fetchAll();
//     }catch (Exception $error) {
//     echo "<h1>";
//     echo "Lỗi hàm checkUser trong model: " . $error->getMessage();
//     echo "</h1>";
//     }
// }

// public function updateCart($cartId, $quantity) {
    
//     try {
//         $query = "UPDATE cart SET quantity = ? WHERE id = ?";
//         $stmt = $this->db->prepare($query);
//         $stmt->execute([$quantity, $cartId]);
//     }catch (Exception $error) {
//     echo "<h1>";
//     echo "Lỗi hàm checkUser trong model: " . $error->getMessage();
//     echo "</h1>";
//     }
// }

// public function removeFromCart($cartId) {
    
//     try {
//     $query = "DELETE FROM cart WHERE id = ?";
//     $stmt = $this->db->prepare($query);
//     $stmt->execute([$cartId]);
//     }catch (Exception $error) {
//     echo "<h1>";
//     echo "Lỗi hàm checkUser trong model: " . $error->getMessage();
//     echo "</h1>";
//     }
// }


    // Cart.php (Model)

    protected $items = [];

    public function addItem($product, $quantity) {
        if (isset($this->items[$product->id])) {
            // Nếu sản phẩm đã có trong giỏ, tăng số lượng
            $this->items[$product->id]->quantity += $quantity;
        } else {
            // Nếu sản phẩm chưa có trong giỏ, thêm mới
            $this->items[$product->id] = new CartItem($product, $quantity);
        }
    }

    public function getItems() {
        return $this->items;
    }

    public function removeItem($productId) {
        unset($this->items[$productId]);
    }

    public function clear() {
        $this->items = [];
    }

    public static function getCurrentCart() {
        // Trả về giỏ hàng từ session
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = new Cart();
        }
        return $_SESSION['cart'];
    }
    public function updateItem($productId, $quantity) {
        if (isset($this->items[$productId])) {
            $this->items[$productId]->quantity = $quantity;
        }
    }

}


