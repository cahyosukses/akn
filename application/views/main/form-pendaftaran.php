<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: School Education
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?= $title ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="shortcut icon" href="<?= base_url('assets/img/favicon.png') ?>" />
<link rel="stylesheet" href="<?= base_url('assets/sched/styles/layout.css') ?>" type="text/css" />
<link rel="stylesheet" href="<?= base_url('assets/plugins/font-awesome-4.3.0/css/font-awesome.min.css') ?>" type="text/css" />
<script type="text/javascript" src="<?= base_url('assets/sched/scripts/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/sched/scripts/jquery.slidepanel.setup.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.nicescroll.js') ?>"></script>
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>" rel="stylesheet" />
</head>
<body>
<div class="wrapper col0">
  <div id="topbar">
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="<?= base_url('') ?>"><img src="<?= base_url('assets/img/logo-univ.png') ?>" /></a></h1>
    </div>
    <div id="topnav">
        <?= $this->load->view('nav') ?>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Home</a></li>
      <li>&#187;</li>
      <li class="current"><?= $title ?></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="container">
    
        
                <h2><?= $title ?> </h2>
                <table class="formulir" width="70%" style="border: none;" cellspacing="0" cellpadding="0">
                    <tr><td width="40%">NAMA LENGKAP: *</td><td><input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" size="40"></td></tr>
                    <tr><td>TEMPAT LAHIR: *</td><td><input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control"></td></tr>
                    <tr><td>TANGGAL LAHIR: ( dd/mm/yyyy )*</td><td><input style="width: 150px;" type="text" name="tanggal_lahir" size=10 id="datepicker" class="form-control"></td></tr>
                    <tr><td>AGAMA: *</td><td>
                        <select name="agama" id="agama" class="form-control">
                            <option value="">Pilih ...</option>
                        <?php foreach ($agama as $agm) { ?>
                                <option value="<?= $agm ?>"><?= $agm ?></option>
                        <?php } ?>
                        </select>
                        </td>
                    </tr>
                    <tr><td>JENIS KELAMIN: *</td><td><select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <option selected="" value="">Silahkan Pilih</option>
                            <option value="L">laki-laki</option>
                            <option value="P">perempuan</option>
                            </select></td></tr>
                    <tr valign="top"><td>ALAMAT: *</td><td><textarea name="alamat_rumah" rows="4" class="form-control"></textarea></td></tr>
                    <tr><td>NO. TELP. RUMAH / HP:</td><td><input type="text" name="telp" class="form-control"></td></tr>
                    <tr valign="top"><td>NAMA ORANG TUA</td>
                        <td>
                            <table width="100%" style="border: none;" cellspacing="0">
                                <tr>
                                    <td width="20%">AYAH:</td><td width="80%"><input type="text" name="nama_ayah" id="nama_ayah" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td width="20%">IBU:</td><td width="80%"><input type="text" name="nama_ibu" id="nama_ibu" class="form-control" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr valign="top"><td>PEKERJAAN ORANG TUA</td>
                        <td>
                            <table width="100%" style="border: none;" cellspacing="0">
                                <tr>
                                    <td width="20%">AYAH:</td><td width="80%"><input type="text" name="nama_ayah" id="nama_ayah" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td width="20%">IBU:</td><td width="80%"><input type="text" name="nama_ibu" id="nama_ibu" class="form-control" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr valign="top"><td>PENGHASILAN RATA-RATA</td>
                        <td>
                            <table width="100%" style="border: none;" cellspacing="0">
                                <tr>
                                    <td width="20%">AYAH:</td><td width="80%"><input type="text" name="nama_ayah" id="nama_ayah" class="form-control" /></td>
                                </tr>
                                <tr>
                                    <td width="20%">IBU:</td><td width="80%"><input type="text" name="nama_ibu" id="nama_ibu" class="form-control" /></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
                    <tr><td></td><td>
                            <button  onclick="save_pendaftaran(); return false;" class="btn btn-primary btn-xlarge" ><i class="icon-user" style="font-size: 12px;"></i> Daftar</button>
                            <button class="btn" onclick="reset_form(); return false;"><i class="icon-refresh"></i>Reset</button>
                        </td></tr>
            </table>
    
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <?= $this->load->view('footbox') ?>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<?= $this->load->view('footer') ?>
</body>
</html>