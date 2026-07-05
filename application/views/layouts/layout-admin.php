<?php
$adminSection = $this->uri->segment(2);
$masterSections = array('sport-type', 'player-type', 'league', 'sport-club', 'foul-type', 'foul');
$foulSections = array('foul-type', 'foul');
$pageTitles = array(
  'dashboard' => 'Dashboard',
  'user' => 'User',
  'match' => 'Match',
  'news' => 'News',
  'athlete' => 'Athlete Profile',
  'sport-type' => 'Sport Type',
  'player-type' => 'Player Type',
  'league' => 'League',
  'sport-club' => 'Sport Club',
  'foul-type' => 'Foul Type',
  'foul' => 'Foul'
);
$pageTitle = isset($pageTitles[$adminSection]) ? $pageTitles[$adminSection] : 'Dashboard';
?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <title>Admin | <?php echo $pageTitle; ?></title>
  <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet">
  <style>
    #loader {
      transition: all .3s ease-in-out;
      opacity: 1;
      visibility: visible;
      position: fixed;
      height: 100vh;
      width: 100%;
      background: #fff;
      z-index: 90000
    }

    #loader.fadeOut {
      opacity: 0;
      visibility: hidden
    }

    .spinner {
      width: 40px;
      height: 40px;
      position: absolute;
      top: calc(50% - 20px);
      left: calc(50% - 20px);
      background-color: #333;
      border-radius: 100%;
      -webkit-animation: sk-scaleout 1s infinite ease-in-out;
      animation: sk-scaleout 1s infinite ease-in-out
    }

    @-webkit-keyframes sk-scaleout {
      0% {
        -webkit-transform: scale(0)
      }

      100% {
        -webkit-transform: scale(1);
        opacity: 0
      }
    }

    @keyframes sk-scaleout {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0)
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 0
      }
    }

    .sidebar-menu .nav-item.actived>a,
    .sidebar-menu .nav-item.actived>.dropdown-toggle {
      background: rgba(49, 113, 255, .08);
      color: #0f172a;
      font-weight: 600;
    }

    .admin-empty-state {
      border: 1px dashed #cbd5e1;
      color: #64748b;
      padding: 16px;
      text-align: center;
      background: #f8fafc;
    }

    .admin-score-badge {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-width: 64px;
      padding: 6px 10px;
      border-radius: 6px;
      background: #eef2ff;
      color: #3730a3;
      font-weight: 700;
    }

    .admin-status-badge {
      display: inline-flex;
      align-items: center;
      padding: 5px 10px;
      border-radius: 999px;
      font-size: 12px;
      font-weight: 700;
      text-transform: capitalize;
    }

    .admin-status-badge.is-published {
      background: #dcfce7;
      color: #166534;
    }

    .admin-status-badge.is-draft {
      background: #fef3c7;
      color: #92400e;
    }
  </style>
  <script defer="defer" src="<?php echo site_url('vendor/admin/dist/main.js') ?>"></script>
</head>

