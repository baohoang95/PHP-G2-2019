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
    <title>Danh Bạ Google B</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
  
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-3 col-lg-3 col-md-4 sidebar fixed-top">
              <!-- danh ba -->
              <div class="navbar-brand d-block mx-auto p-2 mb-2 " style="background: none">
                  <i class="fas fa-bars mr-2"></i>
                  <img src="<?php echo base_url()?>contacts_48dp.png"  width="40" class=" mr-2  ">
                  <a href="#"  class="text-dark h5"><b>Danh Bạ</b> </a>
              </div>
              <!-- button them moi lien he -->
             
              <div class="mt-1 btn  ">
                <a href="#" class="btn btn-light search-button  p-1 pl-3 pr-3"  data-toggle="modal" data-target="#addcontact">
                  <span  aria-hidden="true" class="mr-2"><svg width="36" height="36" viewBox="0 0 36 36"><path fill="#34A853" d="M16 16v14h4V20z"></path><path fill="#4285F4" d="M30 16H20l-4 4h14z"></path><path fill="#FBBC05" d="M6 16v4h10l4-4z"></path><path fill="#EA4335" d="M20 16V6h-4v14z"></path><path fill="none" d="M0 0h36v36H0z"></path></svg></span>
                  <span class="float-right mt-2 ">Tạo liên hệ</span>
                </a>
               
                
                <!-- <button class="btn btn-light"> <i class="fas fa-plus-circle"></i>Tạo liên hệ</button> -->
              </div>
              <ul class="navbar-nav flex-column mt-3 font-weight-bold">
                <li class="nav-item"><a href="#" class="nav-link  current p-2  "><i class="far fa-user   mr-3"></i>Danh bạ  <b class="float-right mr-4">117</b> </a></li>
                <li class="nav-item "><a href="#"class="nav-link current1 p-2  sidebar-link"><i class="fas fa-history mr-3"></i>Thường xuyên liên hệ </a></li>
                <li class="nav-item"><a href="#" class="nav-link current1 p-2  sidebar-link"><i class="far fa-copy mr-3"></i>Liên hệ trùng lặp</a></li>
                <div class="bottom-border"></div>
                <li class="nav-item"><a href="#" class="nav-link current1 p-2  sidebar-link"><i class="fas fa-chevron-up mr-3"></i></i>Nhãn</a></li>
                <li class="nav-item"><a href="#" class="nav-link current1 p-2  sidebar-link"><i class="fas fa-tag mr-3"></i>Bạn Học</a></li>
                <li class="nav-item"><a href="#" class="nav-link current1 p-2  sidebar-link"><i class="fas fa-tag mr-3"></i>Công ty</a></li>
                <li class="nav-item"><a href="#" class="nav-link current1 p-2  sidebar-link"><i class="fas fa-tag mr-3"></i>Gia đình</a></li>
                <li class="nav-item"><a href="#" class="nav-link current1 p-2  sidebar-link"><i class="fas fa-tag mr-3"></i>Hội thảo</a></li>
                <li class="nav-item"><a href="#" class="nav-link current1 p-2  sidebar-link"><i class="fas fa-tag mr-3"></i>Hội nghị</a></li>
                <li class="nav-item"><a href="#" class="nav-link current1 p-2  sidebar-link"><i class="fas fa-tag mr-3"></i>Học nhóm</a></li>
                <li class="nav-item"><a href="#" class="nav-link current1 p-2  sidebar-link"><i class="fas fa-tag mr-3"></i>Lớp cũ</a></li>
                <li class="nav-item"><a href="#" class="nav-link current1 p-2  sidebar-link"><i class="fas fa-plus mr-3"></i>Tạo Nhãn</a></li>
              </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav search -->
            <div class="col-xl-9  col-lg-9 col-md-8  ml-auto fixed-top  mt-3">
              <div class="row ">
               
                <div class="col-md-8 bg-light search-input  p-1 ">
                  <form  action="searchContact" method="post" enctype="multidata/form-data">
                    <div class="input-group ">
                      <button type="button" class="btn btn-light search-button mr-2 ml-2"><i class="fas fa-search "></i></button>
                      <input type="text" name="search" class="form-control search-input" placeholder="Tìm Kiếm...">
                        
                    </div>
                  </form>
                </div>
                <div class="col-md-4 ">
                  <ul class="navbar-nav pl-5 ml-5">
                    <li class="nav-item icon-parent "><a href="#" class="nav-link  mr-2"><i class="far fa-question-circle fa-lg"></i></a></li>
                    <li class="nav-item icon-parent "><a href="#" class="nav-link  mr-5"><i class="fas fa-cog fa-lg"></i></a></li>
                    <li class="nav-item icon-parent mt-1"><a href="#" class="nav-link btn bo "><i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i></a></li>
                    <li class="nav-item ml-md-auto mt-1"><img src="<?php echo base_url()?>contacts_48dp.png" width="30" alt="avt"></li>
                  </ul>
                </div>
              </div>

              <!-- table  -->
              
            </div>
            <!-- end of top-nav -->

            
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->
    <!-- modal add contact-->
    <div class="modal fade" id="addcontact">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title text-success">Tạo mới liên hệ </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body p-3">
            <!-- insert Form here -->
              <form action="./addContact" method="post" enctype="multidata/form-data" >
                  <!-- id -->
                <div class="form-group row">
                  <label for="ten" class="col-sm-3 col-form-label">Họ Tên</label>
                  <div class="col-sm-9">
                    <input type="text" name="ten" class="form-control" id="ten" placeholder="Nhập tên đầy đủ ở đây" required autofocus>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Nhập Email : vd example.@gmail.com"  required autofocus>
                  </div>
                </div>
                   <div class="form-group row">
                  <label for="sdt" class="col-sm-3 col-form-label">Số điện thoại</label>
                  <div class="col-sm-9"  required autofocus>
                    <input type="number" name="sdt" class="form-control" id="sdt" placeholder="Nhập số điện thoại: vd 0912345678"  required autofocus>
                  </div>
                </div>
              <div class="form-group row">
                  <label for="chucvu" class="col-sm-3 col-form-label">Chức vụ</label>
                  <div class="col-sm-9">
                    <input type="text" name="chucvu" class="form-control" id="chucvu" placeholder="Nhập chức vụ vd: giám đốc">
                  </div>
                </div>
 

                <div class="modal-footer">
                  <button type="submit" class="btn btn-outline-success" >Lưu</button>
                  <button type="reset" class="btn btn-outline-info mr-3" >Reset</button>
                  <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Hủy</button>
                </div>
            </form>         
                
          </div>
          
        </div>
      </div>
    </div>
    <!-- end of modal -->

  <!-- table  -->
  <section>
      <div class="container-fluid position-fixed  ">
        <div class="row">
          <div class="col-xl-9  ml-auto">
            <div class="row pt-md-5 mt-3  ">
             
                <table width="100%" class="text-xs-center mt-2 table-hover ">
                  <thead class="border-bottom  ">
                    <tr >
                      <th width="20%">Tên</th>
                      <th width="20%">Email</th>
                      <th width="20%">Số Điện Thoại</th>
                      <th width="20%">Chức danh </th>
                      <th width="20%">Hành động</th>
                      
                    </tr>
                  </thead>
                  
                  <tbody >
                    <!-- show du lieu -->

                    <?php foreach ($mangdl as $key => $value): ?>
                        <tr>
                          <td> <img src="<?php echo base_url()?>contacts_48dp.png" width="40" alt="avt" class="py-2"> <?= $value['ten'] ?></td>
                          <td><?= $value['email'] ?></td>
                          <td><?=$value['sdt'] ?></td>
                          <td><?= $value['chuc_vu'] ?></td>
                          <td>
                            <div class="">
                                <a href="editContact/<?= $value['id'] ?>"  class="btn btn-outline-success"> <i class="fas fa-pencil-alt  "></i></a>
                              <a href="deleteData/<?= $value['id'] ?>" class="btn btn-outline-danger"> <i class="far fa-trash-alt"></i></a>
                                <a href="#" class="btn btn-outline-warning"> <i class="far fa-star"></i></a>
                            </div>
                          </td>
                        </tr>
                    <?php endforeach ?>
                  </tbody>
                  
                </table>
              
             
            </div>
          </div>
        </div>
      </div>
    </section>

 <!-- modal add contact-->


<div style="height: 650px;"></div>

    <!-- footer -->
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-9 col-lg-9 col-md-8 ml-auto">
            <div class="row border-top pt-3">
              <div class="col-lg-6 text-center">
                <ul class="list-inline">
                  <li class="list-inline-item mr-2">
                    <a href="#" class="text-dark">Contact Google</a>
                  </li>
                  <li class="list-inline-item mr-2">
                    <a href="#" class="text-dark">About</a>
                  </li>
                  <li class="list-inline-item mr-2">
                    <a href="#" class="text-dark">Support</a>
                  </li>
                  <li class="list-inline-item mr-2">
                    <a href="#" class="text-dark">Blog</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6 text-center">
                <p>&copy; 2019 Kiểm tra PHP giữa kỳ. Made With <i class="fas fa-heart text-danger"></i> by <span class="text-success">Hoàng Anh Bảo</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="/assets/js/script.js"></script>
  </body>
</html>






