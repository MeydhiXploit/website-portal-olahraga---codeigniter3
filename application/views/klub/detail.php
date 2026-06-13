<style>
    .cm-club-detail-section {
        background: #fdfdfd;
        padding: 50px 0;
    }

    .cm-club-header-card {
        background: #ffffff;
        border: none;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        padding: 40px;
        margin-bottom: 40px;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0,0,0,0.03);
    }

    .cm-club-header-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary-color, #d8302f) 0%, #ffcb05 100%);
    }

    .cm-club-header-logo {
        width: 150px;
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #ffffff;
        border: 1px solid #f0f0f0;
        border-radius: 50%;
        padding: 20px;
        margin: 0 auto 25px auto;
        box-shadow: 0 8px 25px rgba(0,0,0,0.04);
        transition: transform 0.3s ease;
    }

    .cm-club-header-logo:hover {
        transform: scale(1.05);
    }

    @media (min-width: 768px) {
        .cm-club-header-logo {
            margin: 0;
        }
    }

    .cm-club-header-logo img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }

    .cm-club-header-info {
        text-align: center;
    }

    @media (min-width: 768px) {
        .cm-club-header-info {
            text-align: left;
            padding-left: 30px;
        }
    }

    .cm-club-header-name {
        font-size: 34px;
        font-weight: 900;
        color: #1a1a1a;
        margin: 0 0 15px 0;
        letter-spacing: -0.5px;
    }

    .cm-club-header-meta-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin-top: 20px;
    }

    .cm-club-header-meta-item {
        font-size: 14px;
        color: #555555;
        display: flex;
        align-items: center;
        gap: 10px;
        background: #f8f9fa;
        padding: 10px 15px;
        border-radius: 8px;
        border: 1px solid #f1f1f1;
    }

    .cm-club-header-meta-item i {
        color: var(--primary-color, #d8302f);
        font-size: 16px;
    }

    .cm-club-header-meta-item strong {
        color: #1a1a1a;
    }

    .cm-section-title {
        font-size: 20px;
        font-weight: 900;
        text-transform: uppercase;
        color: #1a1a1a;
        margin-bottom: 30px;
        position: relative;
        padding-bottom: 10px;
        letter-spacing: 0.5px;
    }

    .cm-section-title::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 50px;
        height: 3px;
        background-color: var(--primary-color, #d8302f);
        border-radius: 2px;
    }

    .cm-roster-card {
        background: #ffffff;
        border: none;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(0,0,0,0.03);
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(0,0,0,0.03);
    }

    .cm-roster-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(216, 48, 47, 0.08);
        border-color: rgba(216, 48, 47, 0.15);
    }

    .cm-roster-photo-container {
        height: 200px;
        overflow: hidden;
        background-color: #f8f9fa;
        position: relative;
    }

    .cm-roster-photo-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .cm-roster-card:hover .cm-roster-photo-container img {
        transform: scale(1.08);
    }

    .cm-roster-info {
        padding: 20px 15px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .cm-roster-info h5 {
        font-size: 15px;
        font-weight: 800;
        margin: 0 0 6px 0;
    }

    .cm-roster-info h5 a {
        color: #1a1a1a;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .cm-roster-info h5 a:hover {
        color: var(--primary-color, #d8302f);
    }

    .cm-roster-pos {
        font-size: 11px;
        font-weight: 800;
        color: var(--primary-color, #d8302f);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 4px;
        display: block;
    }

    .cm-match-list-wrapper {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .cm-club-match-card {
        background: #ffffff;
        border: none;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.03);
        display: flex;
        flex-direction: column;
        gap: 12px;
        text-align: left;
        border: 1px solid rgba(0,0,0,0.03);
        transition: border-color 0.3s ease;
    }

    .cm-club-match-card:hover {
        border-color: rgba(216, 48, 47, 0.15);
    }

    .cm-match-card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #f5f5f5;
        padding-bottom: 10px;
        font-size: 12px;
        color: #888888;
    }

    .cm-match-card-body {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 10px;
    }

    .cm-match-team-block {
        display: flex;
        align-items: center;
        gap: 10px;
        width: 40%;
    }

    .cm-match-score-badge {
        font-size: 13px;
        font-weight: 800;
        color: #fff;
        background: linear-gradient(135deg, var(--primary-color, #d8302f) 0%, #b02423 100%);
        padding: 5px 12px;
        border-radius: 6px;
        min-width: 55px;
        text-align: center;
        box-shadow: 0 4px 10px rgba(216, 48, 47, 0.15);
    }

    .cm-back-btn {
        background-color: #1a1a1a;
        color: #ffffff !important;
        font-weight: 700;
        padding: 12px 28px;
        border-radius: 30px;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 0.5px;
        display: inline-flex;
        align-items: center;
        transition: all 0.3s ease;
        text-decoration: none !important;
        border: none;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    .cm-back-btn:hover {
        background-color: var(--primary-color, #d8302f);
        transform: translateX(-4px);
        box-shadow: 0 6px 20px rgba(216, 48, 47, 0.2);
    }

    .cm-back-btn i {
        margin-right: 8px;
    }
</style>

<div class="hero">
    <h1 class="hero-caption">Detail Klub</h1>
</div>
</section>

<section id="contant" class="contant cm-club-detail-section">
    <div class="container">
        <!-- Club Header -->
        <div class="cm-club-header-card">
            <div class="row style-flex" style="display: flex; align-items: center; flex-wrap: wrap;">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="cm-club-header-logo">
                        <?php 
                            $logo = $club->logo;
                            if (strpos($logo, 'http') === 0) {
                                $logo_src = $logo;
                            } elseif (strpos($logo, 'upload/') === 0) {
                                $logo_src = base_url($logo);
                            } else {
                                $logo_src = base_url('upload/' . $logo);
                            }
                        ?>
                        <img src="<?php echo $logo_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($club->name); ?>" />
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="cm-club-header-info">
                        <h2 class="cm-club-header-name"><?php echo $club->name; ?></h2>
                        <div class="cm-club-header-meta-grid">
                            <div class="cm-club-header-meta-item">
                                <i class="fa fa-globe"></i>
                                <span>Negara: <strong><?php echo $club->country; ?></strong></span>
                            </div>
                            <div class="cm-club-header-meta-item">
                                <i class="fa fa-trophy"></i>
                                <span>Liga: <strong><?php echo $club->name_league; ?></strong></span>
                            </div>
                            <div class="cm-club-header-meta-item">
                                <i class="fa fa-play-circle"></i>
                                <span>Kategori: <strong><?php echo $club->name_type; ?></strong></span>
                            </div>
                            <div class="cm-club-header-meta-item">
                                <i class="fa fa-users"></i>
                                <span>Roster: <strong><?php echo count($roster); ?> Pemain</strong></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Roster Column -->
            <div class="col-md-7 col-sm-12 col-xs-12" style="margin-bottom: 40px;">
                <div style="text-align: left;">
                    <h3 class="cm-section-title">Daftar Pemain / Roster</h3>
                </div>
                
                <?php if (empty($roster)): ?>
                    <div class="alert alert-info text-center cm-alert" style="padding: 30px; border-radius: 12px; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                        <i class="fa fa-info-circle" style="font-size: 24px; color: var(--primary-color); margin-bottom: 10px; display: block;"></i>
                        <span style="font-size: 14px; font-weight: 600; color: #555;">Belum ada atlet yang terdaftar di roster klub ini.</span>
                    </div>
                <?php else: ?>
                    <div class="row" style="display: flex; flex-wrap: wrap;">
                        <?php foreach($roster as $player): 
                            $photo = $player->photo;
                            if (strpos($photo, 'http') === 0) {
                                $photo_src = $photo;
                            } elseif (strpos($photo, 'upload/') === 0) {
                                $photo_src = base_url($photo);
                            } else {
                                $photo_src = base_url('upload/' . $photo);
                            }
                        ?>
                        <div class="col-md-4 col-sm-4 col-xs-6" style="margin-bottom: 25px; display: flex;">
                            <div class="cm-roster-card" style="width: 100%;">
                                <div class="cm-roster-photo-container">
                                    <a href="<?php echo site_url('atlet/detail/'.$player->id); ?>">
                                        <img src="<?php echo $photo_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($player->name); ?>">
                                    </a>
                                </div>
                                <div class="cm-roster-info">
                                    <span class="cm-roster-pos">#<?php echo $player->backNumber; ?> &bull; <?php echo $player->player_type; ?></span>
                                    <h5>
                                        <a href="<?php echo site_url('atlet/detail/'.$player->id); ?>"><?php echo $player->name; ?></a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <!-- Matches Column -->
            <div class="col-md-5 col-sm-12 col-xs-12" style="margin-bottom: 40px;">
                <div style="text-align: left;">
                    <h3 class="cm-section-title">Riwayat & Jadwal Laga</h3>
                </div>

                <?php if (empty($matches)): ?>
                    <div class="alert alert-info text-center cm-alert" style="padding: 30px; border-radius: 12px; border: none; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
                        <i class="fa fa-calendar-times-o" style="font-size: 24px; color: var(--primary-color); margin-bottom: 10px; display: block;"></i>
                        <span style="font-size: 14px; font-weight: 600; color: #555;">Tidak ada jadwal atau riwayat pertandingan untuk klub ini.</span>
                    </div>
                <?php else: ?>
                    <div class="cm-match-list-wrapper">
                        <?php foreach($matches as $match): 
                            $logo1 = (strpos($match->logo_club_1, 'http') === 0) ? $match->logo_club_1 : base_url('uploads/' . $match->logo_club_1);
                            $logo2 = (strpos($match->logo_club_2, 'http') === 0) ? $match->logo_club_2 : base_url('uploads/' . $match->logo_club_2);
                            
                            $is_win = false;
                            $is_loss = false;
                            $score_text = $match->club_1_score . ' - ' . $match->club_2_score;
                            
                            if ($match->club_1_score !== $match->club_2_score) {
                                if ($match->sport_club_1 == $club->id) {
                                    if ($match->club_1_score > $match->club_2_score) $is_win = true;
                                    else $is_loss = true;
                                } else {
                                    if ($match->club_2_score > $match->club_1_score) $is_win = true;
                                    else $is_loss = true;
                                }
                            }
                            
                            $badge_color = '#666666';
                            $badge_label = 'DRAW';
                            if ($is_win) {
                                $badge_color = '#2e7d32';
                                $badge_label = 'WIN';
                            } elseif ($is_loss) {
                                $badge_color = '#c62828';
                                $badge_label = 'LOSS';
                            }
                        ?>
                        <div class="cm-club-match-card">
                            <div class="cm-match-card-header">
                                <span><i class="fa fa-calendar" style="color: var(--primary-color, #d8302f); margin-right: 4px;"></i> <?php echo date('d M Y', strtotime($match->match_date)); ?></span>
                                <span class="badge" style="background-color: <?php echo $badge_color; ?>; color: #fff; font-size: 10px; font-weight: 800; padding: 4px 10px; border-radius: 4px;"><?php echo $badge_label; ?></span>
                            </div>
                            
                            <div class="cm-match-card-body">
                                <div class="cm-match-team-block" style="justify-content: flex-end; text-align: right;">
                                    <span style="font-size: 13.5px; font-weight: 700; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; color: <?php echo ($match->sport_club_1 == $club->id) ? 'var(--primary-color, #d8302f)' : '#333'; ?>;"><?php echo $match->club_1; ?></span>
                                    <img src="<?php echo $logo1; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="" style="width: 32px; height: 32px; object-fit: contain;">
                                </div>
                                
                                <div class="cm-match-score-badge">
                                    <?php echo $score_text; ?>
                                </div>
                                
                                <div class="cm-match-team-block" style="justify-content: flex-start; text-align: left;">
                                    <img src="<?php echo $logo2; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="" style="width: 32px; height: 32px; object-fit: contain;">
                                    <span style="font-size: 13.5px; font-weight: 700; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; color: <?php echo ($match->sport_club_2 == $club->id) ? 'var(--primary-color, #d8302f)' : '#333'; ?>;"><?php echo $match->club_2; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="<?php echo site_url('klub'); ?>" class="cm-back-btn">
                <i class="fa fa-arrow-left"></i> Kembali ke Daftar Klub
            </a>
        </div>
    </div>
</section>
