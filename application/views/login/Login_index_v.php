
  <div class="login-box">
    <div class="login-logo">
      <a href="<?= base_url('auth') ?>"><b>FUTSALOKA</b> <i class="fas fa-futbol"></i></a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan <i>Log-In</i></p>
        
        <?= $this->session->flashdata('message'); ?>

        <form action="" method="post" action="<?= base_url('login')?>">
          <div class="mb-2">
            <div class="input-group">
              <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username') ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <small class="text-danger"> <?php echo form_error('username'); ?> </small>
          </div>
          <div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password" value="<?= set_value('password') ?>">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <small class="text-danger"> <?php echo form_error('password'); ?> </small>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary float-right">Masuk <i class="fa fa-arrow-right"></i> </button>
            </div>
          </div>
        </form>
        <p class="mb-0">
          <a href="<?= base_url('register') ?>" class="text-center">Belum punya akun ? Daftar sekarang!</a>
        </p>
      </div>
    </div>
  </div>

  
