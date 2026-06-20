<script type="text/template" id="deactivated-styles">
    /* Category grid overrides */
    .cm-sidebar-widget {
        background-color: #ffffff;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        padding: 24px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        margin-bottom: 30px;
    }

    .cm-sidebar-title {
        font-size: 14px !important;
        font-weight: 800 !important;
        text-transform: uppercase !important;
        color: #222222 !important;
        margin: 0 0 20px 0 !important;
        padding-bottom: 10px !important;
        border-bottom: 2px solid var(--primary-color) !important;
        letter-spacing: 0.5px !important;
        position: relative !important;
    }

    .cm-sidebar-news-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .cm-sidebar-news-item {
        display: flex;
        gap: 12px;
        align-items: center;
        text-decoration: none !important;
        transition: all 0.2s ease;
    }

    .cm-sidebar-news-item:hover {
        transform: translateX(3px);
    }

    .cm-sidebar-news-thumb {
        width: 65px;
        height: 65px;
        border-radius: 6px;
        overflow: hidden;
        flex-shrink: 0;
        background-color: #f0f0f0;
    }

    .cm-sidebar-news-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cm-sidebar-news-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: left !important;
    }

    .cm-sidebar-news-title {
        font-size: 13px !important;
        font-weight: 700 !important;
        line-height: 1.35 !important;
        color: #222222 !important;
        margin: 0 0 4px 0 !important;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        transition: color 0.2s ease;
    }

    .cm-sidebar-news-item:hover .cm-sidebar-news-title {
        color: var(--primary-color) !important;
    }

    .cm-sidebar-news-date {
        font-size: 10.5px;
        color: var(--text-muted);
    }

    .cm-sidebar-cat-list {
        display: flex;
        flex-direction: column;
        gap: 8px;
        padding: 0;
        margin: 0;
        list-style: none;
    }

    .cm-sidebar-cat-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 12px;
        background: #fdfdfd;
        border: 1px solid #f0f0f0;
        border-radius: 6px;
        text-decoration: none !important;
        font-size: 13px;
        font-weight: 600;
        color: #444;
        transition: all 0.2s ease;
    }

    .cm-sidebar-cat-item:hover {
        border-color: var(--primary-color);
        color: var(--primary-color);
        background: #fff;
        transform: translateX(3px);
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
</script>

<div class="hero">
    <h1 class="hero-caption">Kategori: <?php echo $sport_type->name_type; ?></h1>
</div>
</section>

<section id="contant" class="contant" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container">
        <div class="row">
            <!-- News Grid List (Left) -->
            <div class="col-md-9 col-sm-8 col-xs-12">
                <?php if (empty($news_list)): ?>
                    <div class="alert alert-info text-center cm-alert" style="padding: 30px; border-radius: 8px;">
                        <h4>Belum ada berita untuk kategori <?php echo $sport_type->name_type; ?>.</h4>
                    </div>
                <?php else: ?>
                    <div class="row" style="display: flex; flex-wrap: wrap;">
                        <?php foreach($news_list as $news): 
                            $thumb = $news->thumbnail;
                            $img_src = (strpos($thumb, 'http') === 0) ? $thumb : base_url('uploads/' . $thumb);
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 30px; display: flex;">
                            <div class="colormag-news-card">
                                <div class="card-thumb">
                                    <a href="<?php echo site_url('news/'.$news->news_slug); ?>">
                                        <img src="<?php echo $img_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($news->title); ?>" />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <div class="card-meta">
                                        <span><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($news->created_at)); ?></span>
                                        <span style="margin-left: 8px;"><i class="fa fa-user"></i> <?php echo $news->fullname; ?></span>
                                    </div>
                                    <h3 class="cm-clamp-2"><a href="<?php echo site_url('news/'.$news->news_slug); ?>"><?php echo $news->title; ?></a></h3>
                                    <p class="cm-clamp-2"><?php echo htmlspecialchars($news->description); ?></p>
                                    <a href="<?php echo site_url('news/'.$news->news_slug); ?>" class="news-card-btn">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Pagination links -->
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-12 text-center">
                            <?php echo $pagination; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            
            <!-- Sidebar Widgets (Right) -->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <!-- Popular News Widget -->
                <div class="cm-sidebar-widget">
                    <h3 class="cm-sidebar-title">Berita Populer</h3>
                    <ul class="cm-sidebar-news-list">
                        <?php foreach($popular_news as $pop): 
                            $pop_thumb = $pop->thumbnail;
                            $pop_img = (strpos($pop_thumb, 'http') === 0) ? $pop_thumb : base_url('uploads/' . $pop_thumb);
                        ?>
                        <li>
                            <a href="<?php echo site_url('news/'.$pop->news_slug); ?>" class="cm-sidebar-news-item">
                                <div class="cm-sidebar-news-thumb">
                                    <img src="<?php echo $pop_img; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="" />
                                </div>
                                <div class="cm-sidebar-news-info">
                                    <h4 class="cm-sidebar-news-title"><?php echo $pop->title; ?></h4>
                                    <span class="cm-sidebar-news-date"><?php echo date('d M Y', strtotime($pop->created_at)); ?></span>
                                </div>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- Other Categories Widget -->
                <div class="cm-sidebar-widget">
                    <h3 class="cm-sidebar-title">Kategori Lain</h3>
                    <ul class="cm-sidebar-cat-list">
                        <?php foreach($all_categories as $cat): ?>
                            <?php if ($cat->id != $sport_type->id): ?>
                            <li>
                                <a href="<?php echo site_url('sport/'.str_replace(' ', '-', strtolower($cat->name_type))); ?>" class="cm-sidebar-cat-item">
                                    <span><?php echo $cat->name_type; ?></span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
