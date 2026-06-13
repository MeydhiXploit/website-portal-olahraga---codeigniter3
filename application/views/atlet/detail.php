<style>
    .cm-athlete-detail-section {
        background: #fdfdfd;
        padding: 50px 0;
    }

    .cm-athlete-detail-card {
        background: #ffffff;
        border: none;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        margin-bottom: 30px;
        border: 1px solid rgba(0,0,0,0.03);
        position: relative;
    }

    .cm-athlete-detail-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary-color, #d8302f) 0%, #ffcb05 100%);
    }

    .cm-athlete-detail-photo {
        width: 100%;
        height: 100%;
        max-height: 520px;
        object-fit: cover;
        background-color: #f8f9fa;
        transition: transform 0.4s ease;
    }

    .cm-athlete-detail-photo:hover {
        transform: scale(1.02);
    }

    @media (min-width: 768px) {
        .cm-athlete-detail-photo {
            height: 100%;
            min-height: 480px;
            border-right: 1px solid #f1f1f1;
        }
    }

    .cm-athlete-detail-info {
        padding: 45px;
        text-align: left;
    }

    .cm-athlete-detail-tag {
        font-size: 11px;
        font-weight: 800;
        color: var(--primary-color, #d8302f);
        text-transform: uppercase;
        letter-spacing: 1.5px;
        margin-bottom: 15px;
        background: rgba(216, 48, 47, 0.06);
        padding: 5px 15px;
        border-radius: 20px;
        display: inline-block;
    }

    .cm-athlete-detail-name {
        font-size: 36px;
        font-weight: 900;
        color: #1a1a1a;
        margin: 0 0 25px 0;
        line-height: 1.2;
        letter-spacing: -0.5px;
    }

    .cm-athlete-table {
        width: 100%;
        margin-bottom: 35px;
    }

    .cm-athlete-table tr {
        border-bottom: 1px solid #f8f9fa;
    }

    .cm-athlete-table tr:last-child {
        border-bottom: none;
    }

    .cm-athlete-table td {
        padding: 14px 0;
        font-size: 14.5px;
    }

    .cm-athlete-table td.label-cell {
        font-weight: 700;
        color: #666666;
        width: 35%;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .cm-athlete-table td.label-cell i {
        color: var(--primary-color, #d8302f);
        font-size: 15px;
        width: 18px;
        text-align: center;
    }

    .cm-athlete-table td.value-cell {
        color: #1a1a1a;
        font-weight: 600;
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
    <h1 class="hero-caption">Profil Atlet</h1>
</div>
</section>

<section id="contant" class="contant cm-athlete-detail-section">
    <div class="container">
        <div class="cm-athlete-detail-card">
            <div class="row style-flex" style="display: flex; flex-wrap: wrap;">
                <!-- Athlete Photo -->
                <div class="col-md-5 col-sm-12 col-xs-12" style="padding: 0; overflow: hidden;">
                    <?php 
                    $photo_src = (strpos($athlete->photo, 'http') === 0) ? $athlete->photo : base_url('uploads/' . $athlete->photo);
                    ?>
                    <img class="cm-athlete-detail-photo" src="<?php echo $photo_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($athlete->name); ?>" />
                </div>
                
                <!-- Athlete Details -->
                <div class="col-md-7 col-sm-12 col-xs-12" style="display: flex; align-items: center;">
                    <div class="cm-athlete-detail-info">
                        <span class="cm-athlete-detail-tag">
                            <i class="fa fa-tag" style="margin-right: 4px;"></i> No. Punggung #<?php echo $athlete->backNumber; ?> &bull; <?php echo $athlete->player_type; ?>
                        </span>
                        <h2 class="cm-athlete-detail-name"><?php echo $athlete->name; ?></h2>
                        
                        <table class="cm-athlete-table">
                            <tbody>
                                <tr>
                                    <td class="label-cell"><i class="fa fa-play-circle"></i> Cabang Olahraga</td>
                                    <td class="value-cell"><?php echo $athlete->name_type; ?></td>
                                </tr>
                                <tr>
                                    <td class="label-cell"><i class="fa fa-shield"></i> Klub Saat Ini</td>
                                    <td class="value-cell">
                                        <?php if (!empty($athlete->sport_club)): ?>
                                            <a href="<?php echo site_url('klub/detail/'.$athlete->sport_club); ?>" style="color: var(--primary-color, #d8302f); font-weight: 800; text-decoration: none;">
                                                <?php echo $athlete->club_name; ?>
                                            </a>
                                        <?php else: ?>
                                            -
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-cell"><i class="fa fa-trophy"></i> Liga</td>
                                    <td class="value-cell"><?php echo $athlete->name_league; ?></td>
                                </tr>
                                <tr>
                                    <td class="label-cell"><i class="fa fa-birthday-cake"></i> Tanggal Lahir</td>
                                    <td class="value-cell">
                                        <?php 
                                            if (!empty($athlete->date_birth)) {
                                                echo date('d F Y', strtotime($athlete->date_birth));
                                                $birthDate = new DateTime($athlete->date_birth);
                                                $today = new DateTime('today');
                                                $age = $birthDate->diff($today)->y;
                                                echo " <span style='font-weight: 400; color: #888;'>(" . $age . " Tahun)</span>";
                                            } else {
                                                echo "-";
                                            }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="label-cell"><i class="fa fa-user"></i> Jenis Kelamin</td>
                                    <td class="value-cell"><?php echo ($athlete->gender == 'male') ? 'Pria' : 'Wanita'; ?></td>
                                </tr>
                                <tr>
                                    <td class="label-cell"><i class="fa fa-arrows-v"></i> Tinggi Badan</td>
                                    <td class="value-cell"><?php echo !empty($athlete->height) ? $athlete->height . ' cm' : '-'; ?></td>
                                </tr>
                                <tr>
                                    <td class="label-cell"><i class="fa fa-balance-scale"></i> Berat Badan</td>
                                    <td class="value-cell"><?php echo !empty($athlete->weight) ? $athlete->weight . ' kg' : '-'; ?></td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <div>
                            <a href="<?php echo site_url('atlet'); ?>" class="cm-back-btn">
                                <i class="fa fa-arrow-left"></i> Kembali ke Daftar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
