<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas M09</title>
</head>
<body>
    <h1>Drop Out Checker</h1>
    <!-- TODO 1: Lengkapi tag `form` berikut ini dengan atribut dimana form ini mengirim data dengan method POST ke file ini lagi. -->
    <form action="index.php" method="POST">
        IPK
        <!-- TODO 2. Buat input bertipe teks untuk IPK  -->
        <input type="text" name="IPK">
        Semester
        <!-- TODO : 3. Buat combo box untuk memilih semester. -->
        <select name="semester">  
            <option value="">Pilih Semester</option>  
            <option value="1">1</option>  
            <option value="2">2</option>  
            <option value="3">3</option>  
            <option value="4">4</option>
            <option value="5">5</option>  
            <option value="6">6</option>  
            <option value="7">7</option>  
            <option value="8">8</option>    
            <option value="9">9</option>  
            <option value="10">10</option>  
            <option value="11">11</option>  
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>  
         </select>   
        <button type="submit" value="check" name="check">Check</button>

    </form>
	
    <!-- TODO 4 : Lakukan pengecekan dan tampilkan pesan dengan meng-includekan file proses.php -->
    <?php
    if(!empty($_POST["IPK"])&&isset($_POST["check"]))
    {
        include 'proses.php';
    }
    else
    {
        echo "<br>";
        echo "Silahkan isi form diatas";
    }
    ?>
	
</body>
</html>
