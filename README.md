## RANGKUMAN PHP EVI AMALIA MIDFIA

## EPISODE 1 HOW TO CHOSE A FIRST PROGRAMMING LANGUAGE ##
Mengapa mengunakan Bahasa pemograman PHP? Alasannya karena php mampu membuat keputusan besar tanpa harus ada keahlian statistic penguna. PHP juga cocok untuk tahapawal pemula karena sifatnya yang open source  dan serbaguna. Dapat digunakan untuk membuat website dinamis. Dapat menyimpan data dalam data base, dapat membuat halaman yang fleksibel  dan dapat di ubah berdasarkan kemauan user untuk berbagai pengaturan yang di inginkan. 

*Open source software adalah istilah yang digunakan untuk software yang membuka/membebaskan source codenya untuk dilihat oleh orang lain dan membiarkan orang lain mengetahui cara kerja software tersebut dan sekaligus memperbaiki kelemahan-kelemahan yang ada pada software tersebut.*


## EPISODE EPISODE 2 TOOLS OF THE TRADE ##
Rekomedasi teks editor (sublime teks, visual studio code, phpStrome), kemudian terminalyang sudah ada pada windows dan mac. Terminal sendiri akan digunakan untuk beberapa saat seperti membuat direktori (mkdir), membuka/memilih direktori (cd), membuat local host halaman website. Menginstal php dan mysql


## EPISODE 3 FIRST PHP TAG ##
Index.html merupakan default file dan menjadi file penting dalam sebuah website dikarenakan tanpa adanya file index maka nantinya browser akan menampilkan file-file dalam bentuk folder dan bukan dalam bentuk tampilan website yang sesuai desain. (WEB STATIS)

Kemudian file .html tadi di ubah menjadi .php agar file tersebut menjadi dinamis. Ketika kita sudah menggunakan tag <?php ?> maka kita harus mengisinya dengan bahasa php bukan html, contoh : 

* _php HELLO WORLD_ ini contoh yang salah dikarenakan kita mengisinya dengan bahasa html.
* _php echo “HELLO WORLD”;_  ini contoh yang benar dikarenakan kita menulisnya sudah sesuai dengan bahasa penulisan php, dan echo berfungsi sebagai untuk menampilkan teks ke layar

```php
 <h1>
          <?php
              hello world //penulisan yang salah
              echo "hello world" //penulisan yang benar
          ?>
     </h1>
```

Perbedaan website Statis dan Dinamis. **Website statis** adalah situs yang berisi informasi yang tetap dan cenderung 
jarang berubah biasanya digunakan sebagai situs penjualan dimana konten halaman tersebut hanya berisi produk dan 
kontak dari pemilik website.  Sedangkan **web dinamis**, perubahannya lebih fleksibel dan dapat berinteraksi langsung, 
penggunaan website dinamis lebih beragam contohnya situs sosial media, toko online yang mengharuskan adanya interaksi 
antara pengguna/admin website dan pengunjung website.

