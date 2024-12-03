<!-- //<div class="row"> -->
<div class="row formtitle">
                <h1>Danh sách Sản phẩm</h1>
            </div>
            <div class="mb-3">
            <a href="?act=add-user"><input type="button" name="" value="Thêm Mới" class="btn btn-primary"></a>
            </div>
            <!-- <div class="row formcontent"> -->
                <form action="index.php?act=list-product" method="post">
                    <div class="mb-3">
                    <input type="text" name="keyword" id="" >
                    </div>
                    <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" name="category_id">
                    <option selected value="0">Tất cả</option>        
                <?php
                foreach($listCate as $category){
                    echo '<option value="'.$category->category_id.'">'.$category->name.'</option>';
                }
                  ?>        
             </select>
             
             <input type="submit" name="ok" value="lọc" class="btn btn-info">

            
             </div>
            
                  </form>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Mã sản phẩm</th>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Giá sản phẩm</th>
                            <th scope="col">Giá Khuyến mại</th>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Số lượng sản phẩm</th>
                            <th scope="col">Mô tả sản phẩm </th>
                            <th scope="col">Tương tác </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=0; foreach($listProduct as $product) { ?>
                            <tr>
                            <td><?=$i++?></td>
                            <td><?=$product->id?></td>
                            <td><?=$product->name?></td>
                            <td><?=$product->price?>đ</td>
                            <td><?=$product->sale_price?>đ</td>
                            <td>
                              <div style="height: 60px; width:50px">
                                  <img src="<?=$product->image?>" alt="" style="max-height:100%;max-width:100%">
                              </div>
                            </td>
                            <td><?=$product->quantity?></td>
                            <td><?=$product->short_description?></td>
                            <td>
                            <a href="index.php?act=delete-product&id=<?=$product->id?>" ><input type="button" value="XÓA" class="btn btn-danger" onclick="return confirm('Xóa sản phẩm?')"></a>
                            <a href="index.php?act=update-product&id=<?=$product->id?>" ><input type="button" value="Sửa" class="btn btn-warning"></a>

                            </td>

                            </tr>
                      <?php } ?>

                        </tbody>
                    </table>
                   
                    <!-- </div> -->
                    
                   
            </div>
        <!-- </div> -->



        





        


    