<body class="app">
  <div id="loader">
    <div class="spinner"></div>
  </div>
  <script>
    window.addEventListener("load", (function() {
      const t = document.getElementById("loader");
      setTimeout((function() {
        t.classList.add("fadeOut");
        // Otomatis trigger event resize agar kolom tabel DataTables lurus (tidak geser)
        setTimeout((function() {
          window.dispatchEvent(new Event('resize'));
        }), 400);
      }), 300)
    }))
  </script>
  <div>
    <!-- #Left Sidebar ==================== -->
    <div class="sidebar">
      <div class="sidebar-inner">
        <!-- ### $Sidebar Header ### -->
        <div class="sidebar-logo">
          <div class="peers ai-c fxw-nw">
            <div class="peer peer-greed">
              <a class="sidebar-link td-n" href="/">
                <div class="peers ai-c fxw-nw">
                  <div class="peer">
                    <div class="logo">
                      <!-- <img src="<?php echo site_url('vendor/admin/dist/assets/static/images/logo.png') ?>" alt=""> -->
                    </div>
                  </div>
                  <div class="peer peer-greed">
                    <h5 class="lh-1 mB-0 logo-text"><?php echo ucfirst($this->session->role); ?></h5>
                  </div>
                </div>
              </a>
            </div>
            <div class="peer">
              <div class="mobile-toggle sidebar-toggle">
                <a href="" class="td-n">
                  <i class="ti-arrow-circle-left"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- ### $Sidebar Menu ### -->
        <ul class="sidebar-menu scrollable pos-r">
          <li class="nav-item mT-30 <?php echo $adminSection === 'dashboard' ? 'actived' : ''; ?>">
            <a class="sidebar-link" href="<?php echo site_url('admin/dashboard') ?>">
              <span class="icon-holder">
                <i class="c-blue-500 ti-dashboard"></i>
              </span>
              <span class="title">Dashboard</span>
            </a>
          </li>
          <?php if ($this->session->role === 'admin'): ?>
            <li class="nav-item <?php echo $adminSection === 'user' ? 'actived' : ''; ?>">
              <a class="sidebar-link" href="<?php echo site_url('admin/user') ?>">
                <span class="icon-holder">
                  <i class="c-pink-500 ti-user"></i>
                </span>
                <span class="title">User</span>
              </a>
            </li>
          <?php endif; ?>
          <li class="nav-item <?php echo $adminSection === 'match' ? 'actived' : ''; ?>">
            <a class="sidebar-link" href="<?php echo site_url('admin/match') ?>">
              <span class="icon-holder">
                <i class="c-deep-orange-500 ti-calendar"></i>
              </span>
              <span class="title">Match</span>
            </a>
          </li>
          <li class="nav-item <?php echo $adminSection === 'news' ? 'actived' : ''; ?>">
            <a class="sidebar-link" href="<?php echo site_url('admin/news') ?>">
              <span class="icon-holder">
                <i class="c-deep-purple-500 ti-clipboard"></i>
              </span>
              <span class="title">News</span>
            </a>
          </li>
          <li class="nav-item <?php echo $adminSection === 'athlete' ? 'actived' : ''; ?>">
            <a class="sidebar-link" href="<?php echo site_url('admin/athlete') ?>">
              <span class="icon-holder">
                <i class="c-light-blue-500 ti-id-badge"></i>
              </span>
              <span class="title">Athlete Profile</span>
            </a>
          </li>
          <li class="nav-item dropdown <?php echo in_array($adminSection, $masterSections) ? 'actived' : ''; ?>">
            <a class="dropdown-toggle" href="javascript:void(0);">
              <span class="icon-holder">
                <i class="c-teal-500 ti-view-list-alt"></i>
              </span>
              <span class="title">Data Master</span>
              <span class="arrow">
                <i class="ti-angle-right"></i>
              </span>
            </a>
            <ul class="dropdown-menu">
              <li class="nav-item dropdown <?php echo $adminSection === 'sport-type' ? 'actived' : ''; ?>">
                <a href="<?php echo site_url('admin/sport-type'); ?>">
                  <span>Sport Type</span>
                </a>
              </li>
              <li class="nav-item dropdown <?php echo $adminSection === 'player-type' ? 'actived' : ''; ?>">
                <a href="<?php echo site_url('admin/player-type'); ?>">
                  <span>Player Type</span>
                </a>
              </li>
              <li class="nav-item dropdown <?php echo $adminSection === 'league' ? 'actived' : ''; ?>">
                <a href="<?php echo site_url('admin/league'); ?>">
                  <span>League</span>
                </a>
              </li>
              <li class="nav-item dropdown <?php echo $adminSection === 'sport-club' ? 'actived' : ''; ?>">
                <a href="<?php echo site_url('admin/sport-club'); ?>">
                  <span>Sport Club</span>
                </a>
              </li>
              <li class="nav-item dropdown <?php echo in_array($adminSection, $foulSections) ? 'actived' : ''; ?>">
                <a href="javascript:void(0);">
                  <span>Foul Data</span>
                  <span class="arrow">
                    <i class="ti-angle-right"></i>
                  </span>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="<?php echo $adminSection === 'foul-type' ? 'fw-600 c-blue-500' : ''; ?>" href="<?php echo site_url('admin/foul-type'); ?>">Foul Type</a>
                  </li>
                  <li>
                    <a class="<?php echo $adminSection === 'foul' ? 'fw-600 c-blue-500' : ''; ?>" href="<?php echo site_url('admin/foul'); ?>">Foul</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!-- #Main ============================ -->
    <div class="page-container">
      <!-- ### $Topbar ### -->
      <div class="header navbar">
        <div class="header-container">
          <ul class="nav-left">
            <li>
              <a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);">
                <i class="ti-menu"></i>
              </a>
            </li>
          </ul>
          <ul class="nav-right">
            <li class="dropdown">
              <a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-bs-toggle="dropdown">
                <div class="peer mR-10">
                  <img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt="">
                </div>
                <div class="peer">
                  <span class="fsz-sm c-grey-900"><?php echo $this->session->username; ?></span>
                </div>
              </a>
              <ul class="dropdown-menu fsz-sm">
                <li>
                  <a href="<?php echo site_url('logout') ?>" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700">
                    <i class="ti-power-off mR-10"></i>
                    <span>Logout</span>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- ### $App Screen Content ### -->
      <main class="main-content bgc-grey-100">
        <?php echo $content ?>
      </main>
      <!-- ### $App Screen Footer ### -->
      <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
        <span>Copyright &copy; <?php echo date('Y'); ?> by <a href="https://universitasbumigora.ac.id/" target="_blank">Universitas BumiGora</a>. All rights reserved.</span>
      </footer>
    </div>
  </div>
</body>

</html>
