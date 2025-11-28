
     <footer class="footer">

  <!-- FONT GOOGLE -->
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
  <!-- FONT AWESOME ICON -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .footer {
      background-color: #d0e8f2; /* Soft Blue Background */
      color: #333;
      padding: 50px 20px 20px;
      font-family: 'Segoe UI', sans-serif;
      position: relative;
      overflow: hidden;
    }

    /* Background dengan ikon mesin cuci & baju, gambar diperbesar dan warna diperkuat */
    .footer::before {
      content: "";
      background: url('https://cdn-icons-png.flaticon.com/512/2040/2040670.png') no-repeat left bottom,
                  url('https://cdn-icons-png.flaticon.com/512/891/891462.png') no-repeat right top;
      background-size: 180px, 140px; /* diperbesar */
      opacity: 0.15; /* opacity diperkuat supaya lebih terlihat */
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      z-index: 0;
    }

    .footer-container {
      position: relative;
      z-index: 1;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      max-width: 1200px;
      margin: auto;
    }

    .footer-about,
    .footer-links,
    .footer-contact,
    .footer-social {
      flex: 1 1 200px;
      margin: 20px;
    }

    .footer h3 {
      font-family: 'Fredoka', sans-serif;
      font-size: 26px;
      font-weight: 600;
      color: #000; /* Hitam untuk "WinFresh" */
    }

    .footer h3 span {
      color: #5da9e9; /* Soft Blue untuk "Laundry" */
    }

    .footer h4 {
      color: #2b2b2b;
      margin-bottom: 15px;
      font-weight: bold;
    }

    .footer p, .footer a {
      color: #444;
      font-size: 14px;
      line-height: 1.6;
      text-decoration: none;
    }

    .footer a:hover {
      color: #000;
    }

    .footer-links ul {
      list-style: none;
      padding: 0;
    }

    .footer-links ul li {
      margin-bottom: 10px;
      display: flex;
      align-items: center;
    }

    .footer-links ul li i {
      margin-right: 8px;
      color: #5da9e9;
      font-size: 18px;
      width: 20px;
      text-align: center;
    }

    .footer-social .social-icons {
      display: flex;
      gap: 15px;
      margin-top: 10px;
      justify-content: flex-start;
    }

    .footer-social i {
      font-size: 20px;
      transition: transform 0.3s;
    }

    .footer-social a:nth-child(1) i { color: #e39ab8; } /* Instagram */
    .footer-social a:nth-child(2) i { color: #8cb7e0; } /* Facebook */
    .footer-social a:nth-child(3) i { color: #9fe7a4; } /* WhatsApp */

    .footer-social i:hover {
      transform: scale(1.2);
    }

    /* Tambahan style untuk teks nama akun di bawah ikon */
    .social-names {
      display: flex;
      gap: 45px; /* jarak antar teks supaya rata dengan ikon */
      margin-top: 5px;
      font-size: 13px;
      color: #444;
      font-family: 'Segoe UI', sans-serif;
    }

    /* Kotak hiasan pojok bawah kanan */
    .footer::after {
      content: "";
      position: absolute;
      width: 70px;
      height: 70px;
      background: #5da9e9;
      border-radius: 15px 0 0 0;
      bottom: 0;
      right: 0;
      opacity: 0.15;
      z-index: 0;
      box-shadow: 2px -2px 10px rgba(0,0,0,0.1);
    }

    .footer-bottom {
      text-align: center;
      margin-top: 30px;
      font-size: 13px;
      color: #666;
      border-top: 1px solid #ccc;
      padding-top: 15px;
      position: relative;
      z-index: 1;
    }

    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
        align-items: flex-start;
      }

      .footer-about, .footer-links, .footer-contact, .footer-social {
        margin-bottom: 30px;
      }

      /* Agar teks nama akun tidak terlalu mepet */
      .social-names {
        gap: 25px;
        flex-wrap: wrap;
      }
    }
  </style>

  <div class="footer-container">

    <!-- Logo dan Deskripsi -->
    <div class="footer-about">
      <h3>WinFresh <span>Laundry</span></h3>
      <p>Solusi laundry cepat, bersih, dan terpercaya untuk kebutuhan harian Anda.</p>
    </div>

    <!-- Layanan -->
    <div class="footer-links">
      <h4>Layanan</h4>
      <ul>
        <li><i class="fas fa-tshirt"></i> Cuci Kering</li>
        <li><i class="fas fa-water"></i> Cuci Setrika</li>
        <li><i class="fas fa-bolt"></i> Layanan Express</li>
      </ul>
    </div>

    <!-- Kontak -->
    <div class="footer-contact">
      <h4>Kontak Kami</h4>
      <p><i class="fas fa-map-marker-alt"></i> Jl.Air Panas No.13, Nglimut</p>
      <p><i class="fas fa-phone"></i> 0812-3456-7890</p>
      <p><i class="fas fa-clock"></i> Senin - Sabtu: 08.00 - 20.00</p>
    </div>

    <!-- Sosial Media -->
    <div class="footer-social">
      <h4>Ikuti Kami</h4>
      <div class="social-icons">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
      </div>
      <div class="social-names">
        <div>@winfreshlaundry</div>
        
        <div>&nbsp;</div> <!-- kosong untuk WA, atau bisa diganti no WA -->
      </div>
    </div>

  </div>

  <div class="footer-bottom">
    <p>&copy; <?php echo date("Y"); ?> WinFresh Laundry. All rights reserved.</p>
  </div>

</footer>
