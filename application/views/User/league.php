<div class="matchs-info" style="background: transparent; margin-top: 25px; margin-bottom: 15px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <a href="<?php echo site_url('/league/'.$this->uri->segment(2));?>" class="btn btn-xl btn-info news-button" style="width: 100%; font-weight: 700; background-color: var(--primary-color); border: none; text-transform: uppercase; padding: 12px 0;">Berita</a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6">
                <a href="<?php echo site_url('/league/'.$this->uri->segment(2).'/match');?>" class="btn btn-xl btn-info match-button" style="width: 100%; font-weight: 700; background-color: #eaeaea; color: #333; border: none; text-transform: uppercase; padding: 12px 0;">Pertandingan</a>
            </div>
        </div>
    </div>
</div>

<section id="contant" class="contant" style="margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-12">
                <aside id="sidebar" class="left-bar">
                    <div class="feature-matchs" style="background-color: #ffffff; border: 1px solid #eaeaea; border-radius: 4px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
                        <h3 style="font-size: 14px; font-weight: 700; border-bottom: 2px solid var(--primary-color); padding-bottom: 10px; margin-top: 0; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 0.5px;">Jadwal Pertandingan</h3>
                        <div class="team-btw-match">
                            <?php 
                                if (empty($data_match)) {
                                    echo "<p style='font-size: 12px; color: var(--text-muted); text-align: center; margin: 20px 0;'>Tidak ada pertandingan terdekat.</p>";
                                } else {
                                    foreach($data_match as $match) {
                                        echo "<div style='display: flex; align-items: center; justify-content: space-between; margin-bottom: 15px; padding-bottom: 15px; border-bottom: 1px dashed #eaeaea;'>
                                                <div style='text-align: center; width: 40%;'>
                                                    <img src='".get_image_url($match->logo_club_1)."' alt='' style='max-height: 40px; max-width: 40px; object-fit: contain; display: block; margin: 0 auto 5px;'>
                                                    <span style='font-size: 10.5px; font-weight: 700; color: #333; display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>$match->club_1</span>
                                                </div>
                                                <div style='font-size: 11px; font-weight: 700; color: var(--primary-color);'>VS</div>
                                                <div style='text-align: center; width: 40%;'>
                                                    <img src='".get_image_url($match->logo_club_2)."' alt='' style='max-height: 40px; max-width: 40px; object-fit: contain; display: block; margin: 0 auto 5px;'>
                                                    <span style='font-size: 10.5px; font-weight: 700; color: #333; display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;'>$match->club_2</span>
                                                </div>
                                              </div>";
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </aside>
            </div>
            
            <div class="col-lg-8 col-sm-8 col-xs-12">
                <?php if (empty($data_news)): ?>
                    <div class="alert alert-info text-center cm-alert" style="padding: 30px; border-radius: 8px;">
                        <h4>Belum ada berita untuk liga ini.</h4>
                    </div>
                <?php else: ?>
                    <?php foreach($data_news as $news): ?>
                    <div class="colormag-news-card" style="margin-bottom: 25px;">
                        <div class="row" style="margin: 0; display: flex; flex-wrap: wrap;">
                            <div class="col-md-5" style="padding: 0; overflow: hidden; height: 180px;">
                                <img src="<?php echo get_image_url($news->thumbnail); ?>" alt="" style="width:100%; height:100%; object-fit: cover;" />
                            </div>
                            <div class="col-md-7" style="padding: 20px;">
                                <div class="card-meta" style="font-size: 11px; color: var(--text-muted); margin-bottom: 8px;">
                                    <span><i class="fa fa-user" style="color: var(--primary-color);"></i> <?php echo $news->fullname; ?></span>
                                    <span style="margin-left: 15px;"><i class="fa fa-calendar" style="color: var(--primary-color);"></i> <?php echo date('M d, Y', strtotime($news->created_at));?></span>
                                </div>
                                <h3 style="font-size: 16px; font-weight: 700; margin: 0 0 10px 0; line-height: 1.4;"><a href="<?php echo site_url('news/'.$news->news_slug); ?>" style="color: var(--text-dark); text-decoration: none; transition: color 0.3s ease;"><?php echo $news->title; ?></a></h3>
                                <p style="font-size: 12.5px; color: var(--text-muted); line-height: 1.6; margin-bottom: 15px;"><?php echo (strlen($news->description) > 120) ? substr($news->description, 0, 117) . '...' : $news->description; ?></p>
                                <a class="btn" href="<?php echo site_url('news/'.$news->news_slug); ?>" style="background-color: var(--primary-color); color: #fff; font-size: 11px; font-weight: 700; text-transform: uppercase; padding: 6px 15px; border-radius: 2px;">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<div class="team-holder theme-padding" style="background-color: #ffffff; border-top: 1px solid var(--border-color); padding: 40px 0;">
    <div class="container">
        <div class="colormag-category-header" style="margin-top: 0; margin-bottom: 30px;">
            <h2 class="colormag-category-title" style="font-size: 16px; padding: 6px 20px;">
                Daftar Klub Liga
            </h2>
        </div>
        <div id="team-slider">
            <div style="display: flex; flex-wrap: wrap; gap: 20px; justify-content: center;">
                <?php if (empty($data_sportClub)): ?>
                    <p style="font-size: 13px; color: var(--text-muted);">Tidak ada klub terdaftar.</p>
                <?php else: ?>
                    <?php foreach($data_sportClub as $club): ?>
                    <div style="text-align: center; background-color: #f8f9fa; border: 1px solid #eaeaea; border-radius: 4px; padding: 15px; width: 140px; box-shadow: 0 2px 5px rgba(0,0,0,0.02); transition: transform 0.3s ease;">
                        <img src="<?php echo get_image_url($club->logo); ?>" alt="" style="max-height: 60px; max-width: 60px; object-fit: contain; margin: 0 auto 10px; display: block;" />
                        <span style="font-size: 12px; font-weight: 700; color: #333; display: block; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"><?php echo $club->name; ?></span>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>