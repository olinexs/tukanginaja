# TUKANGIN

[![GitHub stars](https://img.shields.io/github/stars/username/project-platform?style=social)](https://github.com/username/project-platform/stargazers)
[![GitHub issues](https://img.shields.io/github/issues/username/project-platform)](https://github.com/username/project-platform/issues)
[![GitHub forks](https://img.shields.io/github/forks/username/project-platform?style=social)](https://github.com/username/project-platform/network/members)
[![GitHub pull requests](https://img.shields.io/github/issues-pr/username/project-platform)](https://github.com/username/project-platform/pulls)
[![License](https://img.shields.io/github/license/username/project-platform)](LICENSE)

Platform marketplace untuk menghubungkan **freelancer** dan **client** dengan fitur manajemen proyek, upload dokumen, profil, serta dashboard interaktif.  
Dibangun menggunakan **PHP (Laravel/CI)** untuk backend dan **HTML/CSS/JS** untuk frontend, dengan deployment pada **Shared hosting**.

---

## Fitur Utama
- **Autentikasi & Profil**  
  Registrasi, login, dan manajemen profil freelancer/client.
- **Manajemen Proyek**  
  Client dapat membuat proyek, freelancer dapat mengajukan penawaran.
- **Upload Dokumen & Portofolio**  
  Mendukung file proyek, dokumen pendukung, serta foto profil.
- **Dashboard Interaktif**  
  Monitoring status proyek dan aktivitas pengguna.
- **Backup & Log**  
  Tersedia folder khusus untuk backup database/file dan pencatatan log.

---

## Struktur Folder
```bash
tukang/
│
├── public_html/                 # Root folder Hosting (akses domain langsung ke sini)
│   ├── index.php                 # Entry point backend (Laravel/CI)
│   ├── assets/                   # Static assets (CSS, JS, images)
│   ├── uploads/                  # File upload (dokumen project, profil)
│   │   ├── projects/             # Dokumen project
│   │   ├── profile/              # Foto/portofolio freelancer
│   │   └── temp/                 # Temporary files
│   ├── api/                      # Backend API (Laravel/CI)
│   │   ├── app/                  # Core app (MVC: model, controller, views)
│   │   ├── config/               # Database, email, app config
│   │   ├── routes/               # Routing API/web
│   │   ├── storage/              # Cache, logs, session
│   │   ├── vendor/               # Composer dependencies
│   │   └── .env                  # Environment variables
│   └── frontend/                 # Frontend app
│       ├── index.html            # Landing page
│       ├── js/                   # Custom scripts
│       ├── css/                  # Stylesheets
│       └── components/           # UI partial (header, footer, dashboard)
│
├── logs/                         # Log file custom
├── backups/                      # DB & file backup (manual/cron)
├── docs/                         # Dokumentasi (PRD, ERD, workflow)
└── README.md

```

## ⚙Instalasi & Konfigurasi

### 1. Clone Repository
```bash
git clone https://github.com/username/tukanginaja.git
cd tukang
```


## Setup Backend
- Masuk ke folder public_html/api/
- Copy .env.example → .env
- Atur database, mail, dan konfigurasi lain
- Install dependencies:
```bash
composer install
php artisan key:generate
php artisan migrate

```

## Setup Frontend
- Masuk ke folder public_html/frontend/
- Sesuaikan index.html, css/, dan js/ jika perlu
- Deploy langsung di Hostinger (shared hosting)

## Deployment
- Upload seluruh isi folder public_html/ ke root Hosting
- Pastikan permission uploads/, logs/, dan backups/ bisa ditulis server

# Kontributor
Owner: **Caroline Panggabean**
