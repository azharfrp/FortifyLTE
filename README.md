# Laravel + Fortify + AdminLTE 3

Repository ini merupakan sebuah repository sederhana dari Framework Laravel 8 yang bagian autentikasinya sedikit di kustomasi menggunakan Laravel Fortify, sehingga bisa di integrasikan tampilannya menggunakan AdminLTE 3. Didalam repository ini sudah tersedia contoh CRUD sederhana menggunakan Livewire yang bisa kamu kembangkan sendiri sesuai dengan kebutuhan yang kamu miliki. Selain itu, repository ini juga menggunakan Turbolink pada bagian panel-nya, sehingga bisa sedikit 'terasa' seperti aplikasi SPA.

## Cara menggunakan

Pertama-tama, silahkan download atau clone repo ini.

```bash
$ git clone https://github.com/azharfrp/FortifyLTE.git
```

Kemudian install dependency yang dibutuhkan.

```bash
# membuat file .env baru dari file .env.example - Untuk Linux
$ cp .env.example .env

# membuat file .env baru dari file .env.example - Untuk Windows
$ copy .env.example .env

# membuat app key
$ php artisan key:generate

# lakukan migrasi
$ php artisan migrate

# lakukan link storage
$ php artisan storage:link
```

Setelah semuanya selesai, silahkan coba akses repo ini via server development Laravel.

```bash
php artisan serve
```

Selain itu kamu juga bisa mengakses repo ini menggunakan alat bantu lainnya.

## Screen Shoot

<p align="center">
    <img src="https://telegra.ph/file/f2f7018164354ec4a9d4f.png" width="80%" height="auto">
    <img src="https://telegra.ph/file/b674fe27699b0b1886a8a.png" width="80%" height="auto">
    <img src="https://telegra.ph/file/ab674fa4bc6ee83fcbb96.png" width="80%" height="auto">
    <img src="https://telegra.ph/file/a0b7b777d9b01bdb8e3e3.png" width="80%" height="auto">
    <img src="https://telegra.ph/file/41550dc3b3b69209137cf.png" width="80%" height="auto">
    <img src="https://telegra.ph/file/b95bd4bde4962357c3e6d.png" width="80%" height="auto">
    <img src="https://telegra.ph/file/b8f1345b69014c25220b4.png" width="80%" height="auto">
    <img src="https://telegra.ph/file/c09be9aae5a1a86656f7f.png" width="80%" height="auto">
    <img src="https://telegra.ph/file/9c3e697234a7a5860eee8.png" width="80%" height="auto">
    <img src="https://telegra.ph/file/e2c2bcddc639597d922db.png" width="80%" height="auto">
    <img src="https://telegra.ph/file/0c49323475b8569765da6.png" width="80%" height="auto">
</p>

## Fitur

Secara garis besar, repo ini menyediakan beberapa fitur dasar, yaitu:

- Tampilan panel AdminLTE v3.
- Aksi CRUD menggunakan Livewire.
- Alert setelah melakukan aksi CRUD.
- List dan pencarian data dengan bantuan Eloquent ORM.
- Aplikasi 'SPA' menggunakan bantuan Turbolink.

Repo ini cocok untuk digunakan sebagai bahan pembelajaran bagi pengguna Laravel yang ingin mendapatkan fitur-fitur diatas, namun merasa kesulitan untuk mendapatkan hasil sederhana seperti yang ditawarkan oleh repo ini.

## Dokumentasi

Repository ini hanyalah sedikit pengembangan sederhana dari:

- [AdminLTE](https://github.com/ColorlibHQ/AdminLTE)
- [Laravel 8](https://laravel.com/docs/8.x)
- [Laravel Fortify](https://github.com/laravel/fortify)
- [Laravel Livewire](https://laravel-livewire.com/docs)
- [Livewire Alert](https://github.com/jantinnerezo/livewire-alert)
- [Turbolinks](https://github.com/turbolinks/turbolinks)
- [Laravel Permission](https://github.com/spatie/laravel-permission)

Dan lain-lain. Untuk dokumentasi lebih lanjut, silahkan mengacu pada dokumentasi dari masing-masing framework/package tersebut. Terimakasih.

## Siapa Saya

Nama saya Azhar Fahrurazi, seorang penulis dan juga programmer amatiran dari [Blog Gampangan](http://www.gampangan.com). Mohon maaf jika repository ini tidak/belum sesuai dengan kebutuhan yang kamu miliki.

## Apa yang Baru?

v0.2

- Support Role
- Proses manajemen berkas ditangani oleh File Storage

Beberapa perubahan mungkin tidak dicantumkan disini.

## Support

Kontribusi apa pun yang kamu bisa lakukan sangatlah diharapkan dan juga sangatlah dihargai untuk mengembangkan repo sederhana ini, agar kedepannya semakin banyak orang yang bisa memulai pembelajarannya dari tingkat yang lebih tinggi.

Terimakasih.