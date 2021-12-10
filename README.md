## TUGAS 5 BASIS DATA ORACLE

   Pada kesempatan kali ini saya akan menjawab beberapa poin atau soal berikut ini :
   1.	Buat koneksi dari oracle le Bahasa pemrograman contoh:php
   2.	Buat view dalam database masing2
   3.	Buat halaman home/ bernda
   4.	Gunakan query count unutuk menampilkan jumlah data dari view. 
   5.	Buat menu tampil data untuk master data
   6.	Buat repository di github dengan nama tugas 5_bd oracle
   7.	Upload semua code
   8.	Lampirkan screenshoot dan penjelasan di Readme.
   
   **Untuk poin 6, 7, dan 8 sudah langsung terjawab dengan adanya github penjelasan ini.**
   
   **Oke , langsung saja berikut adalah penjelasan dari beberapa pertanyaan atau poin di atas :**

-------------------------------------------------------------------------------------------
##  1. Pembuatan Koneksi Dari Oracle Ke Bahasa Pemrograman PHP

    Disini saya menggunakan Oracle Database 11G Express. Langkah-langkah membuat koneksi Oracle dengan PHP adalah sebagai berikut :
    1. Pastikan kalian sudah menginstal Basis Data Oracle 11G Express dan aplikasi XAMPP
    2. Buka XAMPP, kemudian start bagian apache dan klik bagian config, Pilih dan klik php.ini  di apache seperti gambar berikut :
   <img src= "https://user-images.githubusercontent.com/45529723/145405747-4adecf31-848f-4c7b-88f4-6e1f1f657eef.png" />
   
-------------------------------------------------------------------------------------------
    3. Setelah masuk ke php.ini , cari dan setting seperti berikut :
   <img src= "https://user-images.githubusercontent.com/45529723/145405752-2cec7be4-02a0-498e-b70d-430d302d1f22.PNG" />

-------------------------------------------------------------------------------------------
    4. Cek di bagian php.info melalui browser kalian. Pastikan sudah tampil seperti berikut ini :
   <img src="https://user-images.githubusercontent.com/45529723/145405759-d01d2749-78c8-48ec-9a22-53f4ff000c71.PNG" />

-------------------------------------------------------------------------------------------
    5. Setelah tampil, langkah selanjutnya adalah masuk ke folder htdocs
    6. Cari folder htdocs. Untuk dikomputer saya berada di C:\xampp\htdocs
    7. Buat folder baru di dalam htdocs. Disini saya membuat folder LatihanOracle
    8. Di dalam folder LatihanOracle, buat file koneksi.php 
   <img src="https://user-images.githubusercontent.com/45529723/145405765-4e2a627c-0511-4aac-8b59-c3ffa9f32e67.PNG" />

-------------------------------------------------------------------------------------------
    9. Tuliskan query seperti gambar berikut :
   <img src="https://user-images.githubusercontent.com/45529723/145405771-3a9d9796-4b25-4089-80e4-64b42920210d.PNG" />

-------------------------------------------------------------------------------------------
    10. Jalankan XAMPP dan klik start pada apache
    11. Testing di browser apakah sudah connect atau belum, jika sudah tampil seperti berikut ini artinya sudah connect.
   <img src="https://user-images.githubusercontent.com/45529723/145405774-a212f0ca-183c-452e-b4fe-6416c1d7311f.PNG" />



-------------------------------------------------------------------------------------------
##  2. Membuat View Dalam Database
 
     Disini akan saya tampilkan hasil dari view yang telah saya buat :
     1. Untuk membuat view, kita bisa menggunakan perintah CREATE VIEW
     2. Disini saya membuat View untuk menampilkan jumlah barang dengan kriteria >= 50.
     3. Query nya adalah sebagai berikut :
 <img src= "https://user-images.githubusercontent.com/45529723/145412363-eacaafb5-f364-48c3-a4c5-65cc3290a2d6.PNG" />

------------------------------------------------------------------------------------------- 
     4. Untuk menampilkan atau menjalankan View seperti berikut :
 <img src= "https://user-images.githubusercontent.com/45529723/145412376-27145f30-20ed-4272-81fd-c7cef9f4b9c7.PNG" />

