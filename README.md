# Layanan Pengaduan Rakyat
> Platform pengaduan masyarakat berbasis web yang memungkinkan warga melaporkan masalah infrastruktur publik secara mudah, anonim, dan terverifikasi.

---

## Tentang Proyek

Melaporkan masalah publik seperti jalan berlubang atau lampu PJU mati seringkali terhambat karena warga tidak tahu harus melapor ke mana. Sistem ini menyederhanakan proses tersebut — cukup dengan NIK dan foto, laporan langsung masuk ke sistem dan bisa dipantau statusnya oleh semua orang tanpa mengekspos identitas pelapor.

Proyek ini dibuat sebagai tugas akhir (Ujikom) SMK jurusan Rekayasa Perangkat Lunak (RPL), 2023.

---

## Fitur Utama

- **Submit Pengaduan** — Warga melapor menggunakan NIK dan foto bukti
- **Feed Publik** — Semua pengaduan bisa dilihat masyarakat tanpa menampilkan identitas pelapor
- **Tracking Status** — Status pengaduan diperbarui secara real-time oleh admin
- **Admin Dashboard** — Admin dapat memverifikasi, memproses, dan menutup laporan
- **Role-based Access** — Tampilan dan akses berbeda antara warga dan admin

---

## Alur Status Pengaduan

```
Submit → Menunggu Verifikasi → Sedang Diproses → Selesai Ditindak
```

---

## Tech Stack

| Layer | Teknologi |
|---|---|
| Backend | PHP — Laravel |
| Frontend | Blade Template, Bootstrap |
| Database | MySQL |
| Auth | Laravel Auth |

---

## Struktur Database

**Tabel `pengaduan`**
- `id_pengaduan` — Primary key
- `nik` — NIK pelapor (identifier, tidak ditampilkan publik)
- `isi_laporan` — Isi laporan pengaduan
- `foto` — Path foto bukti (storage)
- `status` — Status laporan (Menunggu Verifikasi / Sedang Diproses / Selesai Ditindak)
- `created_at`, `updated_at`

---

## Instalasi & Setup

### Requirements
- PHP >= 8.0
- Composer
- MySQL
- Node.js & NPM

### Langkah Instalasi

```bash
# 1. Clone repo
git clone https://github.com/[username]/[repo-name].git
cd [repo-name]

# 2. Install dependencies
composer install
npm install && npm run dev

# 3. Setup environment
cp .env.example .env
php artisan key:generate

# 4. Konfigurasi database di .env
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=

# 5. Migrate database
php artisan migrate

# 6. Setup storage
php artisan storage:link

# 7. Jalankan server
php artisan serve
```

Akses aplikasi di `http://localhost:8000`

---

## Developer

**Hanez Rafael Hezekia**
Universitas Kristen Satya Wacana
[hanez.rafa@gmail.com](mailto:hanez.rafa@gmail.com)
