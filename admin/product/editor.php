
<?php
    

    $title = 'Thêm sửa sản phẩm';
    $baseUrl = '../';
    require_once'..\layouts\header.php';
    
    $id = $thumbnail = $title = $price = $discount= $category_id =$description = '';
    require_once'form_save.php';
   

    $id = getGet('id');

    if($id != '' && $id >0 ){
     $sql = "select * from product where id='$id' and deleted = 0";
    $userItem = executeResult($sql,true);
    if($userItem != null){
      $thumbnail = $userItem['thumbnail'];
      $title = $userItem['title'];
      $price = $userItem['price'];
      $discount = $userItem['discount'];
      $category_id = $userItem['category_id'];
       $description = $userItem['description'];

    }else{
      $id = 0;
    }

    }
    
     $sql = "select * from category";
     $categoryItems = executeResult($sql);
     
  

?>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<div class="row">
  <div class="col-md-12 table-responsive">
    <h1 style="margin-top:100px">Thêm sửa sản phẩm</h1>

    <div class="panel panel-primary">
      <div class="panel-heading">

      </div>
      <div class="panel-body">
        <form method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-9 col-12">
              <div class="form-group">
          <label for="usr">Tên sản phẩm</label>
          <input required="true" type="text" class="form-control" id="usr" name="title" value="<?=$title?>">
          <input type="text" name="id" value="<?=$id?>" hidden="true">
        </div>
         
        <div class="form-group">
          <label for="pwd">Noi Dung</label>

          <textarea class="form-control" rows="5"
          name="description" id="description"><?=$description?></textarea>
           <button class="btn btn-success">cập nhật</button>
          
        </div>
            </div>
            <div class="col-md-3 col-12">
              <div class="form-group">
          <label for="thumbnail">Thumbnail</label>
          <input required="true" type="file" class="form-control" id="thumbnail" name="thumbnail" accept=".jpg, .png, .jpeg, .gif, .bmp, .tif, .tiff|image/*">
          <img id="thumbnail_img" src="<?=fixUrl($thumbnail)?>" style="max-height: 160px;">
        </div>
              <div class="form-group">
          <label for="usr">Danh mục sản phẩm</label>
          <select class="form-control" name="category_id" id="category_id" required="true">
            <option value="">--choose--</option>

             <?php
              foreach ($categoryItems as $item) {
                if($item['id'] == $category_id){
                  echo'<option selected value="'.$item['id'].'">'.$item['name'].'</option>';

                }else{
                  echo'<option value="'.$item['id'].'">'.$item['name'].'</option>';
                }
              }
             ?>

          </select>
          
        </div>
        
        <div class="form-group">
          <label for="price">Gia:</label>
          <input required="true" type="number" class="form-control" id="price" name="price" value="<?=$price?>">
        </div>
        <div class="form-group">
          <label for="discount">Giam gia:</label>
          <input required="true" type="text" class="form-control" id="discount" name="discount" value="<?=$discount?>">
        </div>
              
            </div>
            
          </div>
          
        
       
        
       
        </form>
      </div>
    </div>
  </div>
  
</div>
<script type="text/javascript">
  function updateThumbnail(){
    $('#thumbnail_img').attr('src',$('#thumbnail').val())

  }
</script>
<script>
      $('#description').summernote({
        placeholder: 'Nhap noi dung',
        tabsize: 2,
        height: 300,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>


<?php 
     require_once'..\layouts\footer.php';
 ?>