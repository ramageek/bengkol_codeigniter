<body class="hold-transition login-page">
  <?php
    if ($this->session->userdata('loggedin')) {
      $this->session->set_flashdata('loggedInNotif','Anda sudah login, silakan logout dulu.');
      redirect(base_url('member'));
    };
    if($this->session->flashdata('unLoggedInNotif')) :
  ?>
    <div class="alert alert-dismissable alert-info" style="text-align:center;margin-bottom:0px;"><?= $this->session->flashdata('unLoggedInNotif') ?></div>
  <?php
    endif;
    echo validation_errors('<div class="alert alert-danger" style="text-align:center;margin-bottom:0px;">','</div>');
  ?>
  <div class="login-box" style="margin-top:10%;margin-bottom:10%;">
    <div class="login-logo">
      <a href="<?= base_url() ?>">Bengk<strong>OL</strong></a>
    </div>

    <div class="login-box-body">
      <p class="login-box-msg">Start your session!</p>

      <?= form_open() ?>
        <div class="form-group has-feedback">
          <?php $data = array('type'=>'email','class'=>'form-control','placeholder'=>'Email','name'=>'email','required'=>''); echo form_input($data); ?>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <?php $data = array('class'=>'form-control','placeholder'=>'Password','name'=>'password','required'=>''); echo form_password($data); ?>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="form-group">
          <?php $data = array('class'=>'btn btn-primary btn-block btn-flat','value'=>'Submit'); echo form_submit($data); ?>
        </div>
      <?= form_close() ?>  
      <div style="text-align:center">
        <a href="<?= base_url('member/register') ?>">Register new membership</a>
      </div>
    </div>
  </div>
</body>