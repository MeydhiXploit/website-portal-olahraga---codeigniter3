<div id="mainContent">
  <style>
    .admin-quick-guide {
      overflow: hidden;
    }

    .admin-quick-guide .list-group-item {
      gap: 16px;
      padding: 14px 0;
      background: transparent;
    }

    .admin-quick-action {
      min-width: 132px;
      border: 0;
      border-radius: 6px;
      background: #1d4ed8;
      color: #fff !important;
      font-weight: 700;
      text-align: center;
      box-shadow: 0 8px 18px rgba(29, 78, 216, .18);
    }

    .admin-quick-action:hover,
    .admin-quick-action:focus {
      background: #1e40af;
      color: #fff !important;
      text-decoration: none;
    }
  </style>
  <div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">Dashboard</h4>
    
    <!-- Welcome Widget -->
    <div class="row mB-30">
      <div class="col-md-12">
        <div class="bgc-white bd bdrs-3 p-30">
          <h3 class="c-grey-900">Selamat Datang, <strong><?php echo $this->session->username; ?></strong>!</h3>
          <p class="c-grey-600 mB-0">Ini adalah halaman panel admin untuk mengelola website Portal Berita Olahraga. Anda dapat menambah, mengubah, dan menghapus berita, data klub, informasi atlet, serta jadwal pertandingan melalui menu navigasi di sebelah kiri.</p>
        </div>
      </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row">
      <!-- Total Users -->
      <div class="col-md-3">
        <div class="layers bd bgc-white p-20 bdrs-3">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1">Total Users</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-c jc-sb fxw-nw">
              <div class="peer peer-greed">
                <h2 class="c-grey-900"><?php echo $total_user; ?></h2>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 p-10 bdrs-50p bgc-pink-50 c-pink-500" style="font-size: 24px;">
                  <i class="ti-user"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Total News -->
      <div class="col-md-3">
        <div class="layers bd bgc-white p-20 bdrs-3">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1">Total News</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-c jc-sb fxw-nw">
              <div class="peer peer-greed">
                <h2 class="c-grey-900"><?php echo $total_news; ?></h2>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 p-10 bdrs-50p bgc-purple-50 c-deep-purple-500" style="font-size: 24px;">
                  <i class="ti-clipboard"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Total Sport Clubs -->
      <div class="col-md-3">
        <div class="layers bd bgc-white p-20 bdrs-3">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1">Sport Clubs</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-c jc-sb fxw-nw">
              <div class="peer peer-greed">
                <h2 class="c-grey-900"><?php echo $total_club; ?></h2>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 p-10 bdrs-50p bgc-teal-50 c-teal-500" style="font-size: 24px;">
                  <i class="ti-flag-alt"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Total Athletes -->
      <div class="col-md-3">
        <div class="layers bd bgc-white p-20 bdrs-3">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1">Athletes</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-c jc-sb fxw-nw">
              <div class="peer peer-greed">
                <h2 class="c-grey-900"><?php echo $total_athlete; ?></h2>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 p-10 bdrs-50p bgc-blue-50 c-light-blue-500" style="font-size: 24px;">
                  <i class="ti-id-badge"></i>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Quick Navigation Tips -->
    <div class="row mT-30">
      <div class="col-md-6">
        <div class="bgc-white bd bdrs-3 p-20 admin-quick-guide">
          <h5 class="c-grey-900 mB-15">Panduan Cepat Admin</h5>
          <ul class="list-group list-group-flush">
            <?php if ($this->session->role === 'admin'): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mengelola Pengguna Website
              <a href="<?php echo site_url('admin/user')?>" class="btn btn-sm admin-quick-action">Kelola User</a>
            </li>
            <?php endif; ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Menulis / Mengedit Berita Olahraga
              <a href="<?php echo site_url('admin/news')?>" class="btn btn-sm admin-quick-action">Kelola Berita</a>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mengatur Profil Atlet Olahraga
              <a href="<?php echo site_url('admin/athlete')?>" class="btn btn-sm admin-quick-action">Kelola Atlet</a>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="bgc-white bd bdrs-3 p-20">
          <h5 class="c-grey-900 mB-15">Informasi Server & Sistem</h5>
          <table class="table table-striped table-sm mB-0">
            <tbody>
              <tr>
                <td><strong>Framework:</strong></td>
                <td>CodeIgniter 3.x</td>
              </tr>
              <tr>
                <td><strong>Database:</strong></td>
                <td>MariaDB / MySQL</td>
              </tr>
              <tr>
                <td><strong>PHP Version:</strong></td>
                <td><?php echo PHP_VERSION; ?></td>
              </tr>
              <tr>
                <td><strong>Environment:</strong></td>
                <td><?php echo ENVIRONMENT; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