-------------------------------------------------------------------------------------------



##  3. Halaman Home / Beranda
     
    Halaman Home/Beranda yang saya buat menggunakan template Admin LTE. Untuk hasilnya adalah sebagai berikut :
    Berikut adalah tampilan Home Sistem Informasi Penjualan Toko Laris.
 <img src= "https://user-images.githubusercontent.com/45529723/145414049-9e467445-b999-4463-86cf-01052cb596b7.PNG" />
   


-------------------------------------------------------------------------------------------
##  4. Menggunakan Query Count Untuk Menampilkan Jumlah Data Di Dashboard

    1. Disini yang saya tampilkan di dashboard adalah Data Barang, Jenis Barang, Data Pelanggan, dan Data Transaksi.
    2. Berikut adalah querynya yang saya buat :
 <img src= "https://user-images.githubusercontent.com/45529723/145415674-b1b0b88c-ed08-416e-b730-6385587ec1b0.PNG" />
 
 -------------------------------------------------------------------------------------------
    3. Berikut adalah hasilnya dimana jumlah data barang dan lainnya akan tampil di dashboard/home :
 <img src= "https://user-images.githubusercontent.com/45529723/145416552-69e69277-cb0c-4c81-8581-6fad09634129.png" />



-------------------------------------------------------------------------------------------
##  5. Membuat Menu Tampil Data Untuk Menampilkan Master Data
     
       Di sistem informasi yang telah saya buat, saya menggunakan 4 Master Data dan 1 Transaksi.
       Untuk detailnya yaitu :
       1. Master Data Barang
       2. Master Data Jenis_Barang
       3. Master Data Petugas
       4. Master Data Pelanggan
       5. Transaksi Penjualan
 -------------------------------------------------------------------------------------------      
       Tampilannya yaitu :
  <img src= "https://user-images.githubusercontent.com/45529723/145418190-0776dee6-6601-46d7-8bff-d8f977252409.png" />
 
-------------------------------------------------------------------------------------------
       Berikut saya tampilkan contoh jika menunya di klik akan muncul seperti berikut ini :
       
-------------------------------------------------------------------------------------------      
       1. Data Barang
  <img src= "https://user-images.githubusercontent.com/45529723/145419031-f3e0211f-900f-438c-8c7c-217c5612e3d0.PNG" />
  
-------------------------------------------------------------------------------------------
       2. Jenis Barang
   <img src= "https://user-images.githubusercontent.com/45529723/145419052-b70e747d-dc2c-4340-ba06-de1c51a29f05.PNG" />
      
-------------------------------------------------------------------------------------------
       3. Petugas
   <img src= "https://user-images.githubusercontent.com/45529723/145602785-c32297bb-e1cc-4f6a-b36d-139650cc874e.PNG" />
      
-------------------------------------------------------------------------------------------
       4. Pelanggan
   <img src= "https://user-images.githubusercontent.com/45529723/145602016-d813b6bf-f0fa-4e94-aa10-7874318946e9.PNG" />
      
-------------------------------------------------------------------------------------------
       5. Transaksi
          Untuk transaksi bukan merupakan data master, jadi belum ditampilkan. 

##  6. Membuat Repository Github
       
       Repository github sudah saya buat :
       
Klik https://github.com/ikhsanmaulana15/Tugas5_BasisDataOracle/
       
       
       
-------------------------------------------------------------------------------------------      
##  7. Membuat Repository Github
       
       Untuk semua code sudah saya lampirkan disini (Code akan selalu saya update sampai projek ini jadi sebuah sistem yang utuh) :
       
Klik https://github.com/ikhsanmaulana15/Tugas5_BasisDataOracle/
       
       
       
-------------------------------------------------------------------------------------------            
##  7. Screenshoot dan Penjelasan Tugas ke 5 
       
       Untuk screenshoot dan penjelasan sudah saya buat di README pada github. Terima Kasih
       
 -------------------------------------------------------------------------------------------         
Jika kalian memerlukan tutorial mengenai DATABASE ORACLE, silahkan dapat mengunjungi Youtube saya :
 https://www.youtube.com/c/DuaMasaChannel


