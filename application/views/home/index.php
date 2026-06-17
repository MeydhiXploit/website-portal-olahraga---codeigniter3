<style>
    /* Premium Home Styles */
    .cm-featured-large {
        position: relative;
        width: 100%;
        height: 400px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0,0,0,0.06);
        background-color: #000;
    }

    .cm-featured-large img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .cm-featured-large:hover img {
        transform: scale(1.05);
    }

    .cm-featured-overlay {
        position: absolute;
        bottom: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.4) 50%, rgba(0, 0, 0, 0) 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 25px;
        z-index: 2;
    }

    .cm-featured-title {
        color: #ffffff !important;
        font-size: 20px;
        font-weight: 800;
        line-height: 1.35;
        margin: 10px 0;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-shadow: 0 2px 4px rgba(0,0,0,0.4);
    }
    
    .cm-featured-title a {
        color: #ffffff !important;
        text-decoration: none;
    }

    .cm-featured-meta {
        font-size: 11px;
        color: #cccccc;
        display: flex;
        gap: 15px;
    }

    .cm-featured-meta span i {
        color: var(--primary-color);
        margin-right: 4px;
    }

    .cm-featured-small-list {
        display: flex;
        flex-direction: column;
        gap: 10px;
        height: 400px;
        justify-content: space-between;
    }

    .cm-featured-small-item {
        display: flex;
        gap: 15px;
        background: #ffffff;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        padding: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        text-decoration: none !important;
        height: 92px;
    }

    .cm-featured-small-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    }

    .cm-featured-small-thumb {
        width: 100px;
        height: 72px;
        border-radius: 6px;
        overflow: hidden;
        flex-shrink: 0;
        background-color: #f0f0f0;
    }

    .cm-featured-small-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cm-featured-small-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        overflow: hidden;
        text-align: left !important;
    }

    .cm-featured-small-category {
        font-size: 9px;
        font-weight: 700;
        color: var(--primary-color);
        text-transform: uppercase;
        margin-bottom: 2px;
        display: block;
    }

    .cm-featured-small-title {
        font-size: 13px;
        font-weight: 700;
        color: #333333;
        line-height: 1.35;
        margin: 0 0 4px 0;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .cm-featured-small-meta {
        font-size: 10px;
        color: #888888;
        display: flex;
        gap: 10px;
    }
    
    .cm-featured-small-meta span i {
        color: var(--primary-color);
        margin-right: 3px;
    }

    .colormag-news-card {
        background-color: #ffffff;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        border: 1px solid #eaeaea;
        transition: transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1), box-shadow 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .colormag-news-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        border-color: var(--primary-color);
    }

    .colormag-news-card .card-thumb {
        height: 200px;
        overflow: hidden;
        position: relative;
        background-color: #f0f0f0;
    }

    .colormag-news-card .card-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .colormag-news-card:hover .card-thumb img {
        transform: scale(1.05);
    }

    .colormag-news-card .card-content {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
        text-align: left !important;
    }

    .colormag-news-card .card-meta {
        font-size: 11px;
        color: var(--text-muted);
        margin-bottom: 8px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .colormag-news-card .card-meta span i {
        color: var(--primary-color);
        margin-right: 4px;
    }

    .cm-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        height: 40px;
    }

    h3.cm-clamp-2 {
        font-size: 16px;
        font-weight: 700;
        margin: 0 0 10px 0;
        line-height: 1.4;
        height: 44px;
    }

    h3.cm-clamp-2 a {
        color: var(--text-dark);
        text-decoration: none;
        transition: color 0.2s ease;
    }

    h3.cm-clamp-2 a:hover {
        color: var(--primary-color);
    }

    .news-card-btn {
        margin-top: auto;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        color: var(--primary-color);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: color 0.2s ease;
    }

    .news-card-btn:hover {
        color: var(--primary-hover);
        text-decoration: none;
    }

    /* Club Card Styles */
    .cm-home-club-card {
        text-align: center;
        background-color: #ffffff;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        padding: 15px;
        width: 130px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-decoration: none !important;
    }

    .cm-home-club-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.08);
        border-color: var(--primary-color);
    }

    .cm-home-club-card img {
        max-height: 55px;
        max-width: 55px;
        object-fit: contain;
        margin-bottom: 8px;
        display: block;
    }

    .cm-home-club-card span {
        font-size: 11.5px;
        font-weight: 700;
        color: #33;
        display: block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        width: 100%;
    }

    /* Athlete card style */
    .cm-athlete-card {
        background: #ffffff;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        transition: all 0.3s ease;
        text-align: center;
    }

    .cm-athlete-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        border-color: var(--primary-color);
    }

    .cm-athlete-photo-container {
        height: 180px;
        overflow: hidden;
        background-color: #f8f9fa;
    }

    .cm-athlete-photo-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cm-athlete-info {
        padding: 15px;
    }

    .cm-athlete-info h4 {
        font-size: 14px;
        font-weight: 700;
        margin: 0 0 5px 0;
        color: #33;
    }
    
    .cm-athlete-info h4 a {
        color: #33;
        text-decoration: none;
    }

    .cm-athlete-info h4 a:hover {
        color: var(--primary-color);
    }

    .cm-athlete-pos {
        font-size: 11px;
        font-weight: 700;
        color: var(--primary-color);
        text-transform: uppercase;
        margin-bottom: 4px;
    }

    .cm-athlete-club {
        font-size: 11px;
        color: var(--text-muted);
    }

    @media (max-width: 768px) {
        .cm-featured-small-list {
            height: auto;
            margin-top: 20px;
            gap: 15px;
        }
        .cm-featured-small-item {
            height: auto;
        }
    }
