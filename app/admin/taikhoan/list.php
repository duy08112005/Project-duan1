<!-- //<div class="row"> -->
            <div class="row formtitle">
                <h1>Danh sách Tài Khoản</h1>
            </div>
            <a href="?act=add-user"><input type="button" name="" value="Thêm Mới" class="btn btn-primary"></a>
            <!-- <div class="row formcontent"> -->
                <form action="" method="post">

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">ID</th>
                            <th scope="col">Tên Đăng Nhập</th>
                            <th scope="col">Mật khẩu</th>
                            <th scope="col">Ảnh Đại diện </th>
                            <th scope="col">Địa chỉ email</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Vai trò </th>
                            <th scope="col">Tương tác </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=0; foreach($show as $user) { ?>
                            <tr>
                            <td><?=$i++?></td>
                            <td><?=$user->id?></td>
                            <td><?=$user->userName?></td>
                            <td><?=$user->password?></td>
                            <td>
                              <div style="height: 70px; width:60px">
                                  <img src="<?=$user->image?>" alt="" style="max-height:100%;max-width:100%">
                              </div>
                            </td>
                            <td><?=$user->email?></td>
                            <td><?=$user->address?></td>
                            <td><?=$user->tel?></td>
                           
                            <td><?=$user->role === 1?"admin":"user"?></td>

                            <td>
                            <a href="index.php?act=delete-user&id=<?=$user->id?>" ><input type="button" value="XÓA" class="btn btn-danger" onclick="return confirm('Xóa người dùng?')"></a>
                            <a href="index.php?act=update-user&id=<?=$user->id?>" ><input type="button" value="Sửa" class="btn btn-warning"></a>


                            </td>

                            </tr>
                      <?php } ?>

                        </tbody>
                    </table>
                   
                    <!-- </div> -->
                    
                    </form>
            </div>
        <!-- </div> -->



        





        


    