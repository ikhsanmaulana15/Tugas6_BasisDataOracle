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
   <img src= "https://user-images.githubusercontent.com/45529723/146676711-54ef2376-dedf-47b9-8375-83877aa0da28.PNG" />
           <img src= "https://user-images.githubusercontent.com/45529723/146676754-e18b9517-ab82-412a-a4c4-d34530cd4c65.PNG" />

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
     3. Data Master Barang
     
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



