## TUGAS 6 BASIS DATA ORACLE

   Pada kesempatan kali ini saya akan menjawab beberapa poin atau soal berikut ini :
   1.	Buat trigger
   2.	Buat insert data sama delete di masing2 table master
   3.	Buat Githhub projek baru tugas 6 dan upload
   4. Kumpulkan di form
 
   **Untuk poin 3 & 4 sudah langsung terjawab dengan adanya github penjelasan ini.**
   
   **Oke , langsung saja berikut adalah penjelasan dari beberapa pertanyaan atau poin di atas :**

-------------------------------------------------------------------------------------------
##  1. Pembuatan Trigger

    Disini saya membuat suatu trigger MASUK. Trigger ini kita gunakan untuk mencatat siapa saja user yang 
    login ke system dan hasilnya akan dicatat didalam tabel riwayatlogin.
    
    1. Kita buat terlebih dahulu untuk tabel riwayat login seperti berikut ini :
    2. Setelah itu, kita tuliskan query triggernya sebagai berikut :
    
-------------------------------------------------------------------------------------------
    3. Kemudian, kita coba untuk testing masuk dengan user kalian sendiri
   

-------------------------------------------------------------------------------------------
    4. Cek di bagian tabel riwayatlogin apakah data user yang masuk tadi terecord atau tidak.
  

-------------------------------------------------------------------------------------------
    5. Catatan.
       Sebelum kita membuat trigger ini, jangan lupa kita untuk membuat tabel login nya dahulu ya.


-------------------------------------------------------------------------------------------
##  2. Membuat Insert dan Delete Data Di Masing-Masing Data Master

     Oke, disini kita akan melakukan proses insert dan delete data pada tabel yang telah saya buat sebelumnya yaitu :
     1. Data Master Petugas
        A. Delete Data Petugas
           Pertama-tama kalian buat file hapus_petugas.php di folder petugas seperti berikut ini :         
   <img src= "https://user-images.githubusercontent.com/45529723/146665480-b80904d3-114a-40c2-8259-e81a4f1b66f9.PNG" />
   
-------------------------------------------------------------------------------------------           
           Setelah itu, kita tinggal testing sebagai berikut :
           Data sebelum dihapus : 
           Untuk di tampilan dan di database ada 10 data petugas seperti gambar berikut ini
   <img src= "https://user-images.githubusercontent.com/45529723/146676754-e18b9517-ab82-412a-a4c4-d34530cd4c65.PNG" />
   <img src= "https://user-images.githubusercontent.com/45529723/146676711-54ef2376-dedf-47b9-8375-83877aa0da28.PNG" />

-------------------------------------------------------------------------------------------
           Data Setelah dihapus :
           Disini saya hapus untuk data dengan kode petugas P010, caranya kita tinggal klik tanda hapus yang ada di halaman 
           data Petugas, hasilnya adalah sebagai berikut :
   <img src= "https://user-images.githubusercontent.com/45529723/146677002-4f84369b-8af8-43ab-9481-3e3d0ce52dad.PNG" />
   <img src= "https://user-images.githubusercontent.com/45529723/146677005-f56e378b-a205-4978-b908-c5829f9a64ff.PNG" />
   <img src= "https://user-images.githubusercontent.com/45529723/146677006-482088a5-9b8e-41a1-9722-b4008ae8ba61.PNG" />

-------------------------------------------------------------------------------------------
        B. Insert Data Petugas
        Pertama-tama kalian buat file tambah_petugas.php di folder petugas (untuk source code bisa cek difolder petugas)
        , file ini digunakan untuk membuat form/ halaman baru seperti berikut ini :         
   <img src= "https://user-images.githubusercontent.com/45529723/146679562-444bdbe7-aabd-42a7-8497-72357207fc8e.PNG" />
   
-------------------------------------------------------------------------------------------           
           Setelah itu, kita buat file aksi_tambah_petugas di folder petugas supaya data yang di input masuk ke database.
   <img src= "https://user-images.githubusercontent.com/45529723/146784604-c189f578-3603-497a-a520-1e1f36125252.PNG" />
  
-------------------------------------------------------------------------------------------  
           Untuk di tampilan dan di database ada 9 data petugas seperti gambar berikut ini
  <img src= "https://user-images.githubusercontent.com/45529723/146785330-d560435b-3d6a-4103-967e-2ef62cec7c73.PNG" />

