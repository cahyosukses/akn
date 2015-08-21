<nav>
    <ul class="cf">
        <li> <a href="<?= base_url('') ?>"><i class="fa fa-home"></i> Home</a></li>
        <li><a class="dropdown">Profile</a>
            <ul>
                <?php 
                $profile = $this->m_main->get_list_profile()->result();
                foreach ($profile as $data) { ?>
                <li><a href="<?= base_url('main/detailprofile/'.$data->id.'/'.  post_slug($data->judul)) ?>"><?= $data->judul ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <li><a class="dropdown" onclick="javascript:;;">Program Studi</a>
            <ul>
                <?php 
                $prodi = $this->m_main->get_list_prodi()->result();
                foreach ($prodi as $data) { ?>
                <li><a href="<?= base_url('') ?>"><?= $data->link ?></a></li>
                <?php } ?>
            </ul>
        </li>
        <li><a href="">Publikasi Ilmiah</a></li>
        <li><a href="">Kontak</a></li>
        <li class="last"><a class="dropdown" href="">Info PMB</a>
            <ul>
                <li><a href="#">Pengumuman</a></li>
                <li><a href="#">Form Pendaftaran</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!--<ul>
    <li class="active"><a href="<?= base_url('') ?>">Home</a></li>
    <li><a href="">Profil</a></li>
    <li><a href="">Program Studi</a></li>
    <li><a href="">Publikasi Ilmiah</a></li>
    <li><a href="">Kontak</a></li>
    <li class="last"><a href="">Info PMB</a></li>
  </ul>-->