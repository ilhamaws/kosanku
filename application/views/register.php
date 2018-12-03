<div class="page-wrapper bg-blue top-100 bottom-100" id="default-select">
    <div class="wrapper wrapper-960">
        <div class="card card-2">
            <div class="card-heading"></div>
            <div class="card-body">
								<?php echo form_open('authentication/insertUser'); ?>
                <h4 class="search-title">Registrasi</h4>
                <div class="search-form" method="post">
                  <!-- <div class="form-regis input-field">
                  </div> -->
                  <div class="input-field">
                    <input class="app-select form-control" type="text" placeholder="Username" name="username" value="" >

                    <input class="app-select form-control" type="text" placeholder="Nama Lengkap" name="nama" value="" >

                    <input class="app-select form-control" type="text" placeholder="Alamat" name="alamat"  value="">

                    <select name="gender" class="app-select form-control" style="margin-top: 1em; color: #777777 !important;">
                      <option>Pilih gender</option>
                      <option value="pria">Pria</option>
                      <option value="wanita">Wanita</option>
                    </select>

                    <input class="app-select form-control" type="email" placeholder="Email" name="email" value="">

                    <input class="app-select form-control" type="password" placeholder="Password" name="password" value="">

                    <input class="app-select form-control" type="password" placeholder="Ulangi Password" name="password2" value="">

                    <select name="role" class="app-select form-control" style="margin-top: 1em; color: #777777 !important;">
                      <option data-display="Gabung Sebagai">Pilih role</option>
                      <option value="pemilik">Pemilik kos</option>
                      <option value="pencari">Pencari kos</option>
                    </select>


                    <button class="primary-btn" type="submit">Register<span class="lnr lnr-arrow-right"></span></button>

                    <a class="primary-btn" style="float: right;" href="<?php echo base_url('login')?>">Login<span class="lnr lnr-arrow-right"></span></a>

                  </div>
                </div>
								<?php echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