-------------------------------------------------------------------------------------------  
           Disini saya coba untuk memasukkan data berikut :
   <img src= "https://user-images.githubusercontent.com/45529723/146785323-ce787798-22c3-4dde-8a7a-d0a261d3f09c.PNG" />
    
-------------------------------------------------------------------------------------------  
           Maka baik di database ataupun di halaman web,  data yang di input akan otomatis masuk :
   <img src= "https://user-images.githubusercontent.com/45529723/146786481-33316e69-60bb-4fc3-bc51-1c0b812b34c3.PNG" />
   <img src= "https://user-images.githubusercontent.com/45529723/146786490-99583d9d-4333-4630-806f-4d8c65f5b7aa.PNG" />

-------------------------------------------------------------------------------------------            
-------------------------------------------------------------------------------------------
     2. Data Master Jenis_Barang
        A. Delete Data Jenis_Barang
           Pertama-tama kalian buat file hapus_jenis_barang.php di folder jenis_barang seperti berikut ini :         
   <img src= "https://user-images.githubusercontent.com/45529723/146789862-6d79777e-13dd-4086-89f0-067b670dc100.PNG" />
   
-------------------------------------------------------------------------------------------           
           Setelah itu, kita tinggal testing sebagai berikut :
           Data sebelum dihapus : 
           Untuk di tampilan web dan di database ada 8 data jenis barang seperti gambar berikut ini
   <img src= "https://user-images.githubusercontent.com/45529723/146789869-59a29331-a7aa-4665-ba5a-f801088c7190.PNG" />
           <img src= "https://user-images.githubusercontent.com/45529723/146789872-0ac5e79d-334e-477e-bbc3-0695f6deccbc.PNG" />

-------------------------------------------------------------------------------------------
           Data Setelah dihapus :
           Disini saya hapus untuk data dengan kode jenis barang K008, caranya kita tinggal klik tanda hapus yang ada di halaman 
           data jenis barang, hasilnya adalah sebagai berikut :
   <img src= "https://user-images.githubusercontent.com/45529723/146789876-39fa044d-ee6b-4871-8743-f224462ae33c.PNG" />
   <img src= "https://user-images.githubusercontent.com/45529723/146789880-264d7fe6-58dc-40b7-98d1-79a8523f2bb1.PNG" />
   <img src= "https://user-images.githubusercontent.com/45529723/146789882-9429095b-b69f-4773-ac40-4cfe2a94f456.PNG" />

-------------------------------------------------------------------------------------------
        B. Insert Data Jenis_Barang
        Pertama-tama kalian buat file tambah_jenis_barang.php di folder jenis_barang (untuk source code bisa cek difolder jenis_barang)
        , file ini digunakan untuk membuat form/ halaman baru seperti berikut ini :         
   <img src= "https://user-images.githubusercontent.com/45529723/146809702-effa10e2-ad38-4880-b5bb-90df43149593.PNG" />
   
-------------------------------------------------------------------------------------------           
           Setelah itu, kita buat file aksi_tambah_jenis_barang di folder jenis_barang supaya data yang di input masuk ke database.
   <img src= "https://user-images.githubusercontent.com/45529723/146810130-9f1080ec-842a-4880-8166-571600c9c08f.PNG" />
  
-------------------------------------------------------------------------------------------  
           Untuk di tampilan dan di database ada 7 data jenis_barang seperti gambar berikut ini
  <img src= "https://user-images.githubusercontent.com/45529723/146809715-333a580d-d48b-48aa-906b-af6a5b2c9f7a.PNG" />

-------------------------------------------------------------------------------------------  
           Disini saya coba untuk memasukkan data berikut :
   <img src= "https://user-images.githubusercontent.com/45529723/146809718-d008ef6a-a3ca-45c6-9c4b-31dc57bb762e.PNG" />
    
-------------------------------------------------------------------------------------------  
           Maka baik di database ataupun di halaman web,  data yang di input akan otomatis masuk :
   <img src= "https://user-images.githubusercontent.com/45529723/146809722-341ea1f8-0791-43cf-8a4d-27188f88771b.PNG" />
   <img src= "https://user-images.githubusercontent.com/45529723/146809726-b6ae1c41-323d-43c7-b8b9-c64ef039919d.PNG" />
   
