
<section id="contant" class="contant" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container">
        <?php if (empty($data_news)): ?>
            <div class="alert alert-info text-center cm-alert" style="padding: 40px; border-radius: 8px;">
                <h3 style="margin-bottom: 10px; font-weight: 700; color: #333;">Tidak ada hasil ditemukan.</h3>
                <p style="color: #666;">Coba gunakan kata kunci lain seperti nama cabang olahraga, klub, atau atlet.</p>
                <a href="<?php echo base_url(); ?>" class="btn" style="background-color: var(--primary-color); color: #fff; margin-top: 20px; font-weight: 600; padding: 10px 25px; border-radius: 4px; float: none !important; display: inline-block;">Kembali ke Beranda</a>
            </div>
        <?php else: ?>
            <div class="row">
                <?php foreach($data_news as $news): ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="colormag-news-card">
                        <div class="card-thumb">
                            <a href="<?php echo site_url('news/'.$news->news_slug); ?>">
                                <img src="<?php echo $news->thumbnail; ?>" alt="" />
                            </a>
                        </div>
                        <div class="card-content">
                            <div class="card-meta">
                                <span><i class="fa fa-user" style="color: var(--primary-color);"></i> <?php echo $news->fullname; ?></span>
                                <span style="margin-left: 15px;"><i class="fa fa-calendar" style="color: var(--primary-color);"></i> <?php echo date('M d, Y', strtotime($news->created_at)); ?></span>
                            </div>
                            <h3><a href="<?php echo site_url('news/'.$news->news_slug); ?>"><?php echo $news->title; ?></a></h3>
                            <p><?php echo (strlen($news->description) > 105) ? substr($news->description, 0, 102) . '...' : $news->description; ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
