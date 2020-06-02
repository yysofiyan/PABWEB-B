<h1> Halaman Utama</h1>
<ul>
    <li>
        <?php echo anchor('mahasiswa','Data Mahasiswa') ?>
    </li>

    <li>
        <?php echo anchor('prodi','Data Program Studi') ?>

    </li>

</ul>
<p>
    <?php
    $nama_lengkap = $this->session->userdata('nama_lengkap');
    echo "Wilujeng Sumping {$nama_lengkap} !";
    ?>

    <p>
            <?php echo anchor('auth/hapus_session','Hapus Session Nama Lengkap') ?>
    </p>

    
<?php echo anchor('logout','Logout') ?> 