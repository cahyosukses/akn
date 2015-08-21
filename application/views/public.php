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
<!-- Homepage Only Scripts -->
<script type="text/javascript" src="<?= base_url('assets/sched/scripts/jquery.cycle.min.js') ?>"></script>
<script type="text/javascript">
$(function() {
    $('#featured_slide').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 100,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>
<!-- End Homepage Only Scripts -->
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
        <h1><a href="index.html"><img src="<?= base_url('assets/img/logo-univ.png') ?>" /></a></h1>
    </div>
    <div id="topnav">
      <?= $this->load->view('nav') ?>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
    <div id="featured_slide">
          <?php foreach ($slider as $data) { ?>
        <div class="featured_box"><a href="#"><img src="<?= base_url('assets/img/slider/'.$data->gambar) ?>" alt="" width="450px" /></a>
            <div class="floater">
              <h2><?= $data->judul ?></h2>
              <p><?= substr($data->isi, 0, 400) ?> ...</p>
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </div>
          </div>
          <?php } ?>
    </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="homecontent">
    <div class="fl_left">
      <div class="column2">
        <ul>
            <?php foreach ($sambutan as $i => $data) { ?>
          <li class="<?= ($i%2===1)?'last':'' ?>">
            <h2><?= $data->judul ?></h2>
            <div class="imgholder"><img src="<?= base_url('assets/img/profiles/'.$data->gambar) ?>" alt="" width="240" height="130" /><small>Foto: <i><?= $data->link ?></i></small></div>
            <p><?= substr($data->isi, 0, 200) ?></p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
            <?php } ?>
        </ul>
        <br class="clear" />
      </div>
      <div class="column2">
        <h2>About This Free CSS Template !</h2>
        <img class="imgl" src="<?= base_url('assets/img/demo/imgl.gif') ?>" alt="" />
        <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>.</p>
        <p>This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
        <p>Morbitincidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anterdumnullam interdum eros dui urna consequam ac nisl nullam ligula vestassa.</p>
        <p>Condimentumfelis et amet tellent quisquet a leo lacus nec augue accumsan. Sagiftislaorem dolor ipsum at urna et pharetium malesuada nis consectus odio.</p>
      </div>
    </div>
    <div class="fl_right">
      <h2>Berita Terbaru</h2>
      <ul>
          <?php foreach ($berita as $data) { ?>
            <li>
                <div class="imgholder"><a href="#"><img src="<?= base_url('assets/img/berita/'.$data->gambar) ?>" alt="" /></a></div>
                <b><strong><a href="<?= base_url('main/detailnews/'.$data->id.'/'.post_slug($data->judul)) ?>"><?= $data->judul ?></a></strong></b><br/>
                <small>Tanggal: <?= datetimefmysql($data->tanggal, true) ?></small>
                <p><?= substr($data->isi, 0, 200) ?> ...</p>
            </li>
          <?php } ?>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="footer">
    <div class="footbox">
      <h2>Kontak Kami</h2>
      <ul>
        <li>Alamat: <?= $contact->alamat ?> <?= $contact->kode_pos ?></li>
        <li>Telp: <?= $contact->telp ?></li>
        <li>Fax: <?= $contact->fax ?></li>
        <li>Email: <?= $contact->email ?></li>
        <li class="last">Website: <?= $contact->website ?></li>
      </ul>
    </div>
    
<!--    <div class="footbox last">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>-->
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>