-------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------
     3. Data Master Barang
        A. Delete Data Barang
           Pertama-tama kalian buat file hapus_barang.php di folder jenis_barang seperti berikut ini :         
   <img src= "https://user-images.githubusercontent.com/45529723/146812083-882d4fa4-819e-4692-8a18-3f99b5d670fc.PNG" />
   
-------------------------------------------------------------------------------------------           
           Setelah itu, kita tinggal testing sebagai berikut :
           Data sebelum dihapus : 
           Untuk di tampilan web dan di database ada 7 data barang seperti gambar berikut ini
   <img src= "https://user-images.githubusercontent.com/45529723/146812092-174fb032-d4a3-40ce-a8cc-314e63831f39.PNG" />
           <img src= "https://user-images.githubusercontent.com/45529723/146812096-9bcdfa03-8430-4bab-b298-679ee0dee175.PNG" />

-------------------------------------------------------------------------------------------
           Data Setelah dihapus :
           Disini saya hapus untuk data dengan kode barang B009, caranya kita tinggal klik tanda hapus yang ada di halaman 
           data barang, hasilnya adalah sebagai berikut :
   <img src= "https://user-images.githubusercontent.com/45529723/146812099-794092de-c6d3-4407-a915-e604b20ee530.PNG" />
   <img src= "https://user-images.githubusercontent.com/45529723/146812103-1b1e1272-bccf-47da-a9df-3e9082e6c941.PNG" />
   <img src= "https://user-images.githubusercontent.com/45529723/146812104-169203aa-bf30-4ec4-b87f-9a8ae21da8b1.PNG" />

-------------------------------------------------------------------------------------------
        B. Insert Data Barang
        Pertama-tama kalian buat file tambah_barang.php di folder barang (untuk source code bisa cek difolder barang)
        , file ini digunakan untuk membuat form/ halaman baru seperti berikut ini :         
   <img src= "https://user-images.githubusercontent.com/45529723/146813278-13e52150-9e0d-4aa4-bed3-02348daa2843.PNG" />
   
-------------------------------------------------------------------------------------------           
           Setelah itu, kita buat file aksi_tambah_barang di folder barang supaya data yang di input masuk ke database.
   <img src= "https://user-images.githubusercontent.com/45529723/146813283-c27026ae-a9fd-424a-8b0f-2dcca93d107c.PNG" />
  
-------------------------------------------------------------------------------------------  
           Untuk di tampilan dan di database ada 6 data barang seperti gambar berikut ini
  <img src= "https://user-images.githubusercontent.com/45529723/146813286-50a9a9a0-d11e-407a-894e-dae412fa3cf0.PNG" />

-------------------------------------------------------------------------------------------  
           Disini saya coba untuk memasukkan data berikut :
   <img src= "https://user-images.githubusercontent.com/45529723/146813288-b924ba91-0519-4ae5-a521-3b1fac9640cf.PNG" />
    
-------------------------------------------------------------------------------------------  
           Maka baik di database ataupun di halaman web,  data yang di input akan otomatis masuk :
   <img src= "https://user-images.githubusercontent.com/45529723/146813291-c2f9de62-0145-4cd6-98e9-c112388c4daa.PNG" />
   <img src= "https://user-images.githubusercontent.com/45529723/146813292-75df3948-2add-4e86-aa4b-0223c9c03e87.PNG" />
   
   
------------------------------------------------------------------------------------------- 
-------------------------------------------------------------------------------------------
     4. Data Pelanggan
 
-------------------------------------------------------------------------------------------



##  3. Membuat Repository Github
       Untuk screenshoot dan penjelasan sudah saya buat di README pada github. Terima Kasih
       Repository github sudah saya buat :
       
Klik 
       
       
       
-------------------------------------------------------------------------------------------            
##  4. Kumpulkan di form
       
       Tugas ini sudah saya submit di form tugas. Terima Kasih
       
 -------------------------------------------------------------------------------------------         
Jika kalian memerlukan tutorial mengenai DATABASE ORACLE, silahkan dapat mengunjungi Youtube saya :
 https://www.youtube.com/c/DuaMasaChannel