</style>

<!-- Banner / Hero Section -->
<div class="hero">
    <h1 class="hero-caption">Portal Olahraga UBG</h1>
    <h2>Informasi Olahraga Paling Update dan Akurat</h2>
</div>

<?php if (empty($latest_news)): ?>
<div class="container" style="margin-top: 30px;">
    <div class="alert alert-info text-center cm-alert" style="margin: 50px 0; padding: 30px; border-radius: 8px;">
        <h3>Belum ada berita yang diterbitkan.</h3>
        <p>Silakan tambahkan data berita baru di database atau melalui panel admin.</p>
    </div>
</div>
<?php else: ?>

<!-- Section TERKINI (Latest News Grid) -->
<div class="container" style="margin-top: 40px; margin-bottom: 20px;">
    <div class="colormag-category-header" style="margin-top: 0; margin-bottom: 25px;">
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
                $img_src = (strpos($thumb, 'http') === 0) ? $thumb : base_url('uploads/' . $thumb);
            ?>
            <div class="cm-featured-large">
                <a href="<?php echo site_url('news/'.$n->news_slug); ?>">
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
                        $img_src = (strpos($thumb, 'http') === 0) ? $thumb : base_url('uploads/' . $thumb);
                ?>
                <a href="<?php echo site_url('news/'.$n->news_slug); ?>" class="cm-featured-small-item">
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
<div class="container" style="margin-top: 30px; margin-bottom: 20px;">
    <div class="colormag-category-header" style="margin-top: 0; margin-bottom: 25px;">
        <h2 class="colormag-category-title">
            <a href="<?php echo site_url('pertandingan'); ?>">Pertandingan Terbaru</a>
        </h2>
        <a href="<?php echo site_url('pertandingan'); ?>" class="colormag-category-more">
            Semua Jadwal <i class="fa fa-angle-double-right"></i>
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div style="display: flex; flex-direction: column; gap: 12px; background: #fff; border: 1px solid #eaeaea; border-radius: 8px; padding: 20px;">
                <?php if (empty($latest_matches)): ?>
                    <p style="text-align: center; color: var(--text-muted); font-size: 13px; margin: 10px 0;">Belum ada jadwal pertandingan dipublikasikan.</p>
                <?php else: ?>
                    <?php foreach ($latest_matches as $match): ?>
                    <div style="display: flex; align-items: center; justify-content: space-between; padding-bottom: 12px; border-bottom: 1px dashed #eaeaea; flex-wrap: wrap; gap: 15px;">
                        <div style="font-size: 12.5px; color: var(--text-muted); display: flex; align-items: center; gap: 6px; flex: 1 1 200px;">
                            <i class="fa fa-calendar" style="color: var(--primary-color);"></i>
                            <span><?php echo date('d M Y - H:i', strtotime($match->match_date)); ?> WIB (<?php echo $match->name_league; ?>)</span>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 15px; flex: 2 1 300px;">
                            <div style="text-align: right; width: 42%; display: flex; align-items: center; justify-content: flex-end; gap: 10px;">
                                <span style="font-size: 13.5px; font-weight: 700; color: #33;"><?php echo $match->club_1; ?></span>
                                <img src="<?php echo (strpos($match->logo_club_1, 'http') === 0) ? $match->logo_club_1 : base_url('uploads/' . $match->logo_club_1); ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="" style="height: 35px; width: 35px; object-fit: contain;">
                            </div>
                            <div style="font-size: 12px; font-weight: 800; color: #ffffff; background: var(--primary-color); padding: 4px 12px; border-radius: 4px; flex-shrink: 0; min-width: 50px; text-align: center;">
                                <?php echo $match->club_1_score; ?> - <?php echo $match->club_2_score; ?>
                            </div>
                            <div style="text-align: left; width: 42%; display: flex; align-items: center; justify-content: flex-start; gap: 10px;">
                                <img src="<?php echo (strpos($match->logo_club_2, 'http') === 0) ? $match->logo_club_2 : base_url('uploads/' . $match->logo_club_2); ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="" style="height: 35px; width: 35px; object-fit: contain;">
                                <span style="font-size: 13.5px; font-weight: 700; color: #33;"><?php echo $match->club_2; ?></span>
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
<section id="contant" class="contant main-heading team" style="padding-top: 0; margin-bottom: 20px;">
    <?php foreach($news_by_sport as $sport_name => $sport_news): ?>
        <?php if (!empty($sport_news)): ?>
        <div class="container">
            <div class="colormag-category-header">
                <h2 class="colormag-category-title">
                    <a href="<?php echo site_url('sport/'.str_replace(' ', '-', strtolower($sport_name))); ?>">
                        <?php echo $sport_name; ?>
                    </a>
                </h2>
                <a href="<?php echo site_url('sport/'.str_replace(' ', '-', strtolower($sport_name))); ?>" class="colormag-category-more">
                    Lihat Semua <i class="fa fa-angle-double-right"></i>
                </a>
            </div>
            
            <div class="row category-news-row" style="display: flex; flex-wrap: wrap;">
                <?php foreach($sport_news as $news): 
                    $thumb = $news->thumbnail;
                    $img_src = (strpos($thumb, 'http') === 0) ? $thumb : base_url('uploads/' . $thumb);
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 30px;">
                    <div class="colormag-news-card">
                        <div class="card-thumb">
                            <a href="<?php echo site_url('news/'.$news->news_slug); ?>" style="display: block; width: 100%; height: 100%;">
                                <img src="<?php echo $img_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($news->title); ?>" />
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="card-meta">
                                <span><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($news->created_at)); ?></span>
                                <span style="margin-left: 10px;"><i class="fa fa-user"></i> <?php echo $news->fullname; ?></span>
                            </div>
                            <h3 class="cm-clamp-2"><a href="<?php echo site_url('news/'.$news->news_slug); ?>"><?php echo $news->title; ?></a></h3>
                            <p class="cm-clamp-2"><?php echo htmlspecialchars($news->description); ?></p>
                            <a href="<?php echo site_url('news/'.$news->news_slug); ?>" class="news-card-btn">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
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
<div class="container" style="margin-top: 10px; margin-bottom: 20px;">
    <div class="colormag-category-header" style="margin-top: 0; margin-bottom: 25px;">
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
                <p style="text-align: center; color: var(--text-muted); font-size: 13px; margin: 10px 0;">Belum ada profil atlet terdaftar.</p>
            </div>
        <?php else: ?>
            <?php foreach ($latest_athletes as $athlete): 
                $photo_src = (strpos($athlete->photo, 'http') === 0) ? $athlete->photo : base_url('uploads/' . $athlete->photo);
            ?>
            <div class="col-md-2 col-sm-4 col-xs-6" style="margin-bottom: 20px;">
                <div class="cm-athlete-card">
                    <div class="cm-athlete-photo-container">
                        <a href="<?php echo site_url('atlet/detail/'.$athlete->id); ?>">
                            <img src="<?php echo $photo_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($athlete->name); ?>">
                        </a>
                    </div>
                    <div class="cm-athlete-info">
                        <span class="cm-athlete-pos">#<?php echo $athlete->backNumber; ?> <?php echo $athlete->player_type; ?></span>
                        <h4><a href="<?php echo site_url('atlet/detail/'.$athlete->id); ?>"><?php echo $athlete->name; ?></a></h4>
                        <span class="cm-athlete-club"><?php echo $athlete->club_name; ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

<!-- Section KLUB TERBARU -->
<div class="container" style="margin-top: 20px; margin-bottom: 50px;">
    <div class="colormag-category-header" style="margin-top: 0; margin-bottom: 25px;">
        <h2 class="colormag-category-title">
            <a href="<?php echo site_url('klub'); ?>">Klub Terkini</a>
        </h2>
        <a href="<?php echo site_url('klub'); ?>" class="colormag-category-more">
            Semua Klub <i class="fa fa-angle-double-right"></i>
        </a>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div style="display: flex; flex-wrap: wrap; gap: 15px; justify-content: center;">
                <?php if (empty($latest_clubs)): ?>
                    <p style="text-align: center; color: var(--text-muted); font-size: 13px; margin: 10px 0;">Belum ada klub terdaftar.</p>
                <?php else: ?>
                    <?php foreach ($latest_clubs as $club): 
                        $logo_src = (strpos($club->logo, 'http') === 0) ? $club->logo : base_url('uploads/' . $club->logo);
                    ?>
                    <a href="<?php echo site_url('klub/detail/'.$club->id); ?>" class="cm-home-club-card">
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
