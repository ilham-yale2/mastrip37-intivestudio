<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <title>Customer</title>
    <style>
      body{
        padding: 0;
        margin: 0;
      }
      .content{
        height: 100vh
      }
      
      img.position-absolute{
      }

    </style>
  </head>
  <body style="font-family: 'Nunito',sans-serif;">
    <div class="container ">
      <div class="row">
        <div class="col-md-4 col-12 px-0 px-md-2 content mx-auto position-relative overflow-hidden">
          <img src="{{ asset("image/Group2.png") }}" class="w-100 position-absolute" alt="" style="z-index: 1;bottom:0">
          <div class="position-relative" style="z-index: 2">
            <h4 class="text-center pt-5 fw-bold">Selamat Datang di</h4>
            <div class="col-md-6 col-8 mx-auto mt-5">
              <img src="{{ asset('image/Group 58 (1).png') }}" class="w-100" alt="">
            </div>
            <div class="py-md-5 my-2"></div>
            <div class="col-md-10 col-11 mx-auto mt-5 py-3 bg-warning px-3 " style="border-radius: 20px" >
              <form action="/customer/store" method="post" class="d-flex flex-wrap">
                @csrf
                <div class="mb-3 w-100">
                  <label for="nopol" class="form-label text-center w-100" style="color: #2B4282">Masukkan No. Pol anda :</label>
                  <input type="text" placeholder="Masukkan Nopol" id="nopol" class="form-control" name="nopol" required aria-describedby="emailHelp">
                  <input type="hidden" name="kendaraan" value="Motor">
                  {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                </div>
              
                <button type="submit" class="btn bg-white rounded-pill mx-auto px-4">Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
       
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::get('success'))
        <script>
          swal({
            title: "Good job!",
            text: "{!! session('success') !!}",
            icon: "success",
          });
        </script>
    @endif

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>