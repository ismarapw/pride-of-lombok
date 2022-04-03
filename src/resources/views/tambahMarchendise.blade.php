<!DOCTYPE html>
<html>
<head>
<title>Desktop 13</title>
<style>
    .marchendise {
        position: absolute;
        width: 227px;
        height: 30px;
        left: 81px;
        top: 101px;

        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
        line-height: 30px;
        color: #4EBF4D;
    }
    .namaform{
        position: absolute;
        height: 24px;
        left: 83px;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;

        color: #4EBF4D;
    }
    input[type=text]{
        position: absolute;        
        text-align : left;
        left:83px;
        width: 545px;
        height: 39px;
      }
    input[type=file]{
        position: absolute;
        width: 136px;
        height: 34px;
        left: 83px;
        top: 557px;
    }
    .buttonA {
            position: absolute;
            width: 136px;
            height: 34px;
            left: 83px;
            top: 634px;

            background: #4EBF4D;
            color: white;
            border-radius: 23.5px;
            border: none;
        }
    .buttonB {
            position: absolute;
            width: 112px;
            height: 34px;
            left: 236px;
            top: 634px;

            background: white;
            color: #4EBF4D;
            border-radius: 23.5px;
            outline: auto;
            border: none;
            
    }

</style>
</head>
<body>
  
    <form>
        <label class="marchendise marchendise1">Tambah Marchendise</label><br>
        <label class="namaform nama" style="top:183px">Nama</label><br>
        <input type="text" name="fnama" id="fnama" style="top:220px" placeholder="Masukkan nama barang"></p>
        <label class="namaform nama2" style="top:293px">Jenis Barang</label><br>
        <input type="text" name="fjenis" id="fjenis" style="top:330px" placeholder="Masukkan jenis barang"></p>
        <label class="namaform nama3" style="top:403px">Harga</label><br>
        <input type="text" name="fharga" id="fharga" style="top:440px" placeholder="Masukkan harga barang"></p>
        <label class="namaform nama3" style="top:513px">Gambar</label><br>
        <label for="myfile"></label>
        <input type="file" id="myfile" name="myfile"><br>
        <button class="buttonA button1"><MATH>&plus; Tambah</button>
        <button class="buttonB button2">Kembali</button>
      </form>
</body>
</html>
