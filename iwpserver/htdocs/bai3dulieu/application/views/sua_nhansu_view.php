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
      <h3 class="display-3">Edit information</h3>
      <hr>
    </div>
  </div>
  <form method="post" enctype="multipart/form-data" action="<?= base_url() ?>/index.php/nhansu/update_nhansu">
    <?php foreach ($dulieukq as $value):?>
      <div class="form-group row">
        <div class="col-sm-5">
          <div class="row">
            <label for="avatarimg" class="col-sm-4 form-control-label text-xs-right "><b>Avatar</b></label>
            <div class="col-sm-8">
              <div class="row">
                <div class="col-sm-6">
                  <img src="<?= $value['avatarimg']?>" alt="" class="img-fluid">
                </div>
              </div>
              <input type="hidden" name="id" value="<?=$value['id']?>">
              <input type="hidden" name="avatarimg2" value="<?=$value['avatarimg']?>">

              <input name="avatarimg" type="file" class="form-control" id="avatarimg" placeholder="Upload">
            </div>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="row">
            <label for="name" class="col-sm-4 form-control-label text-xs-right"><b>Name</b></label>
            <div class="col-sm-8">
              <input name="name" type="text" class="form-control" id="name" placeholder="Name" value="<?=$value['name']?>">
            </div>          
          </div>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-5">
          <div class="row">
            <label for="age" class="col-sm-4 form-control-label text-xs-right"><b>Age</b></label>
            <div class="col-sm-8">
              <input value="<?=$value['age']?>" name="age" type="number" class="form-control" id="age" placeholder="Age">
            </div>  
          </div>
        </div>
        <div class="col-sm-5">
          <div class="row">
            <label for="phone" class="col-sm-4 form-control-label text-xs-right"><b>Phone</b></label>
            <div class="col-sm-8">
              <input  value="<?=$value['phone']?>"name="phone" type="text" class="form-control" id="phone" placeholder="Phone">
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
              <input value="<?=$value['projects']?>" name="projects" type="number" class="form-control" id="projects" placeholder="Projects">
            </div>  
          </div>
        </div>
        <div class="col-sm-5">
          <div class="row">
            <label for="linkfb" class="col-sm-4 form-control-label text-xs-right"><b>Facebook</b></label>
            <div class="col-sm-8">
              <input  value="<?=$value['linkfb']?>"name="linkfb" type="text" class="form-control" id="linkfb" placeholder="Facebook">
            </div>

          </div>
        </div>

      </div>
      <div class="form-group row">
        <div class="col-sm-5">
          <div class="row">
            <label for="linkpin" class="col-sm-4 form-control-label text-xs-right"><b>Pinterest</b></label>
            <div class="col-sm-8">
              <input value="<?=$value['linkpin']?>" name="linkpin" type="text" class="form-control" id="linkpin" placeholder="Pinterest">
            </div>  
          </div>
        </div>
        <div class="col-sm-5">
          <div class="row">
            <label for="linkgit" class="col-sm-4 form-control-label text-xs-right"><b>Github</b></label>
            <div class="col-sm-8">
              <input value="<?=$value['linkgit']?>" name="linkgit" type="text" class="form-control" id="linkgit" placeholder="Github">
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
    <div class="form-group row text-xs-center">
      <div class="col-sm-offset-5 col-sm-12">
        <button type="submit" class="btn btn-outline-success nutxulyajax">Save</button>
      </div>
    </form>
  </div>
</body>
</html>