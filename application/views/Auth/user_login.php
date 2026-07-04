<style>
    .cm-auth-section {
        background: #fcfcfc;
        padding: 60px 0;
    }

    .cm-auth-card {
        background: #ffffff;
        border: none;
        border-radius: 16px;
        box-shadow: 0 15px 40px rgba(0,0,0,0.05);
        padding: 50px 40px;
        max-width: 460px;
        margin: 0 auto;
        text-align: left;
        border: 1px solid rgba(0,0,0,0.03);
        position: relative;
    }

    .cm-auth-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary-color, #d8302f) 0%, #ffcb05 100%);
        border-radius: 16px 16px 0 0;
    }

    .cm-auth-title {
        font-size: 26px;
        font-weight: 900;
        color: #1a1a1a;
        margin-bottom: 30px;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: -0.5px;
    }

    .cm-auth-form .form-group {
        margin-bottom: 22px;
    }

    .cm-auth-form label {
        font-weight: 700;
        color: #444444;
        font-size: 13px;
        margin-bottom: 8px;
        display: block;
    }

    .cm-input-wrapper {
        position: relative;
    }

    .cm-input-wrapper i {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #888888;
        font-size: 16px;
        transition: color 0.3s ease;
    }

    .cm-auth-form .form-control {
        height: 48px;
        border-radius: 8px;
        border: 1px solid #e2e8f0;
        padding: 10px 15px 10px 45px;
        font-size: 14px;
        transition: all 0.3s ease;
        background: #f8fafc;
        width: 100%;
    }

    .cm-auth-form .form-control:focus {
        border-color: var(--primary-color, #d8302f);
        box-shadow: 0 0 0 3px rgba(216,48,47,0.12);
        background: #ffffff;
        outline: none;
    }

    .cm-auth-form .form-control:focus + i {
        color: var(--primary-color, #d8302f);
    }

    .cm-auth-btn {
        background: linear-gradient(135deg, var(--primary-color, #d8302f) 0%, #b02423 100%);
        color: #ffffff !important;
        font-weight: 700;
        width: 100%;
        height: 48px;
        border: none;
        border-radius: 8px;
        text-transform: uppercase;
        font-size: 13px;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        margin-top: 10px;
        box-shadow: 0 4px 15px rgba(216, 48, 47, 0.2);
    }

    .cm-auth-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(216, 48, 47, 0.3);
    }

    .cm-auth-error {
        color: #e53e3e;
        font-size: 11.5px;
        font-weight: 600;
        margin-top: 6px;
        display: block;
    }

    .cm-auth-footer {
        margin-top: 30px;
        text-align: center;
        font-size: 13.5px;
        color: #666666;
        border-top: 1px solid #f1f5f9;
        padding-top: 20px;
    }

    .cm-auth-footer a {
        color: var(--primary-color, #d8302f);
        font-weight: 700;
        text-decoration: none;
    }

    .cm-auth-footer a:hover {
        text-decoration: underline;
    }
</style>

<div class="hero">
    <h1 class="hero-caption">Sign In</h1>
</div>

<section id="contant" class="contant cm-auth-section">
    <div class="container">
        <div class="cm-auth-card">
            <h2 class="cm-auth-title">Masuk Akun</h2>
            
            <?php if (!empty($this->session->flashdata('failed'))): ?>
                <div class="alert alert-danger text-center" style="border-radius: 8px; padding: 12px; font-size: 13px; font-weight: 600; margin-bottom: 25px; border: none; background-color: #fff5f5; color: #c53030;">
                    <i class="fa fa-exclamation-triangle" style="margin-right: 5px;"></i> <?php echo $this->session->flashdata('failed'); ?>
                </div>
            <?php endif; ?>
            
            <?php if (!empty($this->session->flashdata('success'))): ?>
                <div class="alert alert-success text-center" style="border-radius: 8px; padding: 12px; font-size: 13px; font-weight: 600; margin-bottom: 25px; border: none; background-color: #f0fff4; color: #22543d;">
                    <i class="fa fa-check-circle" style="margin-right: 5px;"></i> <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>

            <form class="cm-auth-form" method="POST" action="<?php echo site_url('login'); ?>">
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <div class="cm-input-wrapper">
                        <input type="email" id="email" name="email" class="form-control" placeholder="nama@email.com" value="<?php echo set_value('email'); ?>" required autocomplete="email">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <?php if (form_error('email')): ?>
                        <span class="cm-auth-error"><?php echo form_error('email'); ?></span>
                    <?php endif; ?>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="cm-input-wrapper">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password Anda" required autocomplete="current-password">
                        <i class="fa fa-lock"></i>
                    </div>
                    <?php if (form_error('password')): ?>
                        <span class="cm-auth-error"><?php echo form_error('password'); ?></span>
                    <?php endif; ?>
                </div>
                
                <button type="submit" class="cm-auth-btn">Sign In</button>
            </form>
            
            <div class="cm-auth-footer">
                Belum punya akun? <a href="<?php echo site_url('register'); ?>">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</section>
