
<!DOCTYPE html>
<html lang="en"><head>
	<title>  </title>
	<meta charset="utf-8">
  <title>Đăng Nhập</title>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- local -->

  <meta charset="utf-8">
  <!-- online -->
  <link rel="title icon" href="contacts_48dp.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <!-- ['base_url'] = 'http://localhost:808/PHP/LearnPHP-Fedu.vn/contact/' -->
  <link rel="stylesheet" href="<?php echo base_url()?>1.css">
 

</head>
<body >
 	<div class="container mt-3">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body ">
            <h5 class="card-title text-center">Đăng Nhập</h5>
            <form class="form-signin" method="post" enctype="multidata/form-data" action="contact/xacThuc">
                <div class="form-label-group">
                  <input type="email" name="usern" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Địa chỉ Email</label>
                </div>

                <div class="form-label-group">
                  <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
                  <label for="inputPassword">Mật khẩu</label>
                </div>

                <div class="form-group ">
                        <div class="checkbox ml-3">
                            <label>
                                <input type="checkbox" value="remember-me">
                                Remember Password
                            </label>
                        </div>
                    </div>

                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Đăng Nhập</button>
          
                <hr class="my-4">
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i>Đăng nhập với Google</button>
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Đăng nhập với Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>