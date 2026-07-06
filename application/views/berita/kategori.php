<style>
    /*  HALAMAN KATEGORI BERITA
     Fungsi :
     Menampilkan seluruh berita berdasarkan kategori olahraga
     yang dipilih oleh pengguna. Halaman ini juga dilengkapi
     dengan sidebar dan tampilan kartu berita yang responsif. */
    .cm-sidebar-widget {
    background-color: #ffffff;              /* Warna background putih */
    border: 1px solid #eaeaea;              /* Border tipis abu-abu */
    border-radius: 8px;                    /* Sudut membulat agar modern */
    padding: 24px;                         /* Jarak isi dalam widget */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02); /* Bayangan halus */
    margin-bottom: 30px;                   /* Jarak antar widget */
}
    
    /* 
   SIDEBAR TITLE STYLE (.cm-sidebar-title)
   Fungsi :
   Mengatur tampilan judul pada widget sidebar agar terlihat
   lebih tegas, modern, dan konsisten di seluruh halaman.

   Style ini digunakan pada setiap judul widget seperti
   "Berita Populer", "Kategori Lain", dll.*/

    .cm-sidebar-title {
    font-size: 14px !important;              /* Ukuran teks judul */
    font-weight: 800 !important;             /* Ketebalan huruf (bold) */
    text-transform: uppercase !important;    /* Semua huruf jadi kapital */
    color: #222222 !important;               /* Warna teks utama */
    margin: 0 0 20px 0 !important;           /* Jarak bawah dari judul */
    padding-bottom: 10px !important;         /* Jarak dalam bawah teks */
    border-bottom: 2px solid var(--primary-color) !important; /* Garis bawah warna utama */
    letter-spacing: 0.5px !important;        /* Jarak antar huruf */
    position: relative !important;           /* Untuk positioning elemen tambahan jika diperlukan */
}
/* 
   SIDEBAR NEWS LIST (.cm-sidebar-news-list)
   Fungsi :
   Mengatur tampilan daftar berita pada sidebar agar tersusun
   secara vertikal, rapi, dan memiliki jarak antar item yang konsisten.

   Digunakan pada widget seperti "Berita Populer" agar setiap item
   berita terlihat jelas dan mudah dibaca oleh pengguna.
   */
    .cm-sidebar-news-list {
    display: flex;                 /* Mengaktifkan flexbox */
    flex-direction: column;        /* Menyusun item secara vertikal (atas ke bawah) */
    gap: 15px;                     /* Jarak antar item berita */
    padding: 0;                   /* Menghilangkan padding default */
    margin: 0;                    /* Menghilangkan margin default */
    list-style: none;             /* Menghapus bullet pada list */
}
/* 
   SIDEBAR NEWS ITEM (.cm-sidebar-news-item)
   Fungsi :
   Mengatur tampilan link berita pada sidebar agar tersusun
   secara horizontal (gambar + teks) dengan jarak yang rapi
   dan efek transisi yang halus saat interaksi.

   Digunakan pada widget "Berita Populer" untuk setiap item berita.
   */
    .cm-sidebar-news-item {
    display: flex;                 /* Menyusun elemen (thumbnail + info) secara horizontal */
    gap: 12px;                     /* Jarak antara gambar dan teks */
    align-items: center;          /* Menyelaraskan item secara vertikal di tengah */
    text-decoration: none !important; /* Menghapus underline pada link */
    transition: all 0.2s ease;     /* Efek animasi halus saat hover atau perubahan style */
}
/* 
   SIDEBAR NEWS ITEM HOVER EFFECT
   Fungsi :
   Memberikan efek interaktif saat pengguna mengarahkan
   kursor ke item berita pada sidebar.

   Efek ini membuat item sedikit bergeser ke kanan
   untuk meningkatkan UX (user experience).
    */
    .cm-sidebar-news-item:hover {
    transform: translateX(3px); /* Menggeser item ke kanan saat hover */
}
/* 
   SIDEBAR NEWS THUMBNAIL (.cm-sidebar-news-thumb)
   Fungsi :
   Mengatur ukuran dan tampilan gambar thumbnail pada
   daftar berita sidebar agar konsisten, rapi, dan tidak
   mengganggu layout teks di sebelahnya.

   Thumbnail ini digunakan pada widget "Berita Populer".
  */
    .cm-sidebar-news-thumb {
    width: 65px;                    /* Lebar thumbnail tetap */
    height: 65px;                   /* Tinggi thumbnail tetap (kotak) */
    border-radius: 6px;             /* Membuat sudut gambar sedikit melengkung */
    overflow: hidden;               /* Memotong gambar agar tidak keluar kotak */
    flex-shrink: 0;                 /* Mencegah thumbnail mengecil saat layout flex */
    background-color: #f0f0f0;      /* Warna background saat gambar belum load / error */
}
/* 
   SIDEBAR NEWS THUMB IMAGE
   (.cm-sidebar-news-thumb img)
   Fungsi :
   Mengatur tampilan gambar di dalam thumbnail sidebar
   agar memenuhi container dengan proporsi yang rapi
   tanpa merusak aspek rasio gambar.

   Digunakan pada widget "Berita Populer".
    */
    .cm-sidebar-news-thumb img {
    width: 100%;            /* Gambar memenuhi lebar container */
    height: 100%;           /* Gambar memenuhi tinggi container */
    object-fit: cover;      /* Memotong gambar secara proporsional agar tetap rapi */
}

   /* 
   SIDEBAR NEWS INFO (.cm-sidebar-news-info)
   Fungsi :
   Mengatur layout teks informasi berita pada sidebar
   agar tersusun rapi secara vertikal dan sejajar dengan
   thumbnail gambar.

   Digunakan untuk judul dan tanggal berita pada widget
   "Berita Populer".
    */

