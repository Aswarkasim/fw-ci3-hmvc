<div class="jumbotron bg-white">
  <div class="row text-center">
    <div class="container-fluid">
      <div class="offset-md-3 col-md-6">
        <form action="<?= base_url('home/auth/register')  ?>" method="post">
          <h1 class="h3 mb-3 font-weight-normal">Registrasi</h1>

          <?= validation_errors('<div class="text text-danger">', '</div>') ?>



          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Username</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="username" placeholder="Username" type="text" value="<?= set_value('username') ?>">
              </div>
            </div>
          </div>

          <div class="form-gorup">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Alamat Email</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="email" placeholder="Email" type="email" value="<?= set_value('email') ?>">
              </div>
            </div>
          </div><br>

          <div class="form-gorup">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>No Hp</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="nohp" placeholder="No. Hp" type="text" value="<?= set_value('nohp') ?>">
              </div>
            </div>
          </div>
          <br>

          <div class="form-gorup">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Daftar di Instansi</strong></label>
              </div>
              <div class="col-md-8">
                <select name="id_instansi" id="" class="form-control">
                  <option value="">-- Daftar di Instansi --</option>
                  <?php foreach ($instansi as $row) { ?>
                    <option value="<?= $row->id_instansi; ?>"><?= $row->nama_instansi; ?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
          <br>





          <div class="form-group">
            <div class="row">
              <div class="col-md-4 pull-right">
                <label for="inputPassword" class="pull-right"><strong> Password</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="password" placeholder="Password" type="password">
                <small>Password minimal 6 karakter</small>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="inputPassword" class="pull-right"><strong> Ketik Ulang Password</strong></label>
              </div>
              <div class="col-md-8">
                <input type="password" class="form-control" name="re_password" placeholder="Password" type="Ketik ulang password">
                <small>Masukkan ulang password</small>
              </div>
            </div>
          </div>


          <hr>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Asal Instansi</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="asal_instansi" placeholder="Asal Instansi" type="text" value="<?= set_value('asal_instansi') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Jurusan</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="jurusan" placeholder="Jurusan" type="text" value="<?= set_value('jurusan') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Nomor Telp. Instansi</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="no_telepon_instansi" placeholder="Nomor Telp. Instansi" type="text" value="<?= set_value('no_telepon_instansi') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Alamat Instansi</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="alamat_instansi" placeholder="Alamat Instansi" type="text" value="<?= set_value('alamat_instansi') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Nama Guru/Nama Pendamping</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="nama_guru_pendamping" placeholder="Nama Guru/Nama Pendamping" type="text" value="<?= set_value('nama_guru_pendamping') ?>">
              </div>
            </div>
          </div>


          <hr>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Nama Lengkap</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="namalengkap" placeholder="Nama Lengkap" type="text" value="<?= set_value('namalengkap') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Nama Panggilan</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="nama_panggilan" placeholder="Nama Panggilan" type="text" value="<?= set_value('nama_panggilan') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>No. Induk</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="nomor_induk" placeholder="No. Induk" type="text" value="<?= set_value('nomor_induk') ?>">
              </div>
            </div>
          </div>


          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Tanggal Lahir</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir" type="date" value="<?= set_value('tgl_lahir') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Tempat Lahir</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" type="text" value="<?= set_value('tempat_lahir') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Jenis Kelamin</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" type="text" value="<?= set_value('jenis_kelamin') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Agama</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="agama" placeholder="Agama" type="text" value="<?= set_value('agama') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Tinggi Badan</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="tinggi_badan" placeholder="Tinggi Badan" type="text" value="<?= set_value('tinggi_badan') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Berat Badan</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="berat_badan" placeholder="Berat Badan" type="text" value="<?= set_value('berat_badan') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Suku</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="suku" placeholder="Suku" type="text" value="<?= set_value('suku') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Alamat Sekarang</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="alamat_sekarang" placeholder="Alamat Sekarang" type="text" value="<?= set_value('alamat_sekarang') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Alamat Asal</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="alamat_asal" placeholder="Alamat Asal" type="text" value="<?= set_value('alamat_asal') ?>">
              </div>
            </div>
          </div>

          <hr>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Nama Ayah</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="nama_ayah" placeholder="Nama Ayah" type="text" value="<?= set_value('nama_ayah') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Nama Ibu</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="nama_ibu" placeholder="Nama Ibu" type="text" value="<?= set_value('nama_ibu') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Pekerjaan Ayah</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="pekerjaan_ayah" placeholder="Pekerjaan Ayah" type="text" value="<?= set_value('pekerjaan_ayah') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Pekerjaan Ibu</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="pekerjaan_ibu" placeholder="Pekerjaan Ibu" type="text" value="<?= set_value('pekerjaan_ibu') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>No Telp. Ayah</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="nohp_ayah" placeholder="No Telp. Ayah" type="text" value="<?= set_value('nohp_ayah') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>No. Hp. Ibu</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="nohp_ibu" placeholder="No. Hp. Ibu" type="text" value="<?= set_value('nohp_ibu') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Alamat Ayah</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="alamat_ayah" placeholder="Alamat Ayah" type="text" value="<?= set_value('alamat_ayah') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Alamat Ibu</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="alamat_ibu" placeholder="Alamat Ibu" type="text" value="<?= set_value('alamat_ibu') ?>">
              </div>
            </div>
          </div>

          <hr>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Pengalaman Organisasi</strong></label>
              </div>
              <div class="col-md-8">
                <textarea name="pengalaman_organisasi" placeholder="Pengalaman organisasi" class="form-control" cols="30" rows="10"><?= set_value('pengalaman_organisasi'); ?></textarea>
                <small>Pisahkan dengan koma (;) jika lebih dari 1</small>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Hobi</strong></label>
              </div>
              <div class="col-md-8">
                <textarea name="hobi" placeholder="Hobi" class="form-control" cols="30" rows="10"><?= set_value('hobi'); ?></textarea>
                <small>Pisahkan dengan koma (;) jika lebih dari 1</small>
              </div>
            </div>
          </div>



          <button class="btn btn-success" type="submit"><i class="fa fa-folder"></i> Registrasi</button><br><br>
          <p>Sudah punya akun? silakan <a href="<?= base_url('home/auth') ?>">Login</a></p>
          <p class="mt-5 mb-3 text-muted">© 2020</p>


        </form>
      </div>
    </div>
  </div>
</div>