<?php

// Khai báo class BookController
class adminController
{
    // Khai báo thuộc tính
    // Code...
   public $adminQuery;

    // Khai báo phương thức 
    public function __construct()
    {
        // Code...
        $this-> adminQuery = new Query();
    }


    public function __destruct()
    {
        // Code...
    }


    public function showList()
    {
        // Code...
        $result = $this->adminQuery->all();

        // Hiển thị file view
        include "danhmuc/list.php";
    } // END showList()


    public function showCreate()
    {
        $category = new Category();
        $err = "";
        $success = "";
        // Code...
        if(isset($_POST['submit'])){
              $category->name = trim($_POST['category_name']);
              if($category->name === ""){
                $err= "Vui lòng nhập tên danh mục";
              }
              if($err === ""){
                $result = $this->adminQuery->insert($category);
                if($result == "success"){
                  $success ="Tạo mới thành công";
                  $category = new Category();
                }else{
                    $err = "Tạo mới thật bại";
                }
              }
        }

        // Hiển thị file view
        include "danhmuc/add.php";
    } // END showCreate()


    public function delete($id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($id !== "") {
            // Code...
            $result = $this->adminQuery->delete($id);
            if($result === "success"){
                header("Location: ?act=list");
            }

        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    }


    public function showUpdate($id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($id !== "") {
            // Code...
            $category = new Category();
            $err = "";
            $success = "";

            $category = $this->adminQuery->find($id);

            if(isset($_POST['submit'])){
                $category->name = trim($_POST['category_name']);
                if($category->name === ""){
                  $err= "Vui lòng nhập tên danh mục";
                }
                if($err === ""){
                 $ketQua = $this->adminQuery->update($id,$category);
                  if($ketQua === "success"){
                    $success ="Chỉnh Sửa  thành công";
                 //   $category = new Category();
                  }else{
                      $err = "Chỉnh Sửa  thật bại";
                  }
                }
          }
            
            // Hiển thị file view
            include "danhmuc/update.php";
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    } // END showUpdate()


    public function showDetail($id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($id !== "") {
            // Code...

            // Hiển thị file view
            include "view/book/detail.php";
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    } // END showDetail()



    public function showListUser()
    {
        // Code...
        
      $show = $this->adminQuery->allUser();
      //var_dump($show);

        // Hiển thị file view
        include "taikhoan/list.php";
    } 

    public function showCreateUser()
    {
        // Code...
        $user = new User();
        $err = "";
        $success = "";
        if(isset($_POST['submit'])){
            $user->userName = trim($_POST['userName']);
            $user->password = trim($_POST['password']);
            $user->email = trim($_POST['email']);
            $user->address = trim($_POST['address']);
            $user->tel = trim($_POST['tel']);
            $user->role = trim($_POST['role']);
            $user->image = trim($_POST['image']);
            if(!$user->userName||!$user->password||!$user->email||!$user->address||!$user->tel){
                     $err = "Vui lòng điền đầy đủ thông tin";
                
            }
            if($_FILES['file_upload']['name'] !==""){

                $thamSo1= $_FILES['file_upload']['tmp_name'];
                $thamSo2= "../upload/".$_FILES['file_upload']['name'];
                 $resultUpload = move_uploaded_file($thamSo1,$thamSo2);
                if($resultUpload) {
                    $user->image =$thamSo2 ;
                }else{

                }
        }
           if($user !=="") {
              $reslut = $this->adminQuery->insertUser($user);
              if($reslut === "success"){
                $success = "Thêm mới thành công";
                $user = new User();
              }else{
                $err = "Thêm mới thất bại";
              }
           }
            
        }
        
     
      //var_dump($show);

        // Hiển thị file view
        include "taikhoan/add.php";
    } 
    public function showDeleteUser($id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($id !== "") {
            // Code...
            $result = $this->adminQuery->deleteUser($id);
            if($result === "success"){
                header("Location:?act=list-user");
            }

        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    }


    public function showUpdateUser($id)
    {
        // Kiểm tra giá trị id trước khi xử lý logic
        if ($id !== "") {
            // Code...
            $user = new User();
            $err = "";
            $success = "";

         $user = $this->adminQuery->findUser($id);

           
        if(isset($_POST['submit'])){
            $user->userName = trim($_POST['userName']);
            $user->password = trim($_POST['password']);
            $user->email = trim($_POST['email']);
            $user->address = trim($_POST['address']);
            $user->tel = trim($_POST['tel']);
            $user->role = trim($_POST['role']);
            $user->image = trim($_POST['image']);
            if(!$user->userName||!$user->password||!$user->email||!$user->address||!$user->tel){
                     $err = "Vui lòng điền đầy đủ thông tin";
                
            }
            if($_FILES['file_upload']['name'] !==""){

                $thamSo1= $_FILES['file_upload']['tmp_name'];
                $thamSo2= "../upload/".$_FILES['file_upload']['name'];
                 $resultUpload = move_uploaded_file($thamSo1,$thamSo2);
                if($resultUpload) {
                    $user->image =$thamSo2 ;
                }else{

                }
        }
           if($user !=="") {
              $reslut = $this->adminQuery->updateUser($id,$user);
              if($reslut === "success"){
                $success = "Chỉnh sửa thành công";
                //$user = new User();
              }else{
                $err = "Chỉnh sửa  thất bại";
              }
           }
            
        }
            
            // Hiển thị file view
            include "taikhoan/update.php";
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    } // END showUpdate()

    public function showCreateProdcut()
    {
        $product = new Product();
        $err = "";
        $success = "";

        // Code...
        if(isset($_POST['submit'])){
              $product->name = trim($_POST['name']);
              $product->price= trim($_POST['price']);
              $product->sale_price = trim($_POST['sale_price']);
              $product->image = trim($_POST['image']);
              $product->quantity = trim($_POST['quantity']);
              $product->short_description = trim($_POST['short_description']);
              $product->category_id = trim($_POST['category_id']);
              if($product->name === ""||$product->price===""||$product->sale_price===""||$product->quantity===""||$product->short_description===""||$product->category_id===""){
                $err= "Vui lòng nhập tên danh mục";
              }
              if($_FILES['file_upload']['name'] !==""){

                      $thamSo1= $_FILES['file_upload']['tmp_name'];
                      $thamSo2= "../upload/".$_FILES['file_upload']['name'];
                       $resultUpload = move_uploaded_file($thamSo1,$thamSo2);
                      if($resultUpload) {
                          $product->image =$thamSo2 ;
                      }else{

                      }
              }
              if($err === ""){
                $result = $this->adminQuery->createProduct($product);
                if($result == "success"){
                  $success ="Tạo mới thành công";
                  $product = new Product();
                }else{
                    $err = "Tạo mới thật bại";
                }
              }
        }
        $listCate = $this->adminQuery->all();
        // Hiển thị file view
        include "sanpham/add.php";
    } // END showCreate()


    public function showListProduct()
    {
        // Code...
        if(isset($_POST['ok'])&&($_POST['ok'])){
            $keyword = $_POST['keyword'];
            $iddm = $_POST['category_id'];
          
        }else{
            $keyword ='';
            $iddm = 0;
        }
     
        $listCate = $this->adminQuery->all();
        $listProduct = $this->adminQuery->allProduct($keyword,$iddm);
        include "sanpham/list.php";
        // Hiển thị file view
       
    } // END showList()

    public function showDeleteProduct($id){

        if ($id !== "") {
            // Code...
            $result = $this->adminQuery->deleteProduct($id);
            if($result === "success"){
                header("Location:?act=list-product");
            }

        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }

    }

    public function showUpdateProduct($id){
        if ($id !== "") {
            // Code...
            $product = new Product();
            $err = "";
            $success = "";

            $product = $this->adminQuery->findProduct($id);

            if(isset($_POST['submit'])){
                $product->name = trim($_POST['name']);
                $product->price= trim($_POST['price']);
                $product->sale_price = trim($_POST['sale_price']);
                $product->image = trim($_POST['image']);
                $product->quantity = trim($_POST['quantity']);
                $product->short_description = trim($_POST['short_description']);
                $product->category_id = trim($_POST['category_id']);
                if($product->name === ""||$product->price===""||$product->sale_price===""||$product->quantity===""||$product->short_description===""||$product->category_id===""){
                  $err= "Vui lòng nhập tên danh mục";
                }
                if($_FILES['file_upload']['name'] !==""){
  
                        $thamSo1= $_FILES['file_upload']['tmp_name'];
                        $thamSo2= "../upload/".$_FILES['file_upload']['name'];
                         $resultUpload = move_uploaded_file($thamSo1,$thamSo2);
                        if($resultUpload) {
                            $product->image =$thamSo2 ;
                        }else{
  
                        }
                }
                if($err === ""){
                  $result = $this->adminQuery->updateProduct($id,$product);
                  if($result == "success"){
                    $success ="Cập nhập thành công";
                    //$product = new Product();
                  }else{
                      $err = "Cập nhập thật bại";
                  }
                }
          }
            // Hiển thị file view
            $listCate = $this->adminQuery->all();
            include "sanpham/update.php";
        } else {
            echo "<h1> Lỗi: Tham số id trống. Mời bạn kiểm tra tham số id trên đường dẫn url. </h1>";
        }
    }
    public function createAcc()
{
    $user1 = new User();
    $err = "";
    $success = "";
    
    if (isset($_POST['submit'])) {
        $user1->userName = trim($_POST['userName']);
        $user1->password = trim($_POST['password']);
        $user1->email = trim($_POST['email']);
        $user1->address = trim($_POST['address']);
        $user1->tel = trim($_POST['tel']);
        
        if (!$user1->userName || !$user1->password || !$user1->email || !$user1->address || !$user1->tel) {
            $err = "Vui lòng điền đầy đủ thông tin";
        } else {
            $result = $this->adminQuery->createNewUser($user1);
            if ($result === "success") {
                $success = "Đăng Ký Thành Công";
                $user1 = new User();
            } else {
                $err = "ĐĂNG ký Thất Bại";
            }
        }
    }

    include "view/dangky.php";
}
public function login(){
   
        
        $err = "";
        $success = "";
        
        if (isset($_POST['submit'])) {
         $dataUser = $this->adminQuery->checkUser();
         var_dump($dataUser);
         if($dataUser){
            $_SESSION['username'] = $dataUser['userName'];
            $success = "Đăng Nhập Thành Công";
            header("Location: client.php");
            exit();
         }else{
            $err="Đăn Nhập thất bại";
         }
            
            
        }
    
    
    include "view/login.php";
}
  public function logout(){
    // Đoạn mã để đăng xuất
        session_start();
        session_unset(); // Xóa tất cả session variables
        session_destroy(); // Hủy session
        header("Location:./client.php"); // Chuyển hướng về trang đăng nhập
        exit();

 }

 public function addProduct($productId, $quantity) {
    $product = Product::find($productId);  // Lấy thông tin sản phẩm từ database
    if ($product) {
        $cart = Cart::getCurrentCart();  // Lấy giỏ hàng hiện tại
        $cart->addItem($product, $quantity);  // Thêm sản phẩm vào giỏ hàng
        return redirect('/cart');  // Chuyển hướng đến trang giỏ hàng
    }
    return redirect('/products');


    // public function showCart() {
    //     $cart = Cart::getCurrentCart();
    //     return view('cart', ['cart' => $cart]);
    // }

    // public function removeProduct($productId) {
    //     $cart = Cart::getCurrentCart();
    //     $cart->removeItem($productId);  // Xóa sản phẩm khỏi giỏ hàng
    //     return redirect('/cart');
    // }
    //   public function updateCart($productId, $quantity) {
    //     $cart = Cart::getCurrentCart();
    //     $cart->updateItem($productId, $quantity);  // Cập nhật số lượng sản phẩm
    //     return redirect('/cart');  // Quay lại trang giỏ hàng
    // }
}
}
