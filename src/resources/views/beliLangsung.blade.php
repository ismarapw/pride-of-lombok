<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="desk4.css">
    <title>Desktop 4</title>
  </head>
  <body>
      
    <!-- aku kasih ini biar kebayang aja naroh isinya -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                </ul>
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </div>

    <!-- Isi -->
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="judul">
                    <h4><b>Beli Langsung</b></h4>
                </div>
            
                <div class="kotak">
                    <div class="foto">
                        <img src="foto/island.png" class="img-thumbnail rounded float-start" alt="">
                    </div>
                </div>

            </div>

            <div class="col">

                <div class="deskrip">
                    <h3 style="margin-bottom: 16px;"><b>Kain Tenun Sasak</b></h3>
                    <h4 style="margin-bottom: 16px;"><b>Rp125.000</b></h4>
                    <h6 style="color: #4EBF4D; margin-bottom: 16px;">Jumlah</h6>

                    <input type="text" class="form-control" placeholder="" aria-label="Username" aria-describedby="addon-wrapping" style="width: 59px; height: 25px; border-radius: 5px; margin-bottom: 16px; text-align: center;">

                    <h6 style="color: #4EBF4D; margin-bottom: 16px;">Alamat</h6>

                    <input type="text" class="form-control" placeholder="Input Alamat Anda" aria-label="Username" aria-describedby="basic-addon1" style="margin-bottom: 16px; height: 39px; width: 545px;">

                    <h6 style="color: #4EBF4D; margin-bottom: 16px;">Metode Pembayaran</h6>

                    <!-- dropdown -->
                    <div class="input-group mb-3" style="width: 545px;">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <button class="btn btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="#">Gopay</a></li>
                          <li><a class="dropdown-item" href="#">M-Bangking</a></li>
                          <li><a class="dropdown-item" href="#">Shopee Pay</a></li>
                        </ul>
                    </div>
                    <!-- end drop down -->

                    <h6 style="color: grey; margin-bottom: 16px; margin-right: 22px;" class="d-inline">Total Tagihan</h6>
                    <p style="color: #F85734; font-size: 22px;" class="d-inline"><b>Rp125.000</b></p>

                    <button type="button" class="btn btn-lg badge text-wrap d-block" style="background-color: #4EBF4D; color: white; border-radius: 23.5px; height: 39px; width: 149px; margin-top: 16px;">Bayar</button>

                </div>

            </div>
            <div class="col"></div>
        </div>
        

        
    </div>
    


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
  </body>
</html>