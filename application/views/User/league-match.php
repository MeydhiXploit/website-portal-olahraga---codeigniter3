<div class="hero">
    <h1 class="hero-caption"><?php echo $data_league->name_league; ?></h1>
</div>

<div class="matchs-info" style="background: transparent; margin-top: 25px; margin-bottom: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <a href="<?php echo site_url('/league/'.$this->uri->segment(2));?>" class="btn btn-xl btn-info news-button" style="width: 100%; font-weight: 700; background-color: #eaeaea; color: #333; border: none; text-transform: uppercase; padding: 12px 0;">Berita</a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <a href="<?php echo site_url('/league/'.$this->uri->segment(2).'/match');?>" class="btn btn-xl btn-info match-button" style="width: 100%; font-weight: 700; background-color: var(--primary-color); border: none; text-transform: uppercase; padding: 12px 0;">Pertandingan</a>
            </div>
        </div>
    </div>
</div>

<section id="contant" class="contant" style="margin-top: 20px; margin-bottom: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9">
                <div class="team-holder" style="background-color: #ffffff; border: 1px solid #eaeaea; border-radius: 8px; padding: 25px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); margin-bottom: 30px;">
                    <div class="colormag-category-header" style="margin-top: 0; margin-bottom: 25px;">
                        <h2 class="colormag-category-title" style="font-size: 16px;">
                            Jadwal Pertandingan
                        </h2>
                    </div>
                    
                    <div style="display: flex; flex-direction: column; gap: 20px;">
                        <?php if (empty($data_match)): ?>
                            <div class="alert alert-info text-center cm-alert" style="padding: 20px; border-radius: 8px;">
                                <h4 style="margin: 0; color: #333;">Tidak ada jadwal pertandingan untuk liga ini.</h4>
                            </div>
                        <?php else: ?>
                            <?php foreach($data_match as $match): ?>
                            <div style="display: flex; align-items: center; justify-content: space-between; background: #ffffff; border: 1px solid #eaeaea; border-radius: 10px; padding: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); transition: all 0.3s ease; flex-wrap: wrap; gap: 15px;">
                                <div style="flex: 1 1 200px; display: flex; align-items: center; gap: 10px; color: var(--text-muted); font-size: 13px;">
                                    <i class="fa fa-calendar" style="color: var(--primary-color); font-size: 16px;"></i>
                                    <span>
                                        <strong style="color: #333; display: block; font-size: 14px;"><?php echo date('d M Y', strtotime($match->match_date)); ?></strong>
                                        Pukul <?php echo date('H:i', strtotime($match->match_date)); ?> WIB
                                    </span>
                                </div>
                                <div style="flex: 2 1 300px; display: flex; align-items: center; justify-content: center; gap: 20px;">
                                    <div style="text-align: right; width: 42%; display: flex; align-items: center; justify-content: flex-end; gap: 10px;">
                                        <span style="font-size: 14px; font-weight: 700; color: #333;"><?php echo $match->club_1; ?></span>
                                        <img src="<?php echo $match->logo_club_1; ?>" alt="" style="height: 45px; width: 45px; object-fit: contain;">
                                    </div>
                                    <div style="font-size: 11px; font-weight: 800; color: var(--primary-color); background: rgba(138, 43, 226, 0.08); padding: 6px 12px; border-radius: 20px; border: 1px solid rgba(138, 43, 226, 0.15); flex-shrink: 0;">VS</div>
                                    <div style="text-align: left; width: 42%; display: flex; align-items: center; justify-content: flex-start; gap: 10px;">
                                        <img src="<?php echo $match->logo_club_2; ?>" alt="" style="height: 45px; width: 45px; object-fit: contain;">
                                        <span style="font-size: 14px; font-weight: 700; color: #333;"><?php echo $match->club_2; ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
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
                                if ($count < 5) {
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
            </div>
        </div>
    </div>
</section>