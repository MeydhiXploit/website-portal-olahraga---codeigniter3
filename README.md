# Project Web Portal Berita Olahraga

Website Portal Berita Olahraga ini dibuat dengan menggunakan CodeIgniter 3. Website ini menyediakan segala informasi mengenai dunia olahraga. Di dalam website ini juga tersedia fitur admin, di mana admin dapat membuat dan menambahkan informasi-informasi ke dalam website ini.

## Link Akses Website (Server Local)

*   **Frontend (Halaman Utama):** [http://localhost/website-portal-olahraga/](http://localhost/website-portal-olahraga/)
*   **Backend (Halaman Admin):** [http://localhost/website-portal-olahraga/admin/login](http://localhost/website-portal-olahraga/admin/login)

---

## Dipersiapkan Oleh:

*   **Meydhi Ari Nugroho** (24010110126)
*   **Clara septia ramdhani** (2401010002)
*   **Villari Naufal Nety** (24010110076)
*   **M.syarifudin** (24010110078)

---

## 🚀 Panduan Kontribusi Kelompok (GitHub Workflow)

Untuk menjaga agar kode project tetap rapi, tidak bentrok (conflict), dan semua anggota kelompok bisa bekerja bersamaan dengan lancar, silakan ikuti alur kerja (workflow) di bawah ini:

### 1. Persiapan Awal (Setup Project Pertama Kali)

Jika Anda baru pertama kali bergabung ke repositori ini:
1. **Clone Repositori:**
   ```bash
   git clone https://github.com/MeydhiXploit/website-portal-olahraga---codeigniter3.git
   ```
2. **Pindahkan folder project** ke dalam direktori server lokal Anda (misal `C:/laragon/www/` atau `C:/xampp/htdocs/`).
3. **Nyalakan Server Lokal** (Laragon / XAMPP).
4. **Import Database:**
   - Buka `http://localhost/phpmyadmin/`.
   - Buat database baru bernama `portal_olahraga`.
   - Import file `portal_olahraga.sql` yang ada di root project ke database tersebut.
5. **Konfigurasi Aplikasi (Jika Perlu):**
   - Cek [application/config/config.php](file:///c:/laragon/www/website-portal-olahraga/application/config/config.php) untuk base URL.
   - Cek [application/config/database.php](file:///c:/laragon/www/website-portal-olahraga/application/config/database.php) untuk memastikan koneksi database (username, password, database) sudah sesuai dengan server lokal Anda.

---

### 2. Alur Kerja Harian (Git Workflow)

Setiap kali Anda ingin membuat fitur baru atau memperbaiki bug, ikuti langkah-langkah berikut secara berurutan:

#### Langkah Awal: Ambil Kode Terbaru
Sebelum menulis kode baru, pastikan repositori lokal Anda memiliki kode terbaru dari branch `main`.
```bash
# Pindah ke branch main
git checkout main

# Ambil perubahan terbaru dari GitHub
git pull origin main
```

#### Langkah 2: Buat Branch Baru
Jangan pernah melakukan coding atau commit langsung di branch `main`! Buatlah branch baru khusus untuk fitur yang ingin dikerjakan.
```bash
# Buat dan pindah ke branch baru
# Format: feature/nama-fitur atau fix/nama-bug
git checkout -b feature/tambah-detail-liga
```

#### Langkah 3: Coding & Uji Coba Lokal
- Tulis kode Anda di text editor (VS Code, dll.).
- Jalankan di browser dan pastikan fitur berjalan dengan baik serta tidak ada error.

#### Langkah 4: Commit Perubahan
Jika pekerjaan Anda sudah selesai dan berfungsi dengan baik:
```bash
# Cek file apa saja yang berubah/ditambahkan
git status

# Tambahkan perubahan ke staging area
git add .

# Buat commit dengan pesan yang jelas dan deskriptif
git commit -m "feat: menambahkan halaman detail liga dan daftar klub"
```
*Tips Penulisan Pesan Commit:*
- `feat: ...` untuk fitur baru.
- `fix: ...` untuk perbaikan bug/error.
- `docs: ...` untuk perubahan dokumentasi (seperti README).
- `style: ...` untuk merapikan format kode, CSS, atau tampilan tanpa mengubah logika.

#### Langkah 5: Push Branch ke GitHub
Kirim branch lokal Anda yang berisi fitur baru ke repositori GitHub online:
```bash
git push origin feature/tambah-detail-liga
```

---

### 3. Membuat Pull Request (PR) & Penggabungan Kode

Setelah berhasil melakukan push branch ke GitHub:
1. Buka halaman repositori GitHub project ini.
2. Anda akan melihat notifikasi kuning berupa tombol **"Compare & pull request"**. Klik tombol tersebut.
3. Beri judul Pull Request yang jelas dan jelaskan secara singkat apa saja yang Anda ubah atau tambahkan.
4. Klik **"Create pull request"**.
5. **Review Kode:** Beritahu anggota kelompok lain di grup chat untuk memeriksa (review) perubahan Anda.
6. **Merge:** Setelah disetujui dan tidak ada konflik (conflict), klik **"Merge pull request"** lalu klik **"Confirm merge"**.
7. Setelah di-merge, Anda bisa menghapus branch fitur tersebut di GitHub dan di komputer lokal Anda:
   ```bash
   git checkout main
   git pull origin main
   git branch -d feature/tambah-detail-liga
   ```

---

### 4. Sinkronisasi Perubahan Database (PENTING!)

Karena project ini menggunakan database MySQL (`portal_olahraga.sql`), ikuti aturan berikut jika Anda melakukan perubahan struktur database (seperti menambah tabel, menambah kolom, mengubah tipe data, dll.):
1. Setelah mengubah database di `phpmyadmin` lokal Anda, **Export** kembali database tersebut.
2. Simpan file hasil export tersebut dengan menimpa (overwrite) file [portal_olahraga.sql](file:///c:/laragon/www/website-portal-olahraga/portal_olahraga.sql) di root folder project.
3. Commit dan push file `portal_olahraga.sql` tersebut bersamaan dengan kode fitur Anda.
4. **Bagi Anggota Kelompok Lain:** Jika melihat ada perubahan pada file `portal_olahraga.sql` setelah Anda melakukan `git pull origin main`, segera import ulang file tersebut ke `phpmyadmin` lokal Anda agar database Anda tersinkronisasi.

---

### ⚠️ Tips Menghindari Konflik Kode (Merge Conflict)
- **Komunikasi:** Selalu koordinasikan dengan kelompok siapa mengerjakan file/fitur apa agar tidak ada dua orang yang mengubah file atau baris kode yang sama secara bersamaan.
- **Sering Pull:** Sering-sering lakukan `git pull origin main` ketika berada di branch `main` untuk meminimalkan perbedaan kode yang terlalu jauh.
