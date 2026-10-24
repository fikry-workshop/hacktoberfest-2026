# Hacktoberfest 2026: From Localhost To Open Web

Template workshop deploy PHP native. Tidak perlu Composer atau build.

## Coba di laptop

    php -S localhost:8000 -t public

Buka http://localhost:8000. Halaman akan bilang situsmu baru terlihat di laptopmu.

## Alur workshop

1. **Fork** repo ini dari satu akun perwakilan tim, lalu buat branch.
2. **cPanel, Git Version Control**: clone URL fork-mu. Lihat path repository yang tampil.
3. **Buat subdomain** dengan document root `repositories/NAMA-REPO/public` (sesuaikan dengan path tadi). Document root harus folder `public`, jangan folder induknya.
4. **Buat file `.env`** di folder repo, sejajar dengan `public`. Salin dari `.env.example` dan isi nama timmu.
5. Aktifkan SSL di cPanel, lalu buka subdomain lewat `https://`. Semua baris "Cek deploy" harus berstatus Sudah.
6. **Pull request terakhir**: tambahkan `tim/nama-tim.md` (lihat `tim/README.md`) ke repo utama.

Memperbarui situs: push perubahan ke GitHub, lalu di cPanel klik **Update from Remote**.
