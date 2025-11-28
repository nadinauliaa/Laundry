<footer class="footer-new">

  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- ICON -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    .footer-new {
      background: linear-gradient(to bottom, #e8f4ff, #d6e9ff);
      padding: 60px 20px 30px;
      font-family: 'Poppins', sans-serif;
      position: relative;
      overflow: hidden;
    }

    /* Background bubble dan wave */
    .footer-new::before {
      content: "";
      position: absolute;
      inset: 0;
      background: url('https://cdn-icons-png.flaticon.com/512/2907/2907253.png') no-repeat right bottom,
                  url('https://cdn-icons-png.flaticon.com/512/4149/4149678.png') no-repeat left top;
      background-size: 150px, 130px;
      opacity: 0.12;
      z-index: 0;
    }

    .footer-new-container {
      position: relative;
      z-index: 1;
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      max-width: 1200px;
      margin: auto;
      justify-content: space-between;
    }

    .footer-box {
      flex: 1 1 230px;
      background: rgba(255,255,255,0.7);
      padding: 20px;
      border-radius: 12px;
      backdrop-filter: blur(3px);
      border: 1px solid #c7dffc;
    }

    .footer-box h4 {
      font-weight: 600;
      color: #1e2a3a;
      margin-bottom: 15px;
      font-size: 20px;
    }

    .footer-brand {
      font-size: 26px;
      font-weight: 600;
      color: #1e2a3a;
    }

    .footer-brand span {
      color: #4d9fe7;
    }

    .footer-box p, .footer-box a {
      font-size: 14px;
      color: #555;
      text-decoration: none;
    }

    .footer-links ul {
      list-style: none;
      padding: 0;
    }

    .footer-links li {
      margin-bottom: 10px;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .footer-links i {
      color: #4d9fe7;
      font-size: 18px;
    }

    /* Social icons */
    .footer-social-icons {
      display: flex;
      gap: 12px;
      margin-top: 10px;
    }

    .footer-social-icons a {
      width: 38px;
      height: 38px;
      border-radius: 10px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #4d9fe7;
      font-size: 18px;
      border: 1px solid #c8dfff;
      transition: 0.3s;
    }

    .footer-social-icons a:hover {
      transform: translateY(-3px);
      background: #4d9fe7;
      color: #fff;
    }

    .footer-bottom {
      text-align: center;
      font-size: 13px;
      color: #555;
      margin-top: 40px;
      border-top: 1px solid #bcd3f1;
      padding-top: 15px;
    }

    @media (max-width: 768px) {
      .footer-new-container {
        flex-direction: column;
      }
    }
  </style>

  
  <div class="footer-new-container">

    <!-- Brand -->
    <div class="footer-box">
      <div class="footer-brand">NdinWash <span>Laundry</span></div>
      <p>Kenyamanan Anda adalah prioritas kami. Layanan laundry terpercaya dan cepat untuk kebutuhan harian.</p>
    </div>

    <!-- Layanan -->
    <div class="footer-box footer-links">
      <h4>Layanan Kami</h4>
      <ul>
        <li><i class="fas fa-soap"></i> Cuci Reguler</li>
        <li><i class="fas fa-burn"></i> Pengeringan Cepat</li>
        <li><i class="fas fa-shipping-fast"></i> Antar Jemput</li>
      </ul>
    </div>

    <!-- Kontak -->
    <div class="footer-box">
      <h4>Kontak</h4>
      <p><i class="fas fa-map-marker-alt"></i> Jl. Kepodang No.30, Semarang</p>
      <p><i class="fas fa-phone"></i> 0812-3456-7890</p>
      <p><i class="fas fa-clock"></i> 08.00 - 20.00 (Senin - Sabtu)</p>
    </div>

    <!-- Social -->
    <div class="footer-box">
      <h4>Ikuti Kami</h4>
      <div class="footer-social-icons">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
      </div>
    </div>

  </div>

  <div class="footer-bottom">
    &copy; <?php echo date("Y"); ?> NdinWash Laundry. All Rights Reserved.
  </div>

</footer>
