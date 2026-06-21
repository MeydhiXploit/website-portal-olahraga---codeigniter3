<div class="hero">
    <h1 class="hero-caption">Jadwal Pertandingan</h1>
</div>

<section id="contant" class="contant" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container">
        <!-- Filter Form -->
        <div style="background: #ffffff; border: 1px solid #eaeaea; border-radius: 8px; padding: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); margin-bottom: 30px;">
            <form method="GET" action="<?php echo site_url('pertandingan'); ?>" class="row" style="display: flex; align-items: flex-end; flex-wrap: wrap; gap: 15px;">
                <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: left;">
                    <label style="font-weight: 700; color: #333; margin-bottom: 8px; display: block; font-size: 13px;">Cabang Olahraga</label>
                    <select name="sport" class="form-control" style="height: 42px; border-radius: 4px; border: 1px solid #ccc; font-size: 13.5px;">
                        <option value="">Semua Cabang Olahraga</option>
                        <?php foreach($sport_types as $sport): ?>
                            <option value="<?php echo $sport->id; ?>" <?php echo ($sport_filter == $sport->id) ? 'selected' : ''; ?>><?php echo $sport->name_type; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: left;">
                    <label style="font-weight: 700; color: #333; margin-bottom: 8px; display: block; font-size: 13px;">Liga / Turnamen</label>
                    <select name="league" class="form-control" style="height: 42px; border-radius: 4px; border: 1px solid #ccc; font-size: 13.5px;">
                        <option value="">Semua Liga</option>
                        <?php foreach($leagues as $league): ?>
                            <option value="<?php echo $league->id; ?>" <?php echo ($league_filter == $league->id) ? 'selected' : ''; ?>><?php echo $league->name_league; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <button type="submit" class="btn" style="background-color: var(--primary-color); color: #ffffff; font-weight: 700; height: 42px; padding: 0 30px; border-radius: 4px; border: none; width: 100%; text-transform: uppercase; letter-spacing: 0.5px; transition: all 0.3s ease;">Filter Jadwal</button>
                </div>
            </form>
        </div>

        <!-- Matches list -->
        <div style="background-color: #ffffff; border: 1px solid #eaeaea; border-radius: 8px; padding: 25px; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
            <div class="colormag-category-header" style="margin-top: 0; margin-bottom: 25px;">
                <h2 class="colormag-category-title" style="font-size: 16px;">
                    Jadwal & Hasil Pertandingan
                </h2>
            </div>
            
            <div style="display: flex; flex-direction: column; gap: 20px;">
                <?php if (empty($matches)): ?>
                    <div class="alert alert-info text-center cm-alert" style="padding: 20px; border-radius: 8px; margin: 10px 0;">
                        <h4 style="margin: 0; color: #333;">Tidak ada jadwal pertandingan ditemukan dengan kriteria filter tersebut.</h4>
                    </div>
                <?php else: ?>
                    <?php foreach($matches as $match): 
                        $logo1 = (strpos($match->logo_club_1, 'http') === 0) ? $match->logo_club_1 : base_url('uploads/' . $match->logo_club_1);
                        $logo2 = (strpos($match->logo_club_2, 'http') === 0) ? $match->logo_club_2 : base_url('uploads/' . $match->logo_club_2);
                    ?>
                    <div style="display: flex; align-items: center; justify-content: space-between; background: #ffffff; border: 1px solid #eaeaea; border-radius: 10px; padding: 20px; box-shadow: 0 4px 15px rgba(0,0,0,0.02); transition: all 0.3s ease; flex-wrap: wrap; gap: 15px;">
                        <!-- Date & League Info -->
                        <div style="flex: 1 1 220px; display: flex; align-items: center; gap: 10px; color: var(--text-muted); font-size: 13px; text-align: left;">
                            <i class="fa fa-calendar" style="color: var(--primary-color); font-size: 16px;"></i>
                            <span>
                                <strong style="color: #333; display: block; font-size: 14px;"><?php echo date('d M Y', strtotime($match->match_date)); ?></strong>
                                Pukul <?php echo date('H:i', strtotime($match->match_date)); ?> WIB (<?php echo $match->name_league; ?>)
                            </span>
                        </div>
                        
                        <!-- Scoreboard Center -->
                        <div style="flex: 2 1 300px; display: flex; align-items: center; justify-content: center; gap: 20px;">
                            <div style="text-align: right; width: 42%; display: flex; align-items: center; justify-content: flex-end; gap: 10px;">
                                <span style="font-size: 14.5px; font-weight: 700; color: #333;"><?php echo $match->club_1; ?></span>
                                <img src="<?php echo $logo1; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="" style="height: 45px; width: 45px; object-fit: contain;">
                            </div>
                            
                            <div style="font-size: 12.5px; font-weight: 800; color: #ffffff; background: var(--primary-color); padding: 6px 16px; border-radius: 4px; flex-shrink: 0; min-width: 60px; text-align: center; box-shadow: 0 2px 5px rgba(216, 48, 47, 0.2);">
                                <?php echo $match->club_1_score; ?> - <?php echo $match->club_2_score; ?>
                            </div>
                            
                            <div style="text-align: left; width: 42%; display: flex; align-items: center; justify-content: flex-start; gap: 10px;">
                                <img src="<?php echo $logo2; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="" style="height: 45px; width: 45px; object-fit: contain;">
                                <span style="font-size: 14.5px; font-weight: 700; color: #333;"><?php echo $match->club_2; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                    <!-- Pagination -->
                    <div style="margin-top: 25px; text-align: center;">
                        <?php echo $pagination; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
