<style>
    .cm-clubs-section {
        background: #fdfdfd;
        padding: 60px 0;
    }
    
    .cm-club-grid-container {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }

    .cm-club-card-wrapper {
        margin-bottom: 30px;
        display: flex;
    }

    .cm-club-card {
        background: #ffffff;
        border: none;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.04);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        text-align: center;
        padding: 35px 25px;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        border: 1px solid rgba(0,0,0,0.03);
    }

    .cm-club-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary-color, #d8302f) 0%, #ffcb05 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .cm-club-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(216, 48, 47, 0.08);
        border-color: rgba(216, 48, 47, 0.15);
    }

    .cm-club-card:hover::before {
        opacity: 1;
    }

    .cm-club-logo-container {
        width: 120px;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ffffff;
        border-radius: 50%;
        box-shadow: 0 6px 20px rgba(0,0,0,0.03);
        margin-bottom: 25px;
        padding: 15px;
        transition: all 0.4s ease;
        border: 1px solid #f5f5f5;
    }

    .cm-club-card:hover .cm-club-logo-container {
        transform: scale(1.08);
        box-shadow: 0 8px 25px rgba(216, 48, 47, 0.12);
    }

    .cm-club-logo-container img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .cm-club-name {
        font-size: 18px;
        font-weight: 800;
        margin: 0 0 10px 0;
        color: #1a1a1a;
        line-height: 1.3;
    }

    .cm-club-name a {
        color: #1a1a1a;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .cm-club-name a:hover {
        color: var(--primary-color, #d8302f);
    }

    .cm-club-meta {
        font-size: 11px;
        font-weight: 700;
        color: #888888;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 12px;
        background: #f7f7f7;
        padding: 4px 12px;
        border-radius: 20px;
        display: inline-block;
    }

    .cm-club-card:hover .cm-club-meta {
        background: rgba(216, 48, 47, 0.05);
        color: var(--primary-color, #d8302f);
    }

    .cm-club-country {
        font-size: 12px;
        font-weight: 600;
        color: #555555;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .cm-club-country i {
        color: var(--primary-color, #d8302f);
        font-size: 14px;
    }
</style>

<div class="hero">
    <h1 class="hero-caption">Klub Olahraga</h1>
</div>
</section>

<section id="contant" class="contant cm-clubs-section">
    <div class="container">
        <?php if (empty($clubs)): ?>
            <div class="alert alert-info text-center cm-alert" style="padding: 40px; border-radius: 12px; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.03);">
                <i class="fa fa-info-circle" style="font-size: 32px; color: var(--primary-color); margin-bottom: 15px;"></i>
                <h4 style="font-weight: 700; color: #333;">Tidak ada data klub olahraga yang terdaftar.</h4>
            </div>
        <?php else: ?>
            <div class="row cm-club-grid-container">
                <?php foreach($clubs as $club): 
                    $logo = $club->logo;
                    if (strpos($logo, 'http') === 0) {
                        $logo_src = $logo;
                    } elseif (strpos($logo, 'upload/') === 0) {
                        $logo_src = base_url($logo);
                    } else {
                        $logo_src = base_url('upload/' . $logo);
                    }
                ?>
                <div class="col-md-3 col-sm-4 col-xs-6 cm-club-card-wrapper">
                    <div class="cm-club-card" style="width: 100%;">
                        <div class="cm-club-logo-container">
                            <a href="<?php echo site_url('klub/detail/'.$club->id); ?>">
                                <img src="<?php echo $logo_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($club->name); ?>">
                            </a>
                        </div>
                        <span class="cm-club-meta"><?php echo $club->name_league; ?></span>
                        <h4 class="cm-club-name">
                            <a href="<?php echo site_url('klub/detail/'.$club->id); ?>"><?php echo $club->name; ?></a>
                        </h4>
                        <span class="cm-club-country">
                            <i class="fa fa-globe"></i> <?php echo $club->country; ?>
                        </span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Pagination -->
            <div class="row" style="margin-top: 30px;">
                <div class="col-md-12 text-center">
                    <?php echo $pagination; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
