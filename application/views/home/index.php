<link rel="stylesheet" href="<?php echo base_url('assets/userpage/css/home.css?v=1.0'); ?>">

<!-- Banner / Hero Section -->
<div class="hero">
    <h1 class="hero-caption">Portal Olahraga UBG</h1>
    <h2>Informasi Olahraga Paling Update dan Akurat</h2>
</div>

<?php if (empty($latest_news)): ?>
    <div class="container cm-home-empty-news">
        <div class="alert alert-info text-center cm-alert cm-home-empty-alert">
            <h3>Belum ada berita yang diterbitkan.</h3>
            <p>Silakan tambahkan data berita baru di database atau melalui panel admin.</p>
        </div>
    </div>
<?php else: ?>

    <!-- Section TERKINI (Latest News Grid) -->
    <div class="container cm-home-section">
        <div class="colormag-category-header cm-home-category-header">
            <h2 class="colormag-category-title">
                Berita Terkini
            </h2>
        </div>

        <div class="row">
            <!-- Main Featured (Left) -->
            <div class="col-md-7 col-sm-12">
                <?php
                if (isset($latest_news[0])):
                    $n = $latest_news[0];
                    $thumb = $n->thumbnail;
                    $img_src = (strpos($thumb, 'http') === 0) ? $thumb : base_url('upload/' . $thumb);
                ?>
                    <div class="cm-featured-large">
                        <a href="<?php echo site_url('news/' . $n->news_slug); ?>">
                            <img src="<?php echo $img_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($n->title); ?>">
                            <div class="cm-featured-overlay">
                                <span class="cm-badge"><?php echo strtoupper($n->name_type); ?></span>
                                <h2 class="cm-featured-title"><?php echo $n->title; ?></h2>
                                <div class="cm-featured-meta">
                                    <span><i class="fa fa-user"></i> <?php echo $n->fullname; ?></span>
                                    <span><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($n->created_at)); ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Small items (Right) -->
            <div class="col-md-5 col-sm-12">
                <div class="cm-featured-small-list">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        if (isset($latest_news[$i])) {
                            $n = $latest_news[$i];
                            $thumb = $n->thumbnail;
                            $img_src = (strpos($thumb, 'http') === 0) ? $thumb : base_url('upload/' . $thumb);
                    ?>
                            <a href="<?php echo site_url('news/' . $n->news_slug); ?>" class="cm-featured-small-item">
                                <div class="cm-featured-small-thumb">
                                    <img src="<?php echo $img_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($n->title); ?>">
                                </div>
                                <div class="cm-featured-small-info">
                                    <span class="cm-featured-small-category"><?php echo $n->name_type; ?></span>
                                    <h3 class="cm-featured-small-title"><?php echo $n->title; ?></h3>
                                    <div class="cm-featured-small-meta">
                                        <span><i class="fa fa-user"></i> <?php echo $n->fullname; ?></span>
                                        <span><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($n->created_at)); ?></span>
                                    </div>
                                </div>
                            </a>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Section PERTANDINGAN TERBARU -->
    <div class="container cm-home-section-tight">
        <div class="colormag-category-header cm-home-category-header">
            <h2 class="colormag-category-title">
                <a href="<?php echo site_url('pertandingan'); ?>">Pertandingan Terbaru</a>
            </h2>
            <a href="<?php echo site_url('pertandingan'); ?>" class="colormag-category-more">
                Semua Jadwal <i class="fa fa-angle-double-right"></i>
            </a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cm-home-match-list">
                    <?php if (empty($latest_matches)): ?>
                        <p class="cm-home-empty-text">Belum ada jadwal pertandingan dipublikasikan.</p>
                    <?php else: ?>
                        <?php foreach ($latest_matches as $match): ?>
                            <div class="cm-home-match-row">
                                <div class="cm-home-match-date">
                                    <i class="fa fa-calendar"></i>
                                    <span><?php echo date('d M Y - H:i', strtotime($match->match_date)); ?> WIB (<?php echo $match->name_league; ?>)</span>
                                </div>
                                <div class="cm-home-match-teams">
                                    <div class="cm-home-match-team cm-home-match-team-left">
                                        <span class="cm-home-match-team-name"><?php echo $match->club_1; ?></span>
                                        <img src="<?php echo (strpos($match->logo_club_1, 'http') === 0) ? $match->logo_club_1 : base_url('upload/' . $match->logo_club_1); ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="" class="cm-home-match-logo">
                                    </div>
                                    <div class="cm-home-match-score">
                                        <?php echo $match->club_1_score; ?> - <?php echo $match->club_2_score; ?>
                                    </div>
                                    <div class="cm-home-match-team cm-home-match-team-right">
                                        <img src="<?php echo (strpos($match->logo_club_2, 'http') === 0) ? $match->logo_club_2 : base_url('upload/' . $match->logo_club_2); ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="" class="cm-home-match-logo">
                                        <span class="cm-home-match-team-name"><?php echo $match->club_2; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Kategori Berita -->
    <section id="contant" class="contant main-heading team cm-home-news-section">
        <?php foreach ($news_by_sport as $sport_name => $sport_news): ?>
            <?php if (!empty($sport_news)): ?>
                <div class="container">
                    <div class="colormag-category-header">
                        <h2 class="colormag-category-title">
                            <a href="<?php echo site_url('sport/' . str_replace(' ', '-', strtolower($sport_name))); ?>">
                                <?php echo $sport_name; ?>
                            </a>
                        </h2>
                        <a href="<?php echo site_url('sport/' . str_replace(' ', '-', strtolower($sport_name))); ?>" class="colormag-category-more">
                            Lihat Semua <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>

                    <div class="row category-news-row cm-home-category-row">
                        <?php foreach ($sport_news as $news):
                            $thumb = $news->thumbnail;
                            $img_src = (strpos($thumb, 'http') === 0) ? $thumb : base_url('upload/' . $thumb);
                        ?>
                            <div class="col-md-4 col-sm-6 col-xs-12 cm-home-news-column">
                                <div class="colormag-news-card">
                                    <div class="card-thumb">
                                        <a href="<?php echo site_url('news/' . $news->news_slug); ?>" class="cm-home-card-link">
                                            <img src="<?php echo $img_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($news->title); ?>" />
                                        </a>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-meta">
                                            <span><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($news->created_at)); ?></span>
                                            <span class="cm-home-card-meta-author"><i class="fa fa-user"></i> <?php echo $news->fullname; ?></span>
                                        </div>
                                        <h3 class="cm-clamp-2"><a href="<?php echo site_url('news/' . $news->news_slug); ?>"><?php echo $news->title; ?></a></h3>
                                        <p class="cm-clamp-2"><?php echo htmlspecialchars($news->description); ?></p>
                                        <a href="<?php echo site_url('news/' . $news->news_slug); ?>" class="news-card-btn">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </section>

    <!-- Section ATLET UNGGULAN -->
    <div class="container cm-home-section-athletes">
        <div class="colormag-category-header cm-home-category-header">
            <h2 class="colormag-category-title">
                <a href="<?php echo site_url('atlet'); ?>">Atlet Unggulan</a>
            </h2>
            <a href="<?php echo site_url('atlet'); ?>" class="colormag-category-more">
                Semua Atlet <i class="fa fa-angle-double-right"></i>
            </a>
        </div>
        <div class="row">
            <?php if (empty($latest_athletes)): ?>
                <div class="col-md-12">
                    <p class="cm-home-empty-text">Belum ada profil atlet terdaftar.</p>
                </div>
            <?php else: ?>
                <?php foreach ($latest_athletes as $athlete):
                    $photo_src = (strpos($athlete->photo, 'http') === 0) ? $athlete->photo : base_url('upload/' . $athlete->photo);
                ?>
                    <div class="col-md-2 col-sm-4 col-xs-6 cm-home-athlete-column">
                        <div class="cm-athlete-card">
                            <div class="cm-athlete-photo-container">
                                <a href="<?php echo site_url('atlet/detail/' . $athlete->id); ?>">
                                    <img src="<?php echo $photo_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($athlete->name); ?>">
                                </a>
                            </div>
                            <div class="cm-athlete-info">
                                <span class="cm-athlete-pos">#<?php echo $athlete->backNumber; ?> <?php echo $athlete->player_type; ?></span>
                                <h4><a href="<?php echo site_url('atlet/detail/' . $athlete->id); ?>"><?php echo $athlete->name; ?></a></h4>
                                <span class="cm-athlete-club"><?php echo $athlete->club_name; ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- Section KLUB TERBARU -->
    <div class="container cm-home-section-clubs">
        <div class="colormag-category-header cm-home-category-header">
            <h2 class="colormag-category-title">
                <a href="<?php echo site_url('klub'); ?>">Klub Terkini</a>
            </h2>
            <a href="<?php echo site_url('klub'); ?>" class="colormag-category-more">
                Semua Klub <i class="fa fa-angle-double-right"></i>
            </a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cm-home-club-list">
                    <?php if (empty($latest_clubs)): ?>
                        <p class="cm-home-empty-text">Belum ada klub terdaftar.</p>
                    <?php else: ?>
                        <?php foreach ($latest_clubs as $club):
                            $logo_src = (strpos($club->logo, 'http') === 0) ? $club->logo : base_url('upload/' . $club->logo);
                        ?>
                            <a href="<?php echo site_url('klub/detail/' . $club->id); ?>" class="cm-home-club-card">
                                <img src="<?php echo $logo_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($club->name); ?>">
                                <span><?php echo $club->name; ?></span>
                            </a>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php endif; ?>