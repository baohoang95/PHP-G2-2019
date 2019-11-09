<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="contacts_48dp.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <!-- ['base_url'] = 'http://localhost:808/PHP/LearnPHP-Fedu.vn/contact/' -->
    <link rel="stylesheet" href="<?php echo base_url()?>2.css">
    <title>Danh Bạ Google Edit</title>
  </head>
<body>
    <div class="container mt-3 mr-3">

         
        <div class="card card-block col-xl-8 p-3">
          <div class="">
            <h4 class="text-xl-center text-info ">Chỉnh sửa liên hệ</h4><hr class="col-xl-4">

          </div>
          <div class="modal-body">
            <!-- insert Form here -->
            <?php foreach ($mangedit as $key => $value): ?>
              
           
              <form action="../updateContact" method="post" enctype="multidata/form-data" >
                  <!-- id -->
                <div class="form-group">
                    <input name="id" type="hidden" class="form-control" id="PhoneNumber" placeholder="vd: 0912345678" value= "<?= $value['id']?>">
                  </div>
                <div class="form-group row">
                  <label for="ten" class="col-sm-3 col-form-label">Họ Tên</label>
                  <div class="col-sm-9">
                    <input type="text" name="ten" class="form-control" id="ten" placeholder="Nhập tên đầy đủ ở đây" value="<?=$value['ten'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Nhập Email : vd example.@gmail.com"  value="<?=$value['email'] ?>">
                  </div>
                </div>
                   <div class="form-group row">
                  <label for="sdt" class="col-sm-3 col-form-label">Số điện thoại</label>
                  <div class="col-sm-9">
                    <input type="number" name="sdt" class="form-control" id="sdt" placeholder="Nhập số điện thoại: vd 0912345678"  value="<?=$value['sdt'] ?>">
                  </div>
                </div>
              <div class="form-group row">
                  <label for="chucvu" class="col-sm-3 col-form-label">Chức vụ</label>
                  <div class="col-sm-9">
                    <input type="text" name="chucvu" class="form-control" id="chucvu" placeholder="Nhập chức vụ vd: giám đốc"  value="<?=$value['chuc_vu'] ?>">
                  </div>
                </div>
 

                <div class="text-center p-3">
                  <button type="submit" class="btn btn-outline-success mr-3" >Lưu</button>
                  <button type="reset" class="btn btn-outline-info mr-3" >Reset</button>
                  <a href="http://localhost:808/PHP/LearnPHP-Fedu.vn/contact/index.php/contact/showdata" class="btn btn-outline-danger" data-dismiss="modal">Hủy</a>
                </div>
            </form>         
          <?php endforeach ?>
          </div>
          
        </div>
      </div>
   
    
</body>
</html>
