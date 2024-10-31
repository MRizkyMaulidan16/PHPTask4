<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        *{
          margin: 0;
          padding: 0;
          
        }
        .form-horizontal{
            margin: 0 auto;
            width: 800px;
            justify-content: center;
            margin-top: 100px;
            align-items: center;
        }
        .form-horizontal h1{
          text-align: center;
        }
        .form-group{
            text-decoration: none;                     
            display: flex;
            margin: 20px;
        }
        .input-group-addon{
          display: flex;
          align-items: center;
          justify-content: center;      
        }
        

    </style>
</head>
<body> 
<form class="form-horizontal" action="f_task4.php" method="POST">
    
    <fieldset>
    
    <!-- Form Name -->
    <h1>Form Registrasi</h1>
    <br>
    <!-- Prepended text-->
    <div class="form-group">
        
      <label class="col-md-4 control-label" for="prependedtext">Nama Lengkap </label>
      <div class="col-md-8">
        <div class="input-group">
          <span class="input-group-addon"></span>
          <input id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Ucok Baba" type="text">
        </div>
        
      </div>
    </div>
   
    
    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Umur </label>  
      <div class="col-md-8">
      <input id="umur" name="umur" type="text" placeholder="20 Tahun" class="form-control input-md">
      </div>
    </div>
    
    <!-- Multiple Radios (inline) -->
    <div class="form-group" name="gender">
      <label class="col-md-4 control-label" for="radios" >Gender</label>
      <div class="col-md-4" name="gender"> 
        <label class="radio-inline" for="radios-0">
          <input type="radio" name="gender" id="radios-0" value="Laki-laki">
          Laki-laki
        </label> 
        <label class="radio-inline" for="radios-1">
          <input type="radio" name="gender" id="radios-1" value="Perempuan">
          Perempuan
        </label>
      </div>
    </div>
    
    <!-- Select Basic -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="selectbasic">Pendidikan</label>
      <div class="col-md-8">
        <select id="selectbasic" name="pendidikan" class="form-control">
          <option value="Diploma">Diploma</option>
          <option value="S1">S1</option>
          <option value="S2">S2</option>
          <option value="S3">S3</option>
        </select>
      </div>
    </div>
    
    <!-- Multiple Checkboxes -->
    <div class="form-group" name="hobi">
      <label class="col-md-4 control-label" for="checkboxes">Hobi</label>
      <div class="col-md-4">
      <div class="checkbox">
        <label for="checkboxes-0">
          <input type="checkbox" name="hobi_1" id="checkboxes-0" value="Membaca Buku, ">
          Membaca Buku
        </label>
        </div>
      <div class="checkbox">
        <label for="checkboxes-1">
          <input type="checkbox" name="hobi_2" id="checkboxes-1" value="Membaca Al-Qur'an, ">
          Membaca Al-Qur'an
        </label>
        </div>
      <div class="checkbox">
        <label for="checkboxes-2">
          <input type="checkbox" name="hobi_3" id="checkboxes-2" value="Travelling, ">
          Travelling
        </label>
        </div>
      <div class="checkbox">
        <label for="checkboxes-3">
          <input type="checkbox" name="hobi_4" id="checkboxes-3" value="Olahraga, ">
          Olahraga
        </label>
        </div>
      <div class="checkbox">
        <label for="checkboxes-4">
          <input type="checkbox" name="hobi_5" id="checkboxes-4" value="Nonton Film, ">
          Nonton Film
        </label>
        </div>
      <div class="checkbox">
        <label for="checkboxes-5">
          <input type="checkbox" name="hobi_6" id="checkboxes-5" value="Hiking">
          Hiking
        </label>
        </div>
      </div>
    </div>
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="singlebutton" name="submit" class="btn btn-primary">Daftar</button>
      </div>
    </div>
    
    </fieldset>
    </form>

    
</body>
</html>

