
<?php if (empty($lastest_news) || empty($lastest_news_result)): ?>
<div class="container">
    <div class="alert alert-info text-center cm-alert" style="margin: 50px 0; padding: 30px; border-radius: 8px;">
        <h3>Belum ada berita yang diterbitkan untuk cabang olahraga <?php echo htmlspecialchars($data_sport->name_type); ?>.</h3>
        <p>Silakan tambahkan data berita baru di database atau melalui panel admin.</p>
    </div>
</div>
<?php else: ?>

<!-- Breaking News Ticker (Sport Specific) -->
<div class="container" style="margin-top: 25px; margin-bottom: -15px;">
    <div class="breaking-news-bar" style="background-color: #ffffff; border: 1px solid #eaeaea; padding: 10px 15px; display: flex; align-items: center; border-radius: 4px; box-shadow: 0 2px 5px rgba(0,0,0,0.02);">
        <span style="background-color: hsl(270, 75%, 50%); color: #ffffff; padding: 4px 10px; font-size: 11px; font-weight: 700; text-transform: uppercase; border-radius: 2px; margin-right: 15px; letter-spacing: 0.5px;">Terkini</span>
        <marquee scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();" style="font-size: 13px; font-weight: 500; color: #333; cursor: pointer;">
            <?php 
                $marquee_items = [];
                foreach ($lastest_news_result as $item) {
                    $marquee_items[] = '<a href="'.site_url('news/'.$item->news_slug).'" style="color: #333; text-decoration: none; margin-right: 50px;">🔥 ' . $item->title . '</a>';
                }
                echo implode(' ', $marquee_items);
            ?>
        </marquee>
    </div>
</div>

<!-- ColorMag Grid Container -->
<div class="colormag-grid-container container">
    <div class="colormag-grid">
        <!-- Card 1: Large Featured (Left) -->
        <?php if (isset($lastest_news_result[0])): $n = $lastest_news_result[0]; $tag = !empty($n->news_tags) ? explode(',', $n->news_tags)[0] : 'LATEST'; ?>
        <div class="cm-card large-card">
            <a href="<?php echo site_url('news/'.$n->news_slug); ?>" class="card-img-link">
                <img src="<?php echo $n->thumbnail; ?>" alt="" />
                <div class="cm-card-overlay">
                    <span class="cm-badge"><?php echo strtoupper($tag); ?></span>
                    <h2 class="cm-title"><a href="<?php echo site_url('news/'.$n->news_slug); ?>"><?php echo $n->title; ?></a></h2>
                    <div class="cm-meta">
                        <span><i class="fa fa-user"></i> <?php echo $n->fullname; ?></span>
                        <span><i class="fa fa-calendar"></i> <?php echo date('M d, Y', strtotime($n->created_at)); ?></span>
                    </div>
                </div>
            </a>
        </div>
        <?php endif; ?>

        <!-- Card 2: Medium (Middle) -->
        <?php if (isset($lastest_news_result[1])): $n = $lastest_news_result[1]; $tag = !empty($n->news_tags) ? explode(',', $n->news_tags)[0] : 'LATEST'; ?>
        <div class="cm-card medium-card">
            <a href="<?php echo site_url('news/'.$n->news_slug); ?>" class="card-img-link">
                <img src="<?php echo $n->thumbnail; ?>" alt="" />
                <div class="cm-card-overlay">
                    <span class="cm-badge"><?php echo strtoupper($tag); ?></span>
                    <h2 class="cm-title"><a href="<?php echo site_url('news/'.$n->news_slug); ?>"><?php echo $n->title; ?></a></h2>
                    <div class="cm-meta">
                        <span><i class="fa fa-user"></i> <?php echo $n->fullname; ?></span>
                        <span><i class="fa fa-calendar"></i> <?php echo date('M d, Y', strtotime($n->created_at)); ?></span>
                    </div>
                </div>
            </a>
        </div>
        <?php endif; ?>

        <!-- Column 3: Stacked Small (Right) -->
        <div class="small-column">
            <?php if (isset($lastest_news_result[2])): $n = $lastest_news_result[2]; $tag = !empty($n->news_tags) ? explode(',', $n->news_tags)[0] : 'LATEST'; ?>
            <div class="cm-card small-card">
                <a href="<?php echo site_url('news/'.$n->news_slug); ?>" class="card-img-link">
                    <img src="<?php echo $n->thumbnail; ?>" alt="" />
                    <div class="cm-card-overlay">
                        <span class="cm-badge"><?php echo strtoupper($tag); ?></span>
                        <h2 class="cm-title"><a href="<?php echo site_url('news/'.$n->news_slug); ?>"><?php echo $n->title; ?></a></h2>
                        <div class="cm-meta">
                            <span><i class="fa fa-user"></i> <?php echo $n->fullname; ?></span>
                            <span><i class="fa fa-calendar"></i> <?php echo date('M d, Y', strtotime($n->created_at)); ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>

            <?php if (isset($lastest_news_result[3])): $n = $lastest_news_result[3]; $tag = !empty($n->news_tags) ? explode(',', $n->news_tags)[0] : 'LATEST'; ?>
            <div class="cm-card small-card">
                <a href="<?php echo site_url('news/'.$n->news_slug); ?>" class="card-img-link">
                    <img src="<?php echo $n->thumbnail; ?>" alt="" />
                    <div class="cm-card-overlay">
                        <span class="cm-badge"><?php echo strtoupper($tag); ?></span>
                        <h2 class="cm-title"><a href="<?php echo site_url('news/'.$n->news_slug); ?>"><?php echo $n->title; ?></a></h2>
                        <div class="cm-meta">
                            <span><i class="fa fa-user"></i> <?php echo $n->fullname; ?></span>
                            <span><i class="fa fa-calendar"></i> <?php echo date('M d, Y', strtotime($n->created_at)); ?></span>
                        </div>
                    </div>
                </a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- Category Sections (Leagues) -->
<section id="contant" class="contant main-heading team" style="padding-top: 0; margin-bottom: 40px;">
    <?php 
    // Collect the IDs of news featured in the grid to avoid duplication
    $featured_ids = [];
    foreach ($lastest_news_result as $news_item) {
        $featured_ids[] = $news_item->id;
    }

    // Filter news items to only show those NOT in the featured grid
    $filtered_news = [];
    if (!empty($news_by_sport)) {
        foreach ($news_by_sport as $news) {
            if (!in_array($news->id, $featured_ids)) {
                $filtered_news[] = $news;
            }
        }
    }
    
    // Only display sport type section if there are news items to show
    if (!empty($filtered_news)):
    ?>
    <div class="container">
        <div class="colormag-category-header">
            <h2 class="colormag-category-title">
                Semua Berita <?php echo $data_sport->name_type; ?>
            </h2>
        </div>
        <div class="row">
            <?php foreach($filtered_news as $news): ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="colormag-news-card">
                    <div class="card-thumb">
                        <a href="<?php echo site_url('news/'.$news->news_slug); ?>">
                            <img src="<?php echo $news->thumbnail; ?>" alt="" />
                        </a>
                    </div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($news->created_at)); ?></span>
                        </div>
                        <h3><a href="<?php echo site_url('news/'.$news->news_slug); ?>"><?php echo $news->title; ?></a></h3>
                        <p><?php echo (strlen($news->description) > 105) ? substr($news->description, 0, 102) . '...' : $news->description; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?php 
    endif;
    ?>
</section>
<?php endif; ?>