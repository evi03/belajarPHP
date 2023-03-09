<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP evi</title>
</head>
<style>
</style>
<body>
    <!-- <h1>Hello World</h1> -->
    <div>
    <h1> EPISODE 3 : </h1>
        <?php

            echo "hello world"; //penulisan yang benar
        ?>
    </div>

    <div>
        <h1>EPISODE 4 : </h1>
            <?php
                $greeting = "HELLO";
                echo "hello" . " world" . ", "; //untuk mengabungkan string pada php
                echo $greeting . " World" . ", "; //Cara menggunakan/memangil variabel 
                echo "$greeting World"; //Opsi lain   
            ?>
    </div>
    
    <div>
        <h1>EPISODE 5 : </h1>
            <h3>contoh if-else</h3> 
                <?php
                    $buku = "Algoritma";
                    $read = true; 

                    if ($read){
                        $message = "kamu telah membaca $buku";
                    }else{
                        "Kamu belum membaca $buku";
                    }

                    echo $message;
                ?> 

            <h3>contoh if-elseif-else</h3>
                <?php
                    $buah = "merah";

                    if($buah == "orange"){
                        echo "apel berwarna orange";
                    }elseif($buah == "merah"){
                        echo "apel berwarna merah";
                    }else{
                        echo "buah tidak berwarna";
                    }
                ?>

            <h3>contoh tenary operator</h3>
                <?php
                    $nilai = 100;
                
                    if ($nilai > 60){
                        echo "nilai diatas KKM ";
                    }else{
                        echo "nilai dibawah kkm";
                    }
                ?>
            <h3>Contoh Boolean</h3>
                <?php
                    $benar = true;
                    $salah = false;
                    
                    echo "benar = $benar, salah = $salah";
                ?>
    </div>

    <div>
        <h1>EPISODE 6</h1>
        <?php
            $Daftarbuah = [
                "APEL",
                "ANGGUR",
                "JERUK",
                "SEMANGKA"
            ];
        ?>

        <Ul>
            <b>Daftar Buah:</b>
                <?php foreach($Daftarbuah as $buah){ //
                    // 
                    
                    echo "<li>$buah</li>"; 
                }

                ?>
        </Ul>

        <!-- contoh menggunakan endforeach -->
        <ul>
            <b>Daftra Buah Menggunakan endForeach</b>
                <?php foreach ($Daftarbuah as $buah) : ?>
                    <li><?php echo $buah; ?></li>
                <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>