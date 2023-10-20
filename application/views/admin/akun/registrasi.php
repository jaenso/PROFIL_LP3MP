<div class="content-wrapper d-flex align-items-center auth px-0">
  <div class="row w-100 mx-0">
    <div class="col-lg-4 mx-auto">
      <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <div class="brand-logo">
          <img src="<?= base_url(); ?>assets_admin/images/logo.svg" alt="logo">
        </div>
        <h4>New here?</h4>
        <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
        <form class="pt-3" method="POST" action="<?= base_url('akun/registrasi'); ?>">
          <div class="form-group">
            <input type="text" autocomplete="off" class="form-control form-control-lg" id="nama" name="nama" placeholder="Nama" value="<?= set_value('nama') ?>">
            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
          </div>
          <div class="form-group">
            <input type="text" autocomplete="off" class="form-control form-control-lg" id="username" name="username" placeholder="Username" value="<?= set_value('username') ?>">
            <small class="form-text text-danger"><?= form_error('username'); ?></small>
          </div>
          <div class="form-group">
            <input type="password" autocomplete="off" class="form-control form-control-lg" id="password1" name="password1" placeholder="Password">
            <small class="form-text text-danger"><?= form_error('password1'); ?></small>
          </div>
          <div class="form-group">
            <input type="password" autocomplete="off" class="form-control form-control-lg" id="password2" name="password2" placeholder="Repeat Password">
          </div>
          <div class="mb-4">
            <div class="form-check">
              <label class="form-check-label text-muted">
                <input type="checkbox" class="form-check-input">
                I agree to all Terms & Conditions
              </label>
            </div>
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
          </div>
          <div class="text-center mt-4 font-weight-light">
            Already have an account? <a href="<?= base_url(); ?>akun" class="text-primary">Login</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->