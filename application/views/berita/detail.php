<style>
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
</style>

<div class="hero">
    <h1 class="hero-caption"><?php echo $news->title; ?></h1>
</div>

<section id="contant" class="contant main-heading single-blog" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="row">
        <div class="container">
            <!-- Article Body (Left) -->
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="feature-post" style="background: #ffffff; border: 1px solid #eaeaea; border-radius: 8px; padding: 25px; margin-bottom: 30px;">
                    <div class="feature-img">
                        <?php
                        $thumb = $news->thumbnail;
                        $img_src = (strpos($thumb, 'http') === 0) ? $thumb : base_url('upload/' . $thumb);
                        ?>
                        <img src="<?php echo $img_src; ?>" class="img-responsive" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($news->title); ?>" style="border-radius: 8px; max-height: 450px; width: 100%; object-fit: cover; margin-bottom: 20px;" />
                    </div>
                    <div class="feature-cont">
                        <div class="post-people" style="border-bottom:none; margin-bottom:0; padding-bottom:0;">
                            <div class="left-profile">
                                <div class="post-info">
                                    <img src="<?php echo base_url('assets/userpage/images/profile-img.png'); ?>" alt="#" class="post-author-avatar" />
                                    <div class="post-author-details">
                                        <h4>Oleh <?php echo $news->fullname; ?></h4>
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($news->created_at)); ?></span>
                                            <span><i class="fa fa-tag"></i> Kategori: <?php echo $news->name_type; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Article Tags -->
                        <?php if (!empty($news->news_tags)): ?>
                            <div class="news-tag-list" style="display:block; width:100%; clear:both; text-align:left; margin-top:0; padding-top:10px; border-top:none;">
                                <strong class="news-tag-label" style="display:block; font-size:13px; color:#333; font-weight:700; letter-spacing:0.5px; text-transform:uppercase; margin:0 0 12px 0;">TAGS:</strong>
                                <?php
                                $tags = explode(',', $news->news_tags);
                                foreach ($tags as $tag) {
                                    $tag = trim($tag);
                                    if (!empty($tag)) {
                                        echo '<span class="news-tag" style="display:inline-flex; align-items:center; justify-content:center; background-color:#d8302f; color:#ffffff; padding:8px 14px; font-size:12px; font-weight:600; border-radius:999px; margin:0 10px 10px 0; white-space:nowrap;">' . htmlspecialchars($tag) . '</span>';
                                    }
                                }
                                ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($news->description)): ?>
                            <div class="post-description" style="font-size:15px; line-height:1.9; color:#555; margin:8px 0 0; text-align:left;">
                                <?php echo $news->description; ?>
                            </div>
                        <?php endif; ?>

                        <div class="post-heading">
                            <?php echo $news->body; ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widgets (Right) -->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <!-- Related News Widget -->
                <div class="cm-sidebar-widget">
                    <h3 class="cm-sidebar-title">Berita Terkait</h3>
                    <ul class="cm-sidebar-news-list">
                        <?php if (empty($related_news)): ?>
                            <p style="font-size: 12.5px; color: var(--text-muted); margin: 10px 0; text-align: center;">Tidak ada berita terkait.</p>
                        <?php else: ?>
                            <?php foreach ($related_news as $rel):
                                $rel_thumb = $rel->thumbnail;
                                $rel_img = (strpos($rel_thumb, 'http') === 0) ? $rel_thumb : base_url('upload/' . $rel_thumb);
                            ?>
                                <li>
                                    <a href="<?php echo site_url('news/' . $rel->news_slug); ?>" class="cm-sidebar-news-item">
                                        <div class="cm-sidebar-news-thumb">
                                            <img src="<?php echo $rel_img; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="" />
                                        </div>
                                        <div class="cm-sidebar-news-info">
                                            <h4 class="cm-sidebar-news-title"><?php echo $rel->title; ?></h4>
                                            <span class="cm-sidebar-news-date"><?php echo date('d M Y', strtotime($rel->created_at)); ?></span>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>