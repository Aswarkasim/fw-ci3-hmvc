<?php $this->load->view('user/nav'); ?>

<div class="jumbotron">

  <div class="container">
    <style>
      td {
        padding-bottom: 10px;
        padding-top: 10px;
      }
    </style>
    <strong>
      <table>
        <tr>
          <td width="150px" align="left">Nama</td>
          <td>: Ikram Anas</td>
        </tr>

        <tr>
          <td align="left">Jenis Kelamin</td>
          <td>: Laki-laki</td>
        </tr>

        <tr>
          <td align="left">Tempat Lahir</td>
          <td>: Makassar</td>
        </tr>

        <tr>
          <td align="left">Tanggal Lahir</td>
          <td>: 8 April 1998</td>
        </tr>

        <tr>
          <td align="left">Handphone</td>
          <td>: 08512323232</td>
        </tr>

        <tr>
          <td align="left">Pekerjaan</td>
          <td>: Programmer</td>
        </tr>

        <tr>
          <td align="left">Penghasilan</td>
          <td>: Rp. 8.000.000</td>
        </tr>

      </table>
      <a href="<?= base_url('user/pribadi/edit'); ?>" class="btn btn-md btn-primary"><i class="fa fa-edit"></i> Edit</a>
    </strong>

  </div>
</div>