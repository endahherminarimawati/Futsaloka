
  <div class="login-box">
    <div class="login-logo">
      <a href="<?= base_url('auth') ?>"><b>FUTSALOKA</b> <i class="fas fa-futbol"></i></a>
    </div>
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Silahkan Daftar</p>
        
        <?= $this->session->flashdata('ue'); ?>
        <?= $this->session->flashdata('username'); ?>
        <?= $this->session->flashdata('email'); ?>

        <form action="" method="post" action="<?= base_url('register')?>">
          <div class="mb-2">
            <div class="input-group">
              <input type="text" class="form-control" name="name" placeholder="Nama" value="<?= set_value('name');?>">
              <div class="input-group-append">
                <div class="input-group-text">
                </div>
              </div>
            </div>
            <small class="text-danger"> <?= form_error('name'); ?> </small>
          </div>
          <div class="mb-2">
            <div class="input-group">
              <input type="text" class="form-control" name="email" placeholder="Email" value="<?= set_value('email');?>">
              <div class="input-group-append">
                <div class="input-group-text">
                </div>
              </div>
            </div>
            <small class="text-danger"> <?= form_error('email'); ?> </small>
          </div>
          <div class="mb-2">
            <div class="input-group">
              <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username')?>">
              <div class="input-group-append">
                <div class="input-group-text">
                </div>
              </div>
            </div>
            <small class="text-danger"> <?= form_error('username'); ?> </small>
          </div>
          <div>
            <div class="input-group mb-3">
              <input type="password" class="form-control" name="password" placeholder="Password" value="">
              <div class="input-group-append">
                <div class="input-group-text">
                </div>
              </div>
            </div>
            <small class="text-danger"> <?= form_error('password'); ?> </small>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Daftar</button>
            </div>
          </div>
        </form>
        <a class="btn btn-success btn-block my-4" href="<?= base_url('auth') ?>">Sudah Punya Akun ? Silahkan Login!</a>
      </div>
    </div>
  </div>

  
