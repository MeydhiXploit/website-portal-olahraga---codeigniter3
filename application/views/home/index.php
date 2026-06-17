<style>

/* ===============================
   PREMIUM LIVE SPORTS SYSTEM
================================ */

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800;900&family=Inter:wght@300;400;600;800&display=swap');

:root{
    --bg:#0b1220;
    --card:rgba(255,255,255,0.06);
    --glass:rgba(255,255,255,0.08);
    --border:rgba(255,255,255,0.12);
    --text:#e5e7eb;
    --muted:#94a3b8;
    --primary:#ff1e1e;
    --cyan:#22d3ee;
}

body{
    margin:0;
    font-family:'Inter','Poppins',sans-serif;
    background:var(--bg);
    color:var(--text);
    overflow-x:hidden;
}

/* LIVE BADGE */
.live-badge{
    display:inline-flex;
    align-items:center;
    gap:8px;
    padding:6px 14px;
    border-radius:999px;
    background:rgba(255,30,30,0.15);
    border:1px solid rgba(255,30,30,0.35);
    color:var(--primary);
    font-weight:800;
    font-size:12px;
    backdrop-filter:blur(12px);
}

.live-dot{
    width:8px;
    height:8px;
    background:var(--primary);
    border-radius:50%;
    animation:pulse 1.2s infinite;
}

@keyframes pulse{
    0%{transform:scale(1);opacity:1}
    50%{transform:scale(1.4);opacity:.5}
    100%{transform:scale(1);opacity:1}
}

/* HERO */
.hero{
    min-height:100vh;
    display:flex;
    align-items:center;
    padding:80px 60px;
    position:relative;
    background:
        linear-gradient(120deg, rgba(0,0,0,.75), rgba(255,30,30,.35)),
        url("<?php echo base_url('assets/img/stadium.jpg'); ?>");
    background-size:cover;
    background-position:center;
}

.hero::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(to top, rgba(11,18,32,0.9), transparent);
}

.hero-content{
    position:relative;
    z-index:2;
    max-width:700px;
}

.hero-title{
    font-size:56px;
    font-weight:900;
    text-transform:uppercase;
    line-height:1.05;
}

.hero-sub{
    margin-top:15px;
    font-size:18px;
    color:var(--muted);
}

/* SECTION */
.section-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin:50px 0 20px;
}

.section-title{
    font-size:26px;
    font-weight:900;
}

/* FEATURED */
.featured-card{
    display:block;
    position:relative;
    border-radius:18px;
    overflow:hidden;
    text-decoration:none;
    color:inherit;
    backdrop-filter:blur(12px);
    background:var(--glass);
    border:1px solid rgba(255,255,255,0.10);
    transition:.2s;
}

.featured-card:hover{
    transform:translateY(-3px);
}

.featured-card img{
    width:100%;
    height:420px;
    object-fit:cover;
    transition:.5s;
}

.featured-card:hover img{
    transform:scale(1.08);
}

.featured-overlay{
    position:absolute;
    bottom:0;
    padding:30px;
    width:100%;
    background:linear-gradient(to top, rgba(0,0,0,.9), transparent);
}

.featured-title{
    font-size:22px;
    font-weight:900;
}

/* SIDE NEWS */
.side-item{
    display:flex;
    gap:12px;
    padding:12px;
    border-radius:16px;
    background:var(--card);
    border:1px solid var(--border);
    text-decoration:none;
    color:inherit;
    transition:.2s;
}

.side-item:hover{
    transform:translateX(6px);
    border-color:var(--primary);
}

.side-item img{
    width:100px;
    height:75px;
    object-fit:cover;
    border-radius:10px;
}

/* SCOREBOARD */
.scoreboard{
    background:rgba(255,255,255,0.04);
    border:1px solid var(--border);
    border-radius:20px;
    padding:20px;
    backdrop-filter:blur(16px);
}

.match-row{
    display:flex;
    justify-content:space-between;
    padding:12px 0;
    border-bottom:1px solid rgba(255,255,255,0.08);
}

.score{
    background:var(--primary);
    padding:6px 14px;
    border-radius:10px;
    font-weight:900;
}

