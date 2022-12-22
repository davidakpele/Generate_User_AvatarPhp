<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserAvatar Generator From Name - PHP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body style="background:#e1ecf7">
    <nav class="navbar navbar-expand-lg navbar-dark" style="background:#1597BB">
        <div class="container">
            <a class="navbar-brand" href="./">UserAvatar Generator From Name - PHP</a>
            <div>
                <a href="https://sourcecodester.com" class="text-light fw-bolder h6 text-decoration-none" target="_blank">SourceCodester</a>
            </div>
        </div>
    </nav>
    <div class="container-fluid px-5 my-3 pt-5">
        <div class="col-lg-6 col-md-8 col-sm-12 mx-auto">
          <h3 class="text-center">Generate User Avatar usign the Users' Name Initials</h3>
          <hr>
            <div class="card rounded-0">
                <div class="card-header rounded-0">
                  <div class="card-title">List of Files</div>
                </div>
                <div class="card-body rounded-0">
                  <div class="container-fluid">
                      <form action="" id="generate-form" method="POST">
                        <div class="mb-3">
                          <label for="firstName" class="form-label">Firtname</label>
                          <input type="text" name="firstName" id="firstName" value="<?= isset($_POST['firstName']) ? $_POST['firstName'] : "" ?>" class="form-control form-control-sm rounded-0" required>
                        </div>
                        <div class="mb-3">
                          <label for="lastName" class="form-label">Lastname</label>
                          <input type="text" name="lastName" id="lastName" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : "" ?>" class="form-control form-control-sm rounded-0" required>
                        </div>
                        <?php 
                          if($_SERVER['REQUEST_METHOD'] == 'POST'){
                          include_once("userAvatargenerator.php");
                        ?>
                            <div class="d-flex w-100 justify-content-center">
                              <div class="col-auto">
                                <?= generateAvatarFromName($_POST['firstName'], $_POST['lastName']) ?>
                              </div>
                            </div>
                            <div class="text-center"><?= ucwords($_POST['firstName'] . " " . $_POST['lastName']) ?></div>
                        <?php 
                          }
                        ?>
                      </form>
                  </div>
                </div>
                <div class="card-footer py-2 text-center">
                  <button class="btn btn-primary rounded-pill col-lg-4 col-md-6 col-sm-12 col-xs-12" form="generate-form">Generate Avatar</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>