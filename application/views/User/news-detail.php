<div class="hero">
    <h1 class="hero-caption"><?php echo $news->title; ?></h1>
</div>
<section id="contant" class="contant main-heading single-blog news-detail-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <article class="feature-post">
                    <div class="feature-img">
                        <img src="<?php echo get_image_url($news->thumbnail); ?>" class="img-responsive" alt="<?php echo htmlspecialchars($news->title); ?>" />
                    </div>
                    <div class="feature-cont">
                        <div class="post-people">
                            <div class="left-profile">
                                <div class="post-info">
                                    <img src="<?php echo base_url('assets/userpage/images/profile-img.png'); ?>" alt="Foto profil penulis" />
                                    <span>
                                        <h4>Oleh <?php echo $news->fullname; ?></h4>
                                        <h5><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($news->created_at)); ?></h5>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <?php if (!empty($news->description)): ?>
                            <div class="post-description">
                                <?php echo $news->description; ?>
                            </div>
                        <?php endif; ?>

                        <div class="post-heading">
                            <?php echo $news->body; ?>
                        </div>

                        <?php if (!empty($news->news_tags)): ?>
                            <div class="news-tag-list">
                                <strong class="news-tag-label">TAGS:</strong>
                                <?php
                                $tags = explode(',', $news->news_tags);
                                foreach ($tags as $tag) {
                                    $tag = trim($tag);
                                    if (!empty($tag)) {
                                        echo '<span class="news-tag">' . htmlspecialchars($tag) . '</span>';
                                    }
                                }
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </article>
            </div>

            <div class="col-md-3">
                <!-- Latest News Widget -->
                <div class="cm-sidebar-widget">
                    <h3 class="cm-sidebar-title">Berita Terbaru</h3>
                    <ul class="cm-sidebar-news-list">
                        <?php
                        $count = 0;
                        foreach ($lastest_news_result as $lastest_news) {
                            if ($lastest_news->id != $news->id && $count < 5) {
                        ?>
                                <li>
                                    <a href="<?php echo site_url('news/' . $lastest_news->news_slug); ?>" class="cm-sidebar-news-item">
                                        <div class="cm-sidebar-news-thumb">
                                            <img src="<?php echo get_image_url($lastest_news->thumbnail); ?>" alt="" />
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
                            echo "<p class='cm-sidebar-empty-message'>Tidak ada pertandingan terdekat.</p>";
                        } else {
                            $match_count = 0;
                            foreach ($data_match as $match) {
                                if ($match_count < 4) {
                        ?>
                                    <a href="<?php echo site_url('league/' . $match->league . '/match'); ?>" class="cm-sidebar-match-item">
                                        <div class="cm-sidebar-match-team">
                                            <img src="<?php echo get_image_url($match->logo_club_1); ?>" alt="" class="cm-sidebar-match-logo" />
                                            <span class="cm-sidebar-match-name"><?php echo $match->club_1; ?></span>
                                        </div>
                                        <div class="cm-sidebar-match-vs">VS</div>
                                        <div class="cm-sidebar-match-team">
                                            <img src="<?php echo get_image_url($match->logo_club_2); ?>" alt="" class="cm-sidebar-match-logo" />
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