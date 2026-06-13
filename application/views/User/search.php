
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
            <div class="news-modern-grid">
                <?php foreach($data_news as $news): ?>
                <div class="news-modern-card">
                    <div class="news-card-thumb">
                        <a href="<?php echo site_url('news/'.$news->news_slug); ?>">
                            <img src="<?php echo $news->thumbnail; ?>" alt="<?php echo htmlspecialchars($news->title); ?>" />
                        </a>
                    </div>
                    <div class="news-card-body">
                        <div class="news-card-meta">
                            <span><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($news->created_at)); ?></span>
                        </div>
                        <h3 class="news-card-title">
                            <a href="<?php echo site_url('news/'.$news->news_slug); ?>"><?php echo $news->title; ?></a>
                        </h3>
                        <p class="news-card-desc"><?php echo htmlspecialchars($news->description); ?></p>
                        <a href="<?php echo site_url('news/'.$news->news_slug); ?>" class="news-card-btn">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