/* NEWS CARD */
.news-card{
    display:block;
    border-radius:16px;
    overflow:hidden;
    text-decoration:none;
    color:inherit;
    background:var(--glass);
    border:1px solid rgba(255,255,255,0.10);
    transition:.2s;
}

.news-card:hover{
    transform:translateY(-3px);
}

.news-card img{
    width:100%;
    height:170px;
    object-fit:cover;
}

.news-body{
    padding:16px;
}

.news-title{
    font-size:16px;
    font-weight:800;
}

/* ATHLETE */
.athlete-card{
    text-align:center;
    border-radius:16px;
    overflow:hidden;
    background:var(--card);
    border:1px solid rgba(255,255,255,0.10);
    transition:.2s;
}

.athlete-card:hover{
    transform:translateY(-3px);
}

.athlete-card img{
    width:100%;
    height:200px;
    object-fit:cover;
}

/* CLUB */
.club-card{
    text-align:center;
    padding:12px;
    border-radius:16px;
    background:var(--card);
    border:1px solid rgba(255,255,255,0.10);
    transition:.2s;
}

.club-card:hover{
    transform:translateY(-3px);
    border-color:var(--cyan);
}

.club-card img{
    width:60px;
    height:60px;
}

/* RESPONSIVE */
@media(max-width:768px){
    .hero-title{font-size:36px}
    .hero{padding:40px 20px}
    .featured-card img{height:260px}
}

</style>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">

        <div class="live-badge">
            <span class="live-dot"></span>
            LIVE BROADCAST
        </div>

        <div class="hero-title">PORTAL OLAHRAGA PREMIUM</div>

        <div class="hero-sub">Dashboard olahraga real-time seperti ESPN</div>

    </div>
</section>

<?php if(!empty($latest_news)): ?>

<div class="container">

    <div class="section-header">
        <div class="section-title">Breaking News</div>
    </div>

    <div class="row">

        <div class="col-md-7">

            <?php $n=$latest_news[0]; ?>
            <?php $img=(strpos($n->thumbnail,'http')===0)?$n->thumbnail:base_url('uploads/'.$n->thumbnail); ?>

            <a href="<?php echo site_url('news/'.$n->news_slug); ?>" class="featured-card">
                <img src="<?php echo $img; ?>">
                <div class="featured-overlay">
                    <div class="featured-title"><?php echo $n->title; ?></div>
                </div>
            </a>

        </div>

        <div class="col-md-5">

            <?php for($i=1;$i<=4;$i++): if(isset($latest_news[$i])): $n=$latest_news[$i]; ?>
            <?php $img=(strpos($n->thumbnail,'http')===0)?$n->thumbnail:base_url('uploads/'.$n->thumbnail); ?>

            <a href="<?php echo site_url('news/'.$n->news_slug); ?>" class="side-item">
                <img src="<?php echo $img; ?>">
                <div><?php echo $n->title; ?></div>
            </a>

            <?php endif; endfor; ?>

        </div>

    </div>
</div>

<!-- SCOREBOARD -->
<div class="container">

    <div class="section-header">
        <div class="section-title">Live Score</div>
    </div>

    <div class="scoreboard">

        <?php foreach($latest_matches as $m): ?>
        <div class="match-row">
            <span><?php echo $m->club_1; ?></span>

            <div class="score">
                <?php echo $m->club_1_score; ?> - <?php echo $m->club_2_score; ?>
            </div>

            <span><?php echo $m->club_2; ?></span>
        </div>
        <?php endforeach; ?>

    </div>

</div>

<!-- NEWS GRID -->
<div class="container">

    <div class="section-header">
        <div class="section-title">Latest News</div>
    </div>

    <div class="row">

        <?php foreach($latest_news as $n): ?>
        <?php $img=(strpos($n->thumbnail,'http')===0)?$n->thumbnail:base_url('uploads/'.$n->thumbnail); ?>

        <div class="col-md-4">

            <a href="<?php echo site_url('news/'.$n->news_slug); ?>" class="news-card">
                <img src="<?php echo $img; ?>">
                <div class="news-body">
                    <div class="news-title"><?php echo $n->title; ?></div>
                </div>
            </a>

        </div>

        <?php endforeach; ?>

    </div>
</div>

<?php endif; ?>