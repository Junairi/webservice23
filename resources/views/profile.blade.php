<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <title>Profile Pandia</title>
</head>
<body>
  <section class="banner">
    <div class="banner--content">
      <h3 class="name"><?= $name; ?></h3>
      <h1 class="designation">Pelajar di Universitas Bumigora</h1>
    </div>    
  </section>
  <section id="about"><!-- about - start -->
    <div class="content">
      <h2>About Me</h2>
      <div class="about-container">
        <div class="about-container-left">
          <p>Junairi Pandia adalah seorang Mahasiswa yang sekarang (saat halaman ini ditulis) 
            masih menempuh studi-nya di Universitas Bumigora.
          </p>
          <h3>Riwayat Pendidikan</h3>
          <ul>
            <li>SDN 2 Mujur</li>
            <li>MTSN 1 Praya</li>
            <li>MAN 1 Lombok Tengah</li>
          </ul>
          <p>Dan sampai saat ini masih mengenyam pendidikan S1 di Universitas Bumigora</p>
          <h4>Ketertarikan</h4>
          <p>Pandia sendiri tertarik pada teknologi yang mendasari internet bisa bekerja dengan semestinya,
             bagaimana aplikasi bisa terhubung satu dengan lainnya yang membentuk jaringan yang kompleks.
          </p>
        </div>
        <div class="about-container-right">
          <img src="img/pandia.jpg" alt="<?= $name ?>">
        </div>
      </div>
    </div> <!-- about - end -->
  </section>
  <section id="skill"> <!-- Sedang Mempelajari - start -->
    <div class="content skill--content">
      <div class="left">
        <h2>Currently Learning:</h2>
        <p>Saat ini sedang fokus untuk mempelajari hal-hal yang berkaitan dengan back-end 
          development. Seperti:
        </p>
      </div>
      <div class="right">
        <div class="item">
          <img src="img/javascript.png" alt="Javascript">
          <h3>Javascript</h3>
          <p>Salah satu bahasa pemrograman yang digunakan untuk web development, baik front-end 
            maupun back-end.
          </p>
        </div>
        <div class="item">
          <img src="/img/nodejs.png" alt="NodeJs">
          <h3>NodeJs</h3>
          <p>Merupakan environment untuk javascript yang bersifat open source dan cross-platform.</p>
        </div>
      </div>
    </div>
  </section><!-- Sedang Mempelajari - end -->
  </div>
</body>
</html>