* Membuat direktori pada cmd
![image](https://user-images.githubusercontent.com/95482289/223885894-26174c4d-d091-400d-a2a1-5e73dcc6875c.png)

* Membuat file HTML dengan isi HELLO WORLD
![image](https://user-images.githubusercontent.com/95482289/223885913-781f1fb2-bf68-4b4f-b0d8-e47abd44f2fe.png)

* Dan membuat localhost

![image](https://user-images.githubusercontent.com/95482289/223886563-cb378524-7ed0-4fc5-8b27-fb8200c0be59.png)


## EPISODE 4 VARIABELS ##
Pada PHP tidak menggunakan operator pengabungan string seperti (+ / *), pada php Ketika ingin mengabungan string mengunakan operator “.”

![image](https://user-images.githubusercontent.com/95482289/223888170-3d94ddb7-4179-4c64-ae09-57ca32542e95.png)

Step membuat dinamis menggunakan variable, untuk membuat variable diawali dengan tanda “$”. Contoh : membuat variable salam dengan isi HELLO

![image](https://user-images.githubusercontent.com/95482289/223888244-8c1a5be5-0697-4894-afae-9f401fcd5d83.png)

Alasan mengapa mengunakan variable dari pada string biasa? Karena Variable akan merunjuk ke hal-hal yang tidak dapat kita kendalikan secara  statis. Contohnya dengan menggunakan variable bisa merunjuk ke masukan pengguna di dalammnya, merujuk sesuatu yang berasal dari  database, dan lain sebagainya.

Contoh opsi lain ketika menggunakan variable ke dalam string. Tetapi perlu diingat ketika kita memasukan variable ke dalam string itu harus menggunakan tanda petik double, dan tidak boleh mengunakan tanda petik tungal.

![image](https://user-images.githubusercontent.com/95482289/223889176-d659e2df-ae5f-4b9e-88d0-7f449a2575a6.png)


## EPISODE 5 CONDITIONALS AND BOOLEANS ##
Conditional statement merupakan salah satu fitur yang penting dalam php untuk mengeksekusi kode secara selektiif berdasarkan kondisi tertentu. Sedangkan Boolean adalah tipe data yang hanya memiliki dua nilai yaitu true dan false.

Contoh ketika menggunakann statement if else dengan memangil variabel :

![image](https://user-images.githubusercontent.com/95482289/223889324-7dcad485-adfb-43be-900c-515fe62d1fb9.png)

perbedaan conditional dengan Boolean: 
* a)	pada conditional statementnya tidak hanya bernilai true dan false dikarenakan statement pada conditional terdapat beberapa jenis meliputi : 
    + if else : suatu kondisi jika satu kode bernilai true dan blok kode lainnya bernilai false
    + if-elseif-else : digunakan untuk memeriksa kondisi jika kondisi pertama(if) tidak terpenuhi
    ![image](https://user-images.githubusercontent.com/95482289/223889510-bbb368a8-953f-49d2-bb72-c6de97ed0154.png)
    + switch statement : digunakan ketika ingin mengeksekusi kode berdasarkan nilai dari suatu variabel
    
    ![image](https://user-images.githubusercontent.com/95482289/223889581-fe20fa14-187e-4237-92b8-65ec4e3609a8.png)

* b)	Boolean statementnya hanya memiliki 2 nilai yaitu true dan false contoh penggunaan Boolean:

![image](https://user-images.githubusercontent.com/95482289/223889659-c19c863f-49b0-4b6e-8b74-584d6dff7535.png)

Output

![image](https://user-images.githubusercontent.com/95482289/223889691-87b6741a-b731-4e22-bb61-8cab05540f0f.png)

Mengapa outputnya 1 dan 0? Dikarenakan jika tampilan menggunakan echo maka tipe data Boolean dipaksa berganti dengan tipe data string yang mana pada tipe data string 0 diangap sebagai false.


## EPISODE 6 ARRAY ##
Bagaimana jika ingin membuat beberapa kumpulan seperti daftar buku favorit, daftar nama mahasiswa dan lain sebagainya dan memasukannya ke dalam variabel? Jawabannya hal itu bisa dilakukan dengan menggunakan array dan membuatnya menjadi dinamis. Mengapa dinamis? Dikarenakan biasanya hal-hal seperti kumpulan data tersebut disimpan dalam database. Contoh membuat array pada variabel :

![image](https://user-images.githubusercontent.com/95482289/223889846-41daaf2f-5510-4efa-a96f-eed7f271fbaf.png)

Keterangan : 
* fungsi foreach pada php digunakan untuk mengulang setiap elemen dalam sebuah array dan mengeksekusi kode yang diberikan pada setiap elemen.
*	$daftarBuah adalah array yang ingin di ulang
*	$buah adalah variabel yang menampung nilai dari setiap elemen array selema proses pengulangan
*	Setiap kali pengulangan di lakukan variabel $buah akan di isi dengan nilai dari elemen array yang sedang di ulang

Output :

![image](https://user-images.githubusercontent.com/95482289/223890066-52d52c10-37af-44db-a60e-8ff7dde582b8.png)

** Contoh lain ketika menggunakan endforeach **

![image](https://user-images.githubusercontent.com/95482289/223890123-6b28ca82-23e6-45a7-a21b-e421ff9ac8d8.png)

Keterangan :
* Endforeach digunakan untuk menutup blok kode yang di awali dengan foreach(). Hal ini membantu menghindari kesalahan sintaks pada kode yang kompleks atau sulit dibaca. 
*	Pada foreach menggunakan kurung kurawal {} untuk membungkus blok kode yang akan dijalankan. Sedangkan pada endforeach menggunakan titik dua : dan endforeach menggunakan semicolon untuk menutup blok kode.















