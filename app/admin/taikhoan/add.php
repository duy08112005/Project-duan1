
<style>
 /* General page styling */
body {
  font-family: 'Arial', sans-serif;
  background-color: #f9f9f9;
  margin: 0;
  padding: 0;
}

.container {
  max-width: 900px;
  margin: 50px auto;
  background: #fff;
  padding: 20px 30px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Page title */
.formtitle h1 {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
  color: #333;
}

/* Form input styles */
.formcontent form .form-control {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 10px;
  font-size: 14px;
  width: 100%;
}

.formcontent form label {
  font-weight: bold;
  color: #555;
  margin-bottom: 5px;
}

.formcontent form .form-control:focus {
  border-color: #007bff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
  outline: none;
}

/* File input */
.formcontent input[type="file"] {
  border: none;
  padding: 0;
}

/* Image preview container */
.formcontent img {
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  max-width: 100%;
}

/* Button styles */
.formcontent button,
.formcontent input[type="button"] {
  padding: 10px 15px;
  border: none;
  border-radius: 5px;
  color: #fff;
  font-size: 14px;
  cursor: pointer;
}

.btn-primary {
  background-color: #007bff;
}

.btn-primary:hover {
  background-color: #0056b3;
}

.btn-success {
  background-color: #28a745;
}

.btn-success:hover {
  background-color: #218838;
}

.formcontent p {
  color: #555;
  font-size: 14px;
  margin-top: 15px;
}

.formcontent p.error {
  color: red;
}

.formcontent p.success {
  color: green;
}

/* Responsive design */
@media (max-width: 768px) {
  .container {
    padding: 15px;
  }

  .formtitle h1 {
    font-size: 20px;
  }

  .formcontent form label {
    font-size: 14px;
  }

  .formcontent form .form-control {
    font-size: 12px;
  }

  .formcontent button,
  .formcontent input[type="button"] {
    font-size: 12px;
  }
}

</style>

<div class="row">
            <div class="row formtitle">
                <h1>Thêm mới Tài Khoản</h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=add-user" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >ID User</label>
                    <input type="email" class="form-control" name="user_id" disabled>
    
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tên đăng nhập</label>
                    <input type="text" class="form-control" name="userName" value="<?=$user->userName?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Mật khẩu</label>
                    <input type="password" class="form-control" name="password" value="<?=$user->password?>">
                </div>
                <div class="mb-3">
                    <div>
                        <label for="" class="form-label">chọn ảnh</label>
                        <input type="file" name="file_upload">
                    </div>
                    <div>
                    <label for="" class="form-label">Ảnh đã chọn</label>
                    <div>
                        <div style="height: 60px; width:50px">
                                  <img src="<?=$user->image?>" alt="" style="max-height:100%;max-width:100%">
                              </div>
                        </div>

                    </div>
                    <label for="" class="form-label">Đường dẫn ảnh</label>
                    <input type="text" class="form-control" name="image"value="<?=$user->image?>" hidden>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Địa chỉ Email</label>
                    <input type="email" class="form-control" name="email" value="<?=$user->email?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Địa chỉ</label>
                    <input type="text" class="form-control" name="address"value="<?=$user->address?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" name="tel" value="<?=$user->tel?>">
                </div>
               
                <div class="mb-3">
    <label for="" class="form-label">Vai trò</label>
    <select class="form-control" name="role">
        <option value="0" <?= $user->role == 0 ? 'selected' : '' ?>>Admin</option>
        <option value="1" <?= $user->role == 1 ? 'selected' : '' ?>>User</option>
    </select>
</div>

                <button type="submit" class="btn btn-primary" name="submit">Thêm Mới</button>
              <a href="index.php?act=list-user"><input type="button" value="Danh Sách Người Dùng" class="btn btn-success"></a>
                <div>
                    <p><?=$err?></p>

                </div>
                
                <div>
                    <p><?=$success?></p>
                    
                </div>
        </form>
            </div>
        </div>
    </div> 

    <script>
      <script>
  document.querySelector('form').addEventListener('submit', function (e) {
    let isValid = true;
    let errorMessages = [];

    // Validate the user name (required field)
    const userName = document.querySelector('input[name="userName"]');
    if (!userName.value.trim()) {
      isValid = false;
      errorMessages.push('Tên đăng nhập không được để trống.');
    }

    // Validate the password (required field)
    const password = document.querySelector('input[name="password"]');
    if (!password.value.trim()) {
      isValid = false;
      errorMessages.push('Mật khẩu không được để trống.');
    }

    // Validate email format
    const email = document.querySelector('input[name="email"]');
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
    if (!email.value.trim() || !emailPattern.test(email.value)) {
      isValid = false;
      errorMessages.push('Email không hợp lệ.');
    }

    // Validate phone number (optional but format check)
    const phone = document.querySelector('input[name="tel"]');
    const phonePattern = /^[0-9]{10}$/; // Adjust the pattern as needed for your country
    if (phone.value.trim() && !phonePattern.test(phone.value)) {
      isValid = false;
      errorMessages.push('Số điện thoại không hợp lệ.');
    }

    // Display errors if validation fails
    const errorElement = document.querySelector('.formcontent p.error');
    if (errorMessages.length > 0) {
      errorElement.innerHTML = errorMessages.join('<br>');
      errorElement.style.display = 'block';
    } else {
      errorElement.style.display = 'none';
    }

    // Prevent form submission if validation fails
    if (!isValid) {
      e.preventDefault();
    }
  });
</script>

    </script>



 




   