.cm-sidebar-news-info {
    display: flex;              /* Menyusun elemen secara vertikal */
    flex-direction: column;     /* Teks ditata dari atas ke bawah */
    justify-content: center;    /* Posisi konten di tengah secara vertikal */
    text-align: left !important; /* Memastikan teks rata kiri */
}

    /* 
   SIDEBAR NEWS TITLE (.cm-sidebar-news-title)
   Fungsi :
   Mengatur tampilan judul berita pada sidebar agar lebih
   rapi, mudah dibaca, dan tidak merusak layout meskipun
   teks terlalu panjang.

   Judul akan dibatasi maksimal 2 baris dengan efek ellipsis.
   */

.cm-sidebar-news-title {
    font-size: 13px !important;              /* Ukuran teks judul */
    font-weight: 700 !important;             /* Ketebalan teks */
    line-height: 1.35 !important;            /* Jarak antar baris */
    color: #222222 !important;               /* Warna teks */
    margin: 0 0 4px 0 !important;            /* Jarak bawah kecil */
    
    display: -webkit-box;                   /* Aktifkan flex box khusus webkit */
    -webkit-line-clamp: 2;                  /* Batasi maksimal 2 baris */
    -webkit-box-orient: vertical;           /* Orientasi vertikal */
    overflow: hidden;                       /* Sembunyikan teks berlebih */
    text-overflow: ellipsis;               /* Tambahkan titik tiga (...) */

    transition: color 0.2s ease;           /* Animasi halus saat hover */
}

    /* 
   SIDEBAR NEWS TITLE HOVER EFFECT
   (.cm-sidebar-news-item:hover .cm-sidebar-news-title)
   Fungsi :
   Memberikan efek perubahan warna pada judul berita
   ketika pengguna melakukan hover pada item berita sidebar.

   Efek ini meningkatkan interaksi dan UX agar lebih responsif.
   */

.cm-sidebar-news-item:hover .cm-sidebar-news-title {
    color: var(--primary-color) !important;  /* Mengubah warna judul saat hover */
}

   /* ================================
   SIDEBAR NEWS DATE (.cm-sidebar-news-date)
   Fungsi :
   Mengatur tampilan tanggal publikasi berita pada sidebar
   agar terlihat lebih kecil, halus, dan tidak mendominasi
   dibandingkan judul berita.

   Komponen ini digunakan pada widget "Berita Populer".
   ================================ */

.cm-sidebar-news-date {
    font-size: 10.5px;              /* Ukuran teks lebih kecil */
    color: var(--text-muted);       /* Warna abu-abu halus (secondary text) */
}

    /* ================================
   SIDEBAR CATEGORY LIST (.cm-sidebar-cat-list)
   Fungsi :
   Mengatur tampilan daftar kategori pada sidebar agar
   tersusun secara vertikal, rapi, dan memiliki jarak
   antar item yang konsisten.

   Digunakan pada widget "Kategori Lain".
   ================================ */

.cm-sidebar-cat-list {
    display: flex;              /* Mengaktifkan flexbox */
    flex-direction: column;     /* Menyusun item secara vertikal */
    gap: 8px;                   /* Jarak antar kategori */
    padding: 0;                 /* Menghapus padding default */
    margin: 0;                  /* Menghapus margin default */
    list-style: none;          /* Menghilangkan bullet list */
}

    /* ================================
   SIDEBAR CATEGORY ITEM (.cm-sidebar-cat-item)
   Fungsi :
   Mengatur tampilan setiap item kategori pada sidebar
   agar terlihat seperti card kecil yang rapi, modern,
   dan mudah diklik oleh pengguna.

   Digunakan pada widget "Kategori Lain".
   ================================ */

.cm-sidebar-cat-item {
    display: flex;                  /* Menyusun teks dan icon dalam satu baris */
    justify-content: space-between; /* Memisahkan teks kiri dan icon kanan */
    align-items: center;           /* Menyelaraskan item secara vertikal */
    padding: 8px 12px;             /* Jarak dalam item */
    background: #fdfdfd;           /* Warna background putih keabu-abuan */
    border: 1px solid #f0f0f0;     /* Border tipis */
    border-radius: 6px;            /* Sudut membulat */
    text-decoration: none !important; /* Menghapus underline pada link */
    font-size: 13px;               /* Ukuran teks */
    font-weight: 600;              /* Ketebalan teks */
    color: #444;                   /* Warna teks */
    transition: all 0.2s ease;    /* Animasi halus saat hover */
}

   /* ================================
   SIDEBAR CATEGORY ITEM HOVER EFFECT
   (.cm-sidebar-cat-item:hover)
   Fungsi :
   Memberikan efek interaktif saat pengguna mengarahkan
   kursor ke item kategori pada sidebar.

   Efek ini membuat UI lebih hidup dengan perubahan warna,
   border, dan pergeseran kecil ke kanan.
   ================================ */

.cm-sidebar-cat-item:hover {
    border-color: var(--primary-color); /* Mengubah warna border */
    color: var(--primary-color);        /* Mengubah warna teks */
    background: #fff;                  /* Menjaga background tetap putih */
    transform: translateX(3px);        /* Efek geser ke kanan */
}

    /* ================================
   NEWS CARD (.colormag-news-card)
   Fungsi :
   Mengatur tampilan kartu berita utama pada halaman grid
   agar terlihat modern, rapi, dan memiliki efek visual
   yang konsisten seperti card UI pada portal berita.

   Card ini berisi gambar, judul, deskripsi, dan metadata berita.
   ================================ */

.colormag-news-card {
    background-color: #ffffff; /* Background putih bersih */
    border-radius: 8px; /* Sudut membulat untuk tampilan modern */
    overflow: hidden; /* Memotong elemen agar tidak keluar dari card */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02); /* Bayangan halus */
    border: 1px solid #eaeaea; /* Border tipis abu-abu */
    
    transition: transform 0.3s cubic-bezier(0.25, 0.8, 0.25, 1),
                box-shadow 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);

    height: 100%; /* Card mengikuti tinggi container */
    display: flex; /* Mengaktifkan flexbox */
    flex-direction: column; /* Susunan elemen vertikal */
    width: 100%; /* Lebar penuh container */
}

    /* ================================
   NEWS CARD HOVER EFFECT (.colormag-news-card:hover)
   Fungsi :
   Memberikan efek interaktif pada kartu berita saat user
   mengarahkan kursor (hover), sehingga UI terasa lebih hidup
   dan modern seperti portal berita profesional.

   Efek meliputi pergeseran posisi, bayangan, dan perubahan border.
   ================================ */

.colormag-news-card:hover {
    transform: translateY(-5px); /* Mengangkat card ke atas */
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08); /* Bayangan lebih kuat */
    border-color: var(--primary-color); /* Warna border mengikuti tema utama */
}
    /* ================================
   NEWS CARD THUMB (.card-thumb)
   Fungsi :
   Mengatur area gambar pada card berita agar memiliki
   ukuran tetap, rapi, dan tidak merusak layout card.

   Bagian ini berfungsi sebagai container utama gambar berita.
   ================================ */

.colormag-news-card .card-thumb {
    height: 200px;              /* Tinggi tetap untuk gambar */
    overflow: hidden;           /* Memotong gambar agar tidak keluar area */
    position: relative;         /* Untuk kebutuhan positioning overlay jika ada */
    background-color: #f0f0f0;  /* Background saat gambar belum load */
}

    /* ================================
   NEWS CARD IMAGE (.card-thumb img)
   Fungsi :
   Mengatur tampilan gambar pada card berita agar memenuhi
   area container secara proporsional tanpa merusak rasio,
   serta memberikan efek transisi halus.

   Gambar ini akan terlihat lebih rapi dan modern saat hover.
   ================================ */

.colormag-news-card .card-thumb img {
    width: 100%;               /* Gambar memenuhi lebar container */
    height: 100%;              /* Gambar memenuhi tinggi container */
    object-fit: cover;         /* Menjaga proporsi gambar agar tetap rapi */
    transition: transform 0.5s ease; /* Animasi halus untuk efek zoom */
}

   /* ================================
   NEWS CARD IMAGE HOVER EFFECT
   (.colormag-news-card:hover .card-thumb img)
   Fungsi :
   Memberikan efek zoom pada gambar berita saat user
   melakukan hover pada card berita.

   Efek ini membuat tampilan lebih interaktif dan modern
   seperti portal berita profesional.
   ================================ */

.colormag-news-card:hover .card-thumb img {
    transform: scale(1.05); /* Zoom in sedikit pada gambar */
}

    /* ================================
   NEWS CARD CONTENT (.card-content)
   Fungsi :
   Mengatur area konten pada card berita yang berisi
   judul, deskripsi, metadata, dan tombol baca selengkapnya.

   Layout dibuat vertikal agar konten tersusun rapi
   dan fleksibel mengikuti tinggi card.
   ================================ */

.colormag-news-card .card-content {
    padding: 20px;              /* Jarak isi dari tepi card */
    display: flex;              /* Mengaktifkan flexbox */
    flex-direction: column;     /* Menyusun konten secara vertikal */
    flex-grow: 1;               /* Membuat konten mengisi sisa ruang card */
    text-align: left !important; /* Memastikan teks rata kiri */
}

    /* ================================
   NEWS CARD META (.card-meta)
   Fungsi :
   Mengatur tampilan informasi tambahan pada card berita
   seperti tanggal publikasi dan nama penulis agar terlihat
   kecil, rapi, dan tidak mengganggu fokus utama konten.

   Bagian ini biasanya berada di atas judul berita.
   ================================ */

.colormag-news-card .card-meta {
    font-size: 11px;               /* Ukuran teks kecil untuk info tambahan */
    color: var(--text-muted);      /* Warna abu-abu halus */
    margin-bottom: 8px;            /* Jarak bawah ke judul */
    display: flex;                 /* Menyusun item secara horizontal */
    align-items: center;          /* Menyelaraskan item di tengah secara vertikal */
    gap: 10px;                    /* Jarak antar elemen (tanggal & author) */
}

   /* ================================
   NEWS CARD META ICON (.card-meta span i)
   Fungsi :
   Mengatur tampilan icon pada bagian metadata berita
   (seperti icon kalender dan user) agar lebih menonjol
   dan sesuai dengan warna tema utama website.

   Digunakan di dalam card berita utama.
   ================================ */

.colormag-news-card .card-meta span i {
    color: var(--primary-color); /* Warna icon mengikuti tema utama */
    margin-right: 4px;          /* Jarak antara icon dan teks */
}

    /* ================================
   TEXT CLAMP (2 LINES) (.cm-clamp-2)
   Fungsi :
   Membatasi tampilan teks maksimal 2 baris saja agar
   tidak merusak layout card berita, terutama untuk judul
   atau deskripsi yang terlalu panjang.

   Setelah 2 baris, teks akan dipotong dengan efek ellipsis.
   ================================ */

.cm-clamp-2 {
    display: -webkit-box;           /* Mode flex khusus webkit */
    -webkit-line-clamp: 2;          /* Batasi hanya 2 baris */
    -webkit-box-orient: vertical;   /* Susunan vertikal */
    overflow: hidden;               /* Sembunyikan teks berlebih */
    text-overflow: ellipsis;        /* Tambahkan titik tiga (...) */
    height: 40px;                   /* Tinggi tetap agar konsisten */
}
   /* ================================
   CARD TITLE CLAMP (h3.cm-clamp-2)
   Fungsi :
   Mengatur tampilan judul berita pada card agar tetap
   rapi dengan batas maksimal 2 baris dan tinggi tetap.

   Ini mencegah layout card berubah saat judul terlalu panjang.
   ================================ */

h3.cm-clamp-2 {
    font-size: 16px;        /* Ukuran judul utama */
    font-weight: 700;       /* Ketebalan font */
    margin: 0 0 10px 0;     /* Jarak bawah ke elemen lain */
    line-height: 1.4;       /* Jarak antar baris agar nyaman dibaca */
    height: 44px;           /* Tinggi tetap untuk konsistensi layout */
}

    /* ================================
   CARD TITLE LINK (.cm-clamp-2 a)
   Fungsi :
   Mengatur tampilan link pada judul berita di card
   agar terlihat bersih, tanpa underline, dan memiliki
   transisi warna yang halus saat interaksi.

   Digunakan pada judul berita di grid card utama.
   ================================ */

h3.cm-clamp-2 a {
    color: var(--text-dark);       /* Warna teks judul */
    text-decoration: none;         /* Menghapus garis bawah link */
    transition: color 0.2s ease;    /* Efek transisi halus saat hover */
}
   /* ================================
   CARD TITLE LINK HOVER (.cm-clamp-2 a:hover)
   Fungsi :
   Memberikan efek perubahan warna pada judul berita
   ketika user melakukan hover pada link judul.

   Efek ini meningkatkan interaksi dan menegaskan bahwa
   judul adalah elemen yang dapat diklik.
   ================================ */

h3.cm-clamp-2 a:hover {
    color: var(--primary-color); /* Mengubah warna judul saat hover */
}

    /* ================================
   NEWS CARD BUTTON (.news-card-btn)
   Fungsi :
   Mengatur tampilan tombol "Baca Selengkapnya" pada card berita
   agar terlihat seperti link tombol modern yang kecil,
   rapi, dan konsisten dengan tema utama website.

   Tombol ini berada di bagian bawah card berita.
   ================================ */

.news-card-btn {
    margin-top: auto;            /* Mendorong tombol ke bagian bawah card */
    font-size: 11px;             /* Ukuran teks kecil */
    font-weight: 700;            /* Teks tebal */
    text-transform: uppercase;   /* Huruf kapital semua */
    color: var(--primary-color); /* Warna sesuai tema utama */
    text-decoration: none;       /* Menghapus underline */
    display: inline-flex;       /* Flex untuk icon + teks */
    align-items: center;        /* Sejajar vertikal */
    gap: 6px;                   /* Jarak antara teks dan icon */
    transition: color 0.2s ease; /* Animasi halus saat hover */
}

    /* ================================
   NEWS CARD BUTTON HOVER (.news-card-btn:hover)
   Fungsi :
   Memberikan efek interaktif pada tombol "Baca Selengkapnya"
   saat user melakukan hover, sehingga terasa lebih responsif
   dan sesuai dengan gaya UI modern.

   ================================ */

.news-card-btn:hover {
    color: var(--primary-hover);  /* Mengubah warna saat hover */
    text-decoration: none;        /* Tetap tanpa underline */
}
</style>

<div class="hero">
    <h1 class="hero-caption"><?php echo $sport_type->name_type; ?></h1>
</div>

<section id="contant" class="contant" style="margin-top: 40px; margin-bottom: 40px;">
    <div class="container">
        <div class="row">
            <!--    NEWS GRID LIST (KIRI / MAIN CONTENT)
   Fungsi :
   Menampilkan daftar berita pada bagian utama halaman
   berdasarkan kategori olahraga yang dipilih. Setiap berita
   ditampilkan dalam bentuk card grid yang responsif.

   Jika tidak ada data berita, sistem akan menampilkan
   pesan informasi kepada pengguna.
 -->
            <div class="col-md-9 col-sm-8 col-xs-12">
                <?php if (empty($news_list)): ?>
                    <div class="alert alert-info cm-alert" style="padding: 18px 24px; border-radius: 8px; text-align: left; display: flex; align-items: center; gap: 12px; background: #ffffff; border-left: 4px solid var(--primary-color); box-shadow: 0 4px 15px rgba(0,0,0,0.03); margin: 10px 0;">
                        <i class="fa fa-info-circle" style="color: var(--primary-color); font-size: 20px;"></i>
                        <span style="font-size: 14.5px; font-weight: 600; color: #444; margin: 0;">Belum ada berita untuk kategori <?php echo $sport_type->name_type; ?>.</span>
                    </div>
                <?php else: ?>
                    <div class="row" style="display: flex; flex-wrap: wrap;">
                        <?php foreach($news_list as $news): 
                            $thumb = $news->thumbnail;
                            $img_src = (strpos($thumb, 'http') === 0) ? $thumb : base_url('uploads/' . $thumb);
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom: 30px; display: flex;">
                            <div class="colormag-news-card">
                                <div class="card-thumb">
                                    <a href="<?php echo site_url('news/'.$news->news_slug); ?>">
                                        <img src="<?php echo $img_src; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="<?php echo htmlspecialchars($news->title); ?>" />
                                    </a>
                                </div>
                                <div class="card-content">
                                    <div class="card-meta">
                                        <span><i class="fa fa-calendar"></i> <?php echo date('d M Y', strtotime($news->created_at)); ?></span>
                                        <span style="margin-left: 8px;"><i class="fa fa-user"></i> <?php echo $news->fullname; ?></span>
                                    </div>
                                    <h3 class="cm-clamp-2"><a href="<?php echo site_url('news/'.$news->news_slug); ?>"><?php echo $news->title; ?></a></h3>
                                    <p class="cm-clamp-2"><?php echo htmlspecialchars($news->description); ?></p>
                                    <a href="<?php echo site_url('news/'.$news->news_slug); ?>" class="news-card-btn">Baca Selengkapnya <i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!--  PAGINATION BERITA
   Fungsi :
   Menampilkan navigasi halaman (pagination)
   untuk memudahkan pengguna berpindah halaman
   ketika jumlah berita lebih dari batas tampilan.

   Pagination ini akan muncul di bagian bawah
   daftar berita (news grid). -->
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-12 text-center">
                            <?php echo $pagination; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            
            <!-- SIDEBAR WIDGET (KANAN)
   Fungsi :
   Menampilkan berbagai widget pada bagian sidebar
   seperti kategori, berita populer, atau informasi tambahan.
   Sidebar ini berada di sisi kanan halaman dan bersifat
   pendukung dari konten utama (news grid). -->
            <div class="col-md-3 col-sm-4 col-xs-12">
                <!-- WIDGET BERITA POPULER (SIDEBAR)
   Fungsi :
   Menampilkan daftar berita populer berdasarkan jumlah
   akses atau popularitas tertentu. Widget ini ditampilkan
   pada sidebar untuk membantu pengguna mengakses berita
   yang paling sering dibaca.

   Setiap item menampilkan gambar, judul, dan tanggal berita. -->
                <div class="cm-sidebar-widget">
                    <h3 class="cm-sidebar-title">Berita Populer</h3>
                    <ul class="cm-sidebar-news-list">
                        <?php foreach($popular_news as $pop): 
                            $pop_thumb = $pop->thumbnail;
                            $pop_img = (strpos($pop_thumb, 'http') === 0) ? $pop_thumb : base_url('uploads/' . $pop_thumb);
                        ?>
                        <li>
                            <a href="<?php echo site_url('news/'.$pop->news_slug); ?>" class="cm-sidebar-news-item">
                                <div class="cm-sidebar-news-thumb">
                                    <img src="<?php echo $pop_img; ?>" onerror="this.src='<?php echo base_url('assets/img/no-image.jpg'); ?>'" alt="" />
                                </div>
                                <div class="cm-sidebar-news-info">
                                    <h4 class="cm-sidebar-news-title"><?php echo $pop->title; ?></h4>
                                    <span class="cm-sidebar-news-date"><?php echo date('d M Y', strtotime($pop->created_at)); ?></span>
                                </div>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                
                <!-- WIDGET KATEGORI LAIN (SIDEBAR)
   Fungsi :
   Menampilkan daftar kategori olahraga lainnya selain
   kategori yang sedang dipilih oleh pengguna.

   Widget ini memudahkan pengguna untuk berpindah
   ke kategori berita olahraga yang berbeda dengan cepat. -->
                <div class="cm-sidebar-widget">
                    <h3 class="cm-sidebar-title">Kategori Lain</h3>
                    <ul class="cm-sidebar-cat-list">
                        <?php foreach($all_categories as $cat): ?>
                            <?php if ($cat->id != $sport_type->id): ?>
                            <li>
                                <a href="<?php echo site_url('sport/'.str_replace(' ', '-', strtolower($cat->name_type))); ?>" class="cm-sidebar-cat-item">
                                    <span><?php echo $cat->name_type; ?></span>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
