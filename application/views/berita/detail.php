<script type="text/template" id="deactivated-styles">
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
</script>

<div class="hero">
    <h1 class="hero-caption"><?php echo $news->title; ?></h1>
</div>
</section>

<section id="contant" class="contant main-heading single-blog" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="row">
        <div class="container">
            <!-- Article Body (Left) -->
            <div class="col-md-9 col-sm-8 col-xs-12">
                <div class="feature-post" style="background: #ffffff; border: 1px solid #eaeaea; border-radius: 8px; padding: 25px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); margin-bottom: 30px;">
                    <div class="feature-img">
                        <?php 
                        $thumb = $news->thumbnail;
                        $img_src = (strpos($thumb, 'http') === 0) ? $thumb : base_url('uploads/' . $thumb);
                        ?>
                        <img src="<?php echo $img_src; ?>" class="img-responsive" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($news->title); ?>" style="border-radius: 8px; max-height: 450px; width: 100%; object-fit: cover; margin-bottom: 20px;" />
                    </div>
                    <div class="feature-cont">
                        <div class="post-people" style="margin-bottom: 25px; border-bottom: 1px solid #eaeaea; padding-bottom: 20px;">
                            <div class="left-profile">
                                <div class="post-info" style="display: flex; align-items: center;">
                                    <img src="<?php echo site_url('vendor/userpage/'); ?>images/profile-img.png" alt="#" style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid var(--primary-color);" />
                                    <span style="margin-left: 15px; display: flex; flex-direction: column;">
                                        <h4 style="margin: 0; font-size: 14px; font-weight: 700; color: #333;">Oleh <?php echo $news->fullname; ?></h4>
                                        <h5 style="margin: 3px 0 0 0; font-size: 12px; color: var(--text-muted); font-weight: 400;">
                                            <span style="margin-right: 15px;"><i class="fa fa-calendar" style="color: var(--primary-color); margin-right: 4px;"></i> <?php echo date('d M Y', strtotime($news->created_at)); ?></span>
                                            <span><i class="fa fa-tag" style="color: var(--primary-color); margin-right: 4px;"></i> Kategori: <?php echo $news->name_type; ?></span>
                                        </h5>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="post-heading" style="font-size: 15px; line-height: 1.8; color: #444; text-align: left;">
                            <?php echo $news->body; ?>
                        </div>
                        
                        <!-- Article Tags -->
                        <?php if (!empty($news->news_tags)): ?>
                        <div style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #eaeaea; text-align: left;">
                            <strong style="font-size: 13px; color: #333; margin-right: 10px;">TAGS:</strong>
                            <?php 
                            $tags = explode(',', $news->news_tags);
                            foreach ($tags as $tag) {
                                $tag = trim($tag);
                                if (!empty($tag)) {
                                    echo '<span class="badge" style="background-color: var(--primary-color); color: #fff; padding: 6px 12px; font-size: 11px; margin-right: 5px; font-weight: 600; border-radius: 4px;">' . htmlspecialchars($tag) . '</span>';
                                }
                            }
                            ?>
                        </div>
                        <?php endif; ?>
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
                            <?php foreach($related_news as $rel): 
                                $rel_thumb = $rel->thumbnail;
                                $rel_img = (strpos($rel_thumb, 'http') === 0) ? $rel_thumb : base_url('uploads/' . $rel_thumb);
                            ?>
                            <li>
                                <a href="<?php echo site_url('news/'.$rel->news_slug); ?>" class="cm-sidebar-news-item">
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
