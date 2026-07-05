<style>
    .cm-athlete-card {
        background: #ffffff;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .cm-athlete-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        border-color: var(--primary-color);
    }

    .cm-athlete-photo-container {
        height: 240px;
        overflow: hidden;
        background-color: #f8f9fa;
        position: relative;
    }

    .cm-athlete-photo-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cm-athlete-number-badge {
        position: absolute;
        left: 14px;
        top: 14px;
        min-width: 46px;
        height: 34px;
        padding: 0 10px;
        border-radius: 6px;
        background: var(--primary-color);
        color: #ffffff;
        font-size: 14px;
        font-weight: 900;
        line-height: 34px;
        box-shadow: 0 6px 14px rgba(216, 48, 47, 0.25);
    }

    .cm-athlete-sport-badge {
        position: absolute;
        right: 14px;
        top: 14px;
        max-width: 120px;
        padding: 7px 10px;
        border-radius: 6px;
        background: rgba(0, 0, 0, 0.72);
        color: #ffffff;
        font-size: 10px;
        font-weight: 800;
        text-transform: uppercase;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .cm-athlete-info {
        padding: 18px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .cm-athlete-info h4 {
        font-size: 18px;
        font-weight: 700;
        margin: 0 0 10px 0;
        color: #333;
    }

    .cm-athlete-info h4 a {
        color: #333;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .cm-athlete-info h4 a:hover {
        color: var(--primary-color);
    }

    .cm-athlete-pos {
        font-size: 11px;
        font-weight: 700;
        color: var(--primary-color);
        text-transform: uppercase;
        margin-bottom: 8px;
        display: block;
    }

    .cm-athlete-club {
        font-size: 12px;
        color: var(--text-muted);
        margin-bottom: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
    }

    .cm-athlete-club img {
        width: 20px;
        height: 20px;
        object-fit: contain;
        border-radius: 50%;
        background: #ffffff;
        border: 1px solid #eeeeee;
    }

    .cm-athlete-meta-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 8px;
        margin-top: auto;
        margin-bottom: 15px;
    }

    .cm-athlete-meta-item {
        background: #f8f9fa;
        border: 1px solid #eeeeee;
        border-radius: 6px;
        padding: 8px 6px;
        min-height: 54px;
    }

    .cm-athlete-meta-label {
        display: block;
        font-size: 9px;
        color: #888888;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 3px;
    }

    .cm-athlete-meta-value {
        display: block;
        font-size: 12px;
        color: #222222;
        font-weight: 800;
    }

    .cm-athlete-action {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 38px;
        border-radius: 6px;
        background: #1f2937;
        color: #ffffff !important;
        font-size: 12px;
        font-weight: 800;
        text-transform: uppercase;
        text-decoration: none !important;
        transition: all 0.25s ease;
    }

    .cm-athlete-action:hover {
        background: var(--primary-color);
        transform: translateY(-1px);
    }

    .cm-athlete-action i {
        margin-left: 8px;
    }

    @media (max-width: 767px) {
        .cm-athlete-photo-container {
            height: 220px;
        }
    }
</style>

<div class="hero">
    <h1 class="hero-caption">Daftar Atlet Olahraga</h1>
</div>

<section id="contant" class="contant" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container">
        <!-- Filter Form -->
        <div style="background: #ffffff; border: 1px solid #eaeaea; border-radius: 8px; padding: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); margin-bottom: 30px;">
            <form method="GET" action="<?php echo site_url('atlet'); ?>" class="row" style="display: flex; align-items: flex-end; flex-wrap: wrap; gap: 15px;">
                <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: left;">
                    <label style="font-weight: 700; color: #333; margin-bottom: 8px; display: block; font-size: 13px;">Cabang Olahraga</label>
                    <select name="sport" class="form-control" style="height: 42px; border-radius: 4px; border: 1px solid #ccc; font-size: 13.5px;">
                        <option value="">Semua Cabang Olahraga</option>
                        <?php foreach ($sport_types as $sport): ?>
                            <option value="<?php echo $sport->id; ?>" <?php echo ($sport_filter == $sport->id) ? 'selected' : ''; ?>><?php echo $sport->name_type; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: left;">
                    <label style="font-weight: 700; color: #333; margin-bottom: 8px; display: block; font-size: 13px;">Klub Asal</label>
                    <select name="club" class="form-control" style="height: 42px; border-radius: 4px; border: 1px solid #ccc; font-size: 13.5px;">
                        <option value="">Semua Klub</option>
                        <?php foreach ($clubs as $club): ?>
                            <option value="<?php echo $club->id; ?>" <?php echo ($club_filter == $club->id) ? 'selected' : ''; ?>><?php echo $club->name; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <button type="submit" class="btn" style="background-color: var(--primary-color); color: #ffffff; font-weight: 700; height: 42px; padding: 0 30px; border-radius: 4px; border: none; width: 100%; text-transform: uppercase; letter-spacing: 0.5px; transition: all 0.3s ease;">Filter Atlet</button>
                </div>
            </form>
        </div>

        <!-- Athletes list -->
        <?php if (empty($athletes)): ?>
            <div class="alert alert-info text-center cm-alert" style="padding: 30px; border-radius: 8px;">
                <h4>Tidak ada profil atlet ditemukan dengan kriteria filter tersebut.</h4>
            </div>
        <?php else: ?>
            <div class="row" style="display: flex; flex-wrap: wrap;">
                <?php foreach ($athletes as $athlete):
                    $photo_src = (strpos($athlete->photo, 'http') === 0) ? $athlete->photo : base_url('upload/' . $athlete->photo);
                    $club_logo = !empty($athlete->club_logo) ? ((strpos($athlete->club_logo, 'http') === 0) ? $athlete->club_logo : base_url('upload/' . $athlete->club_logo)) : '';
                    $position = !empty($athlete->player_type) ? $athlete->player_type : 'Posisi belum diisi';
                    $club_name = !empty($athlete->club_name) ? $athlete->club_name : 'Tanpa Klub';
                    $sport_name = !empty($athlete->name_type) ? $athlete->name_type : 'Olahraga';
                    $league_name = !empty($athlete->name_league) ? $athlete->name_league : '-';
                    $gender_label = ($athlete->gender == 'male') ? 'Pria' : (($athlete->gender == 'female') ? 'Wanita' : '-');
                    $age_label = '-';
                    if (!empty($athlete->date_birth) && $athlete->date_birth !== '0000-00-00') {
                        $birthDate = new DateTime($athlete->date_birth);
                        $today = new DateTime('today');
                        $age_label = $birthDate->diff($today)->y . ' Th';
                    } elseif (!empty($athlete->age)) {
                        $age_label = $athlete->age . ' Th';
                    }
                    $height_label = !empty($athlete->height) ? $athlete->height . ' cm' : '-';
                    $back_number = !empty($athlete->backNumber) ? $athlete->backNumber : '0';
                ?>
                    <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 30px; display: flex;">
                        <div class="cm-athlete-card" style="width: 100%;">
                            <div class="cm-athlete-photo-container">
                                <a href="<?php echo site_url('atlet/detail/' . $athlete->id); ?>">
                                    <img src="<?php echo $photo_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($athlete->name); ?>">
                                </a>
                                <span class="cm-athlete-number-badge">#<?php echo htmlspecialchars($back_number); ?></span>
                                <span class="cm-athlete-sport-badge"><?php echo htmlspecialchars($sport_name); ?></span>
                            </div>
                            <div class="cm-athlete-info">
                                <span class="cm-athlete-pos"><?php echo htmlspecialchars($position); ?></span>
                                <h4><a href="<?php echo site_url('atlet/detail/' . $athlete->id); ?>"><?php echo htmlspecialchars($athlete->name); ?></a></h4>
                                <span class="cm-athlete-club">
                                    <?php if (!empty($club_logo)): ?>
                                        <img src="<?php echo $club_logo; ?>" onerror="this.style.display='none'" alt="<?php echo htmlspecialchars($club_name); ?>">
                                    <?php else: ?>
                                        <i class="fa fa-shield"></i>
                                    <?php endif; ?>
                                    <?php echo htmlspecialchars($club_name); ?> &bull; <?php echo htmlspecialchars($league_name); ?>
                                </span>
                                <div class="cm-athlete-meta-grid">
                                    <div class="cm-athlete-meta-item">
                                        <span class="cm-athlete-meta-label">Gender</span>
                                        <span class="cm-athlete-meta-value"><?php echo htmlspecialchars($gender_label); ?></span>
                                    </div>
                                    <div class="cm-athlete-meta-item">
                                        <span class="cm-athlete-meta-label">Usia</span>
                                        <span class="cm-athlete-meta-value"><?php echo htmlspecialchars($age_label); ?></span>
                                    </div>
                                    <div class="cm-athlete-meta-item">
                                        <span class="cm-athlete-meta-label">Tinggi</span>
                                        <span class="cm-athlete-meta-value"><?php echo htmlspecialchars($height_label); ?></span>
                                    </div>
                                </div>
                                <a class="cm-athlete-action" href="<?php echo site_url('atlet/detail/' . $athlete->id); ?>">
                                    Lihat Profil <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagination -->
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-12 text-center">
                    <?php echo $pagination; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
