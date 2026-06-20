<div class="hero">
    <h1 class="hero-caption"><?php echo $news->title; ?></h1>
</div>
</section>
<section id="contant" class="contant main-heading single-blog" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="row">
        <div class="container">
        <div class="col-md-9">
            <div class="feature-post" style="background: #ffffff; border: 1px solid #eaeaea; border-radius: 8px; padding: 25px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); margin-bottom: 30px;">
                <div class="feature-img">
                    <img src="<?php echo $news->thumbnail; ?>" class="img-responsive" alt="<?php echo htmlspecialchars($news->title); ?>" style="border-radius: 8px; max-height: 450px; width: 100%; object-fit: cover; margin-bottom: 20px;" />
                </div>
                <div class="feature-cont">
                    <div class="post-people" style="margin-bottom: 25px; border-bottom: 1px solid #eaeaea; padding-bottom: 20px;">
                        <div class="left-profile">
                            <div class="post-info" style="display: flex; align-items: center;">
                                <img src="<?php echo site_url('vendor/userpage/'); ?>images/profile-img.png" alt="#" style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid var(--primary-color);" />
                                <span style="margin-left: 15px; display: flex; flex-direction: column;">
                                    <h4 style="margin: 0; font-size: 14px; font-weight: 700; color: #333;">Oleh <?php echo $news->fullname; ?></h4>
                                    <h5 style="margin: 3px 0 0 0; font-size: 12px; color: var(--text-muted); font-weight: 400;"><i class="fa fa-calendar" style="color: var(--primary-color); margin-right: 4px;"></i> <?php echo date('d M Y', strtotime($news->created_at)); ?></h5>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="post-heading" style="font-size: 15px; line-height: 1.8; color: #444;">
                        <?php echo $news->body; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <!-- Latest News Widget -->
            <div class="cm-sidebar-widget">
                <h3 class="cm-sidebar-title">Berita Terbaru</h3>
                <ul class="cm-sidebar-news-list">
                    <?php
                        $count = 0;
                        foreach($lastest_news_result as $lastest_news) {
                            if ($lastest_news->id != $news->id && $count < 5) {
                    ?>
                    <li>
                        <a href="<?php echo site_url('news/'.$lastest_news->news_slug); ?>" class="cm-sidebar-news-item">
                            <div class="cm-sidebar-news-thumb">
                                <img src="<?php echo $lastest_news->thumbnail; ?>" alt="" />
                            </div>
                            <div class="cm-sidebar-news-info">
                                <h4 class="cm-sidebar-news-title"><?php echo $lastest_news->title; ?></h4>
                                <span class="cm-sidebar-news-date"><?php echo date('d M Y', strtotime($lastest_news->created_at)); ?></span>
                            </div>
                        </a>
                    </li>
                    <?php
                                $count++;
                            }
                        }
                    ?>
                </ul>
            </div>

            <!-- Match Schedule Widget -->
            <div class="cm-sidebar-widget">
                <h3 class="cm-sidebar-title">Jadwal Pertandingan</h3>
                <div class="cm-sidebar-match-list">
                    <?php 
                        if (empty($data_match)) {
                            echo "<p style='font-size: 12px; color: var(--text-muted); text-align: center; margin: 10px 0;'>Tidak ada pertandingan terdekat.</p>";
                        } else {
                            $match_count = 0;
                            foreach($data_match as $match) {
                                if ($match_count < 4) {
                    ?>
                    <a href="<?php echo site_url('league/'.$match->league.'/match'); ?>" class="cm-sidebar-match-item">
                        <div class="cm-sidebar-match-team">
                            <img src="<?php echo $match->logo_club_1; ?>" alt="" class="cm-sidebar-match-logo" />
                            <span class="cm-sidebar-match-name"><?php echo $match->club_1; ?></span>
                        </div>
                        <div class="cm-sidebar-match-vs">VS</div>
                        <div class="cm-sidebar-match-team">
                            <img src="<?php echo $match->logo_club_2; ?>" alt="" class="cm-sidebar-match-logo" />
                            <span class="cm-sidebar-match-name"><?php echo $match->club_2; ?></span>
                        </div>
                    </a>
                    <?php
                                    $match_count++;
                                }
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>