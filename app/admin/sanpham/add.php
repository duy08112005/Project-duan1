

<div class="row">
            <div class="row formtitle">
                <h1>Thêm mới sản phẩm</h1>
            </div>
            <div class="row formcontent">
            <form action="#" method="post" enctype="multipart/form-data">
                <dvi class="mb-3">
                <label for="exampleInputEmail1" class="form-label" >Danh Mục Sản Phẩm</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                <?php
                foreach($listCate as $category){
                    echo '<option value="'.$category->category_id.'">'.$category->name.'</option>';
                }
                  ?>        
             </select>
                </dvi>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label" >Mã sản phẩm</label>
                    <input type="email" class="form-control" name="user_id" disabled >
                   
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" value="<?=$product->name?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gía sản phẩm</label>
                    <input type="number" class="form-control" name="price" value="<?=$product->price?>" min="1">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Gía khuyến mại</label>
                    <input type="number" class="form-control" name="sale_price" value="<?=$product->sale_price?>" min="1">
                </div>
                <div class="mb-3">
                    <div>
                        <span>chọn  ảnh:</span>
                        <input type="file" name="file_upload">

                    </div>
                    <label for="" class="form-label">Đường dẫn ảnh</label>
                    <input type="text" class="form-control" name="image"value="<?=$product->image?>">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Số lượng sản phẩm</label>
                    <input type="number" class="form-control" name="quantity" value="<?=$product->quantity?>" min=1>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" name="short_description"><?=$product->short_description?></textarea>
                    <label >Mô tả ngắn</label>
                </div>
     

                <button type="submit" class="btn btn-primary" name="submit">Thêm Mới</button>
              <a href="index.php?act=list-product"><input type="button" value="Danh Sách sản phẩm" class="btn btn-success"></a>
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



 




   