<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>Sign Up - Penulis</title>
    <style>
      #loader {
        transition: all .3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden
      }

      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1s infinite ease-in-out;
        animation: sk-scaleout 1s infinite ease-in-out
      }

      @-webkit-keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0)
        }

        100% {
          -webkit-transform: scale(1);
          opacity: 0
        }
      }

      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0)
        }

        100% {
          -webkit-transform: scale(1);
          transform: scale(1);
          opacity: 0
        }
      }
    </style>
    <script defer="defer" src="<?php echo base_url("vendor/admin/dist/main.js")?>"></script>
  </head>
  <body class="app">
    <div id="loader">
      <div class="spinner"></div>
    </div>
    <script>
      window.addEventListener("load", (function() {
        const t = document.getElementById("loader");
        setTimeout((function() {
          t.classList.add("fadeOut")
        }), 300)
      }))
    </script>
    <div class="peers ai-s fxw-nw h-100vh">
      <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style='background-image:url("<?php echo base_url("vendor/admin/dist/assets/static/images/bg.jpg")?>")'>
        <div class="pos-a centerXY">
          <div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px"><img class="pos-a centerXY" src="<?php echo base_url("vendor/admin/dist/assets/static/images/logo.png")?>" alt=""></div>
        </div>
      </div>
      <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
        <h1 class="fw-300 c-grey-900 mB-30">Register Penulis</h1>
        <form method="post">
            <div class="mb-3">
              <label class="text-normal text-dark form-label">Nama Lengkap</label>
              <input type="text" class="form-control" name="fullname" placeholder="Nama Lengkap" value="<?php echo set_value('fullname'); ?>">
              <span class="alert-danger"><?php echo form_error('fullname'); ?></span>
            </div>
            <div class="mb-3">
              <label class="text-normal text-dark form-label">e-mail</label>
              <input type="email" class="form-control" name="email" placeholder="email@example.com" value="<?php echo set_value('email'); ?>">
              <span class="alert-danger"><?php echo form_error('email'); ?></span>
            </div>
            <div class="mb-3">
              <label class="text-normal text-dark form-label">Username</label>
              <input type="text" class="form-control" name="username" placeholder="username" value="<?php echo set_value('username'); ?>">
              <span class="alert-danger"><?php echo form_error('username'); ?></span>
            </div>
            <div class="mb-3">
              <label class="text-normal text-dark form-label">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password">
              <span class="alert-danger"><?php echo form_error('password'); ?></span>
            </div>
            <div class="mb-3">
              <label class="text-normal text-dark form-label d-block">Gender</label>
              <div class="form-check form-check-inline d-inline-block mR-15">
                <input class="form-check-input" type="radio" name="gender" id="gender-male" value="male" <?php echo set_value('gender') === 'male' ? 'checked' : ''; ?>>
                <label class="form-check-label text-dark" for="gender-male">Male</label>
              </div>
              <div class="form-check form-check-inline d-inline-block">
                <input class="form-check-input" type="radio" name="gender" id="gender-female" value="female" <?php echo set_value('gender') === 'female' ? 'checked' : ''; ?>>
                <label class="form-check-label text-dark" for="gender-female">Female</label>
              </div>
              <span class="alert-danger d-block"><?php echo form_error('gender'); ?></span>
            </div>
            <div class="mT-30">
              <div class="peers ai-c jc-sb fxw-nw">
                <div class="peer">
                  <a href="<?php echo site_url('login'); ?>" class="text-decoration-none" style="font-size: 14px;">Sudah punya akun? Login</a>
                </div>
                <div class="peer"><button class="btn btn-primary btn-color">Daftar</button></div>
              </div>
            </div>
        </form>
      </div>
    </div>
  </body>
</html>
