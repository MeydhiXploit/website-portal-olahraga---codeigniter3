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
        max-width: 520px;
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

    .cm-gender-container {
        display: flex;
        gap: 30px;
        padding: 5px 0;
    }

    .cm-gender-option {
        display: flex;
        align-items: center;
        cursor: pointer;
        font-weight: 600 !important;
        font-size: 14px !important;
        color: #555555;
    }

    .cm-gender-option input {
        margin-right: 10px;
        width: 18px;
        height: 18px;
        cursor: pointer;
        accent-color: var(--primary-color, #d8302f);
    }
</style>

<div class="hero">
    <h1 class="hero-caption">Sign Up</h1>
</div>
</section>

<section id="contant" class="contant cm-auth-section">
    <div class="container">
        <div class="cm-auth-card">
            <h2 class="cm-auth-title">Daftar Akun Penulis</h2>

            <form class="cm-auth-form" method="POST" action="<?php echo site_url('register'); ?>">
                <div class="form-group">
                    <label for="fullname">Nama Lengkap</label>
                    <div class="cm-input-wrapper">
                        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Nama Lengkap Anda" value="<?php echo set_value('fullname'); ?>" required>
                        <i class="fa fa-user"></i>
                    </div>
                    <?php if (form_error('fullname')): ?>
                        <span class="cm-auth-error"><?php echo form_error('fullname'); ?></span>
                    <?php endif; ?>
                </div>

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
                    <label for="username">Username</label>
                    <div class="cm-input-wrapper">
                        <input type="text" id="username" name="username" class="form-control" placeholder="username" value="<?php echo set_value('username'); ?>" required>
                        <i class="fa fa-at"></i>
                    </div>
                    <?php if (form_error('username')): ?>
                        <span class="cm-auth-error"><?php echo form_error('username'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="password">Password (Minimal 5 Karakter)</label>
                    <div class="cm-input-wrapper">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Buat password Anda" required autocomplete="new-password">
                        <i class="fa fa-lock"></i>
                    </div>
                    <?php if (form_error('password')): ?>
                        <span class="cm-auth-error"><?php echo form_error('password'); ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="cm-gender-container">
                        <label class="cm-gender-option" for="gender_male">
                            <input type="radio" id="gender_male" name="gender" value="male" <?php echo set_value('gender') === 'male' ? 'checked' : ''; ?> required>
                            Laki-laki
                        </label>
                        <label class="cm-gender-option" for="gender_female">
                            <input type="radio" id="gender_female" name="gender" value="female" <?php echo set_value('gender') === 'female' ? 'checked' : ''; ?> required>
                            Perempuan
                        </label>
                    </div>
                    <?php if (form_error('gender')): ?>
                        <span class="cm-auth-error"><?php echo form_error('gender'); ?></span>
                    <?php endif; ?>
                </div>

                <button type="submit" class="cm-auth-btn">Daftar Akun</button>
            </form>

            <div class="cm-auth-footer">
                Sudah memiliki akun? <a href="<?php echo site_url('login'); ?>">Masuk/Login</a>
            </div>
        </div>
    </div>
</section>
