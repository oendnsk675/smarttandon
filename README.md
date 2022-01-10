# Web client untuk smarttandon

Berikut adalah source code web client dari projek iot smarttandon, projek ini dibuat dengan laravel 8 sebagai backendnya dan vue2 sebagai frontendnya, kemudian temen-temen bisa clone repositori untuk codingan microcontrollernya(esp8266) disini, dan untuk brokernya disini.

## Fitur Web

- Authentication menggunakan akun google 
- Authorization roles (admin, user)
- Mode automatis, digunakan ketika ingin automatis melakukan pengisian tandon ketika air mau habis, dan automati mati ketika tandon akan mati
- Mode manual, digunakan ketika ingin manual melakukan pengisian tandon maupun mematikan pengisian tandon.
- Hidup dan matikan tandon jarak jauh dengan suara.
- Pantau ketinggian air dengan chart
- Analisa penggunaan bulanan
- Pengingat jika penggunaan bulan sekarang lebih banyak dari bulan sebelumnya

## Cara install

1. buat database di phpmyadmin dengan nama smarttandon, atau sesuai nama database yang temen-temen buat di file .env

2. melakukan migrate ke database yang sudah kita buat sebelumnya, buka terminal, pastikan terminalnya berada di folder projek smarttandon, atau jika  menggunakan vscode untuk code editornya, klik kanan di salah satu file projek kemudian nanti ada pilihan open in integrated terminal, setelah terbuka terminal, ketik dibawah ini 
```sh
php artisan migrate
```

3. setting email admin di file .env, pastikan email yang digunakan adalah gmail, karna nantinya loginnya hanya tersedia menggunakan gmail saja, untuk setting email admin scroll ke paling bawah di file .env dan ganti isi ADMIN_EMAIL sesuai dengan email admin, untuk menambahkan admin lainnya bisa nanti di web ketika user tersebut sudah terdaftar dan tinggal diganti rolenya menjadi admin

4. install semua node module
```sh
npm install
```

5. setelah persiapan selesai , kemudian jalankan server

```sh
php artisan serve
```

6. jika ingin development tampilan, bisa jalankan mix watch nya supaya ketika ada perubahan pada file vue bisa automatis di mix kan, dengan menjalankan

```sh
npm run watch
```

## Kontribusi
jika temen-temen ingin berkontribusi dengan projek ini, temen bisa fork repositori ini dan tinggal pull jika temen-temen ingin berkontribus, terimakasih.

## License

MIT
