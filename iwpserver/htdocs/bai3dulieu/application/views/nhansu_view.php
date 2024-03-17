<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Card</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>1.js"></script>
  <link rel="stylesheet" href="<?php echo base_url()?>vendor/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url()?>vendor/font-awesome.css">
  <link rel="stylesheet" href="<?php echo base_url()?>1.css">
</head>

<body>
  <div class="container">
    <div class="text-xs-center">
      <h3 class="display-3">Add new personnel</h3>
      <hr>
    </div>
  </div>
  <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>/index.php/nhansu/nhansu_add">
    <div class="form-group row">
      <div class="col-sm-5">
        <div class="row">
          <label for="avatarimg" class="col-sm-4 form-control-label text-xs-right "><b>Avatar</b></label>
          <div class="col-sm-8">
            <input name="avatarimg" type="file" class="form-control" id="avatarimg" placeholder="Upload">
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="row">
          <label for="name" class="col-sm-4 form-control-label text-xs-right"><b>Name</b></label>
          <div class="col-sm-8">
            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
          </div>          
        </div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-5">
        <div class="row">
          <label for="age" class="col-sm-4 form-control-label text-xs-right"><b>Age</b></label>
          <div class="col-sm-8">
            <input name="age" type="number" class="form-control" id="age" placeholder="Age">
          </div>  
        </div>
      </div>
      <div class="col-sm-5">
        <div class="row">
          <label for="phone" class="col-sm-4 form-control-label text-xs-right"><b>Phone</b></label>
          <div class="col-sm-8">
            <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone">
          </div>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-5">
        <div class="row">
          <label for="position" class="col-sm-4 form-control-label text-xs-right"><b>Position</b></label>
          <div class="col-sm-8">
            <select name="position" class="form-control" id="position">
              <option value="Full time">Full time</option>
              <option value="Part time">Part time</option>
              <option value="Intern">Intern</option>
            </select>
          </div>
        </div>
      </div>
      <div class="col-sm-5">
        <div class="row">
          <label for="department" class="col-sm-4 form-control-label text-xs-right"><b>Department</b></label>
          <div class="col-sm-8">
            <select name="department" class="form-control" id="department">
              <option value="Design">Design</option>
              <option value="Game">Game</option>
              <option value="Web">Web</option>
              <option value="Sales">Sales</option>
            </select>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-5">
        <div class="row">
          <label for="projects" class="col-sm-4 form-control-label text-xs-right"><b>Projects</b></label>
          <div class="col-sm-8">
            <input name="projects" type="number" class="form-control" id="projects" placeholder="Projects">
          </div>  
        </div>
      </div>
      <div class="col-sm-5">
        <div class="row">
          <label for="linkfb" class="col-sm-4 form-control-label text-xs-right"><b>Facebook</b></label>
          <div class="col-sm-8">
            <input name="linkfb" type="text" class="form-control" id="linkfb" placeholder="Facebook">
          </div>
        </div>
      </div>

    </div>
    <div class="form-group row">
      <div class="col-sm-5">
        <div class="row">
          <label for="linkpin" class="col-sm-4 form-control-label text-xs-right"><b>Pinterest</b></label>
          <div class="col-sm-8">
            <input name="linkpin" type="text" class="form-control" id="linkpin" placeholder="Pinterest">
          </div>  
        </div>
      </div>
      <div class="col-sm-5">
        <div class="row">
          <label for="linkgit" class="col-sm-4 form-control-label text-xs-right"><b>Github</b></label>
          <div class="col-sm-8">
            <input name="linkgit" type="text" class="form-control" id="linkgit" placeholder="Github">
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row text-xs-center">
      <div class="col-sm-offset-5 col-sm-12">
        <button type="submit" class="btn btn-outline-success nutxulyajax">Add</button>
        <button type="reset" class="btn btn-outline-danger">Reset </button>
      </div>
    </div>
  </form>
  <div class="container">
    <div class="text-xs-center">
      <h3 class="display-3">Personnel list</h3>
      <hr>
    </div>
  </div>
  <div class="container">
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline" method="get" action="<?= base_url() ?>/index.php/nhansu/tim_kiem">
        <input class="form-control mr-sm-2" type="search" name="search_name" placeholder="Enter the full name" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>
  </div>

  <div class="container">
    <div class="row">
      <div class="card-deck-wrapper">
        <div class="card-deck">
          <?php foreach ($mangketqua as $value): ?>
            <div class="col-sm-3">
              <div class="profile-card">
                <div class="wrapper">
                  <div class="background-wrapper">
                    <div class="profile-image">
                      <img src="<?=$value['avatarimg']?>" alt="Avatar" />
                    </div>
                  </div>
                  <div class="info-wrapper">
                    <div class="contents">
                      <p class="name"><?=$value['name']?></p>
                      <div class="socials">
                        <a href="<?=$value['linkpin']?>" class="social"><i class="fa-brands fa-pinterest" style="font-size: 150%;"></i></a>
                        <a href="<?=$value['linkfb']?>" class="social"><i class="fa-brands fa-facebook-f"style="font-size: 150%;"></i></a>
                        <a href="<?=$value['linkgit']?>" class="social"><i class="fa-brands fa-github"style="font-size: 150%;"></i></a>
                      </div>
                      <div class="card-block">
                        <div class="card-text-age-phone" style="margin-bottom: 7%;">
                          <b>Age</b> : <?=$value['age']?>
                          <i class="fa-solid fa-phone" style="margin-left:5%"></i> : <?=$value['phone']?>
                        </div>
                        <p class="card-text positon"><b>Position</b> : <?=$value['position']?></p>
                        <p class="card-text department"><b>Department</b> : <?=$value['department']?></p>
                        <p class="card-text projects"><b>Completed projects</b> : <?=$value['projects']?></p>
                      </div>
                      <p class="socials">
                        <a href="<?= base_url() ?>/index.php/nhansu/sua_nhansu/<?=$value['id']?>" class="social"><i class="fa-sharp fa-solid fa-user-pen" style="margin-right:15%;font-size: 150%;"></i></a>
                        <a href="<?= base_url() ?>/index.php/nhansu/xoa_nhansu/<?=$value['id']?>" class="social"><i class="fa-sharp fa-solid fa-trash" style="margin-left:15%;font-size:150%;"></i></a>
                      </p>
                    </div>
                    <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                      <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                      <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(186,186,119,0.7" />
                      <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                      <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                      <use xlink:href="#gentle-wave" x="48" y="7" fill="#ffffff" />
                    </g>
                  </svg>
                </div>
              </div>
            </div> <!-- end card-->
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
</div>
<!-- Scroll to top button -->
<button onclick="scrollToTop()" id="scrollToTopBtn" title="Go to top">
  <i class="fa-solid fa-chevron-up"></i>
</button>

<script src="1.js"></script>
<!-- Thêm thư viện jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Đoạn mã JavaScript để thực hiện AJAX -->
<script>
  $(document).ready(function(){
    $('.form-inline').submit(function(event){
        event.preventDefault(); // Ngăn chặn việc gửi biểu mẫu một cách thông thường
        var formData = $(this).serialize(); // Lấy dữ liệu từ biểu mẫu

        // Gửi yêu cầu AJAX
        $.ajax({
          type: 'GET',
          url: '<?= base_url() ?>/index.php/nhansu/tim_kiem',
          data: formData,
          success: function(data){
                // Cập nhật kết quả tìm kiếm trong phần nội dung
            $('.card-deck').html(data);
          }
        });
      });
  });
</script>
</body>

</html>