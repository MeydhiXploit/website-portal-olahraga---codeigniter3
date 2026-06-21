<style>
    .cm-athlete-card {
        background: #ffffff;
        border: 1px solid #eaeaea;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.02);
        transition: all 0.3s ease;
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .cm-athlete-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        border-color: var(--primary-color);
    }

    .cm-athlete-photo-container {
        height: 250px;
        overflow: hidden;
        background-color: #f8f9fa;
        position: relative;
    }

    .cm-athlete-photo-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .cm-athlete-info {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .cm-athlete-info h4 {
        font-size: 16px;
        font-weight: 700;
        margin: 0 0 8px 0;
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
        margin-bottom: 6px;
        display: block;
    }

    .cm-athlete-club {
        font-size: 12px;
        color: var(--text-muted);
        margin-top: auto;
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
                        <?php foreach($sport_types as $sport): ?>
                            <option value="<?php echo $sport->id; ?>" <?php echo ($sport_filter == $sport->id) ? 'selected' : ''; ?>><?php echo $sport->name_type; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12" style="text-align: left;">
                    <label style="font-weight: 700; color: #333; margin-bottom: 8px; display: block; font-size: 13px;">Klub Asal</label>
                    <select name="club" class="form-control" style="height: 42px; border-radius: 4px; border: 1px solid #ccc; font-size: 13.5px;">
                        <option value="">Semua Klub</option>
                        <?php foreach($clubs as $club): ?>
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
                <?php foreach($athletes as $athlete): 
                    $photo_src = (strpos($athlete->photo, 'http') === 0) ? $athlete->photo : base_url('uploads/' . $athlete->photo);
                ?>
                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 30px; display: flex;">
                    <div class="cm-athlete-card" style="width: 100%;">
                        <div class="cm-athlete-photo-container">
                            <a href="<?php echo site_url('atlet/detail/'.$athlete->id); ?>">
                                <img src="<?php echo $photo_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($athlete->name); ?>">
                            </a>
                        </div>
                        <div class="cm-athlete-info">
                            <span class="cm-athlete-pos">#<?php echo $athlete->backNumber; ?> - <?php echo $athlete->player_type; ?></span>
                            <h4><a href="<?php echo site_url('atlet/detail/'.$athlete->id); ?>"><?php echo $athlete->name; ?></a></h4>
                            <span class="cm-athlete-club"><?php echo $athlete->club_name; ?></span>
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
