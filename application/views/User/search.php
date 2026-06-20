<section id="contant" class="contant" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container">
        <div class="colormag-category-header" style="margin-top: 0; margin-bottom: 30px;">
            <h2 class="colormag-category-title" style="font-size: 16px;">
                Hasil Pencarian: "<?php echo htmlspecialchars($query ?? ''); ?>"
            </h2>
        </div>
        <?php if (empty($data_news)): ?>
            <div class="alert alert-info text-center cm-alert" style="padding: 40px; border-radius: 8px;">
                <h3 style="margin-bottom: 10px; font-weight: 700; color: #333;">Tidak ada hasil ditemukan.</h3>
                <p style="color: #666;">Coba gunakan kata kunci lain seperti nama cabang olahraga, klub, atau atlet.</p>
                <a href="<?php echo base_url(); ?>" class="btn" style="background-color: var(--primary-color); color: #fff; margin-top: 20px; font-weight: 600; padding: 10px 25px; border-radius: 4px; float: none !important; display: inline-block;">Kembali ke Beranda</a>
            </div>
        <?php else: ?>
            <div class="row category-news-row" style="display: flex; flex-wrap: wrap;">
                <?php foreach($data_news as $news):
                    $thumb = $news->thumbnail ?? '';
                    $img_src = (strpos($thumb, 'http') === 0) ? $thumb : base_url('uploads/' . $thumb);
                ?>
                    <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 30px;">
                        <div class="colormag-news-card">
                            <div class="card-thumb">
                                <a href="<?php echo site_url('news/'.$news->news_slug); ?>" style="display: block; width: 100%; height: 100%;">
                                    <img
                                        src="<?php echo $img_src; ?>"
                                        onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'"
                                        alt="<?php echo htmlspecialchars($news->title); ?>"
                                    />
                                </a>
                            </div>

                            <div class="card-content">
                                <div class="card-meta">
                                    <span><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($news->created_at)); ?></span>
                                    <?php if (!empty($news->fullname)): ?>
                                        <span style="margin-left: 10px;"><i class="fa fa-user"></i> <?php echo $news->fullname; ?></span>
                                    <?php endif; ?>
                                </div>

                                <h3 class="cm-clamp-2">
                                    <a href="<?php echo site_url('news/'.$news->news_slug); ?>"><?php echo $news->title; ?></a>
                                </h3>

                                <p class="cm-clamp-2"><?php echo htmlspecialchars($news->description); ?></p>

                                <a href="<?php echo site_url('news/'.$news->news_slug); ?>" class="news-card-btn">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
