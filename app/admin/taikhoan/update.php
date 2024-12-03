

<div class="row">
            <div class="row formtitle">
                <h1>Cập nhập tài khoản</h1>
            </div>
            <div class="row formcontent">
            <form action="" method="post" enctype="multipart/form-data" >
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
                <button type="submit" class="btn btn-primary" name="submit">Chỉnh sửa</button>
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



 




   