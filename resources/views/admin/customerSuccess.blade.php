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
          <img src="{{ asset("image/Group3.png") }}" class="w-100 position-absolute" alt="" style="z-index: 1;top:50%; transform: translateY(-50%)">
          <div class="position-relative" style="z-index: 2">
            <h4 class="text-center pt-5 fw-bold pb-5 mb-5">Terima Kasih</h4>
            <div class="py-2"></div>
            <div class="mt-5 pt-5 col-10 mx-auto text-center fw-bold">
                <h2 style="color: #2B4282" class="mt-5">
                    Silahkan menunggu,
                    kendaraan anda
                    akan segera di proses :)
                </h2>
            </div>
            <div class="col-md-6 col-8 mx-auto mt-5 pt-md-5 pt-2">
              <img src="{{ asset('image/Group 58 (1).png') }}" class="w-100" alt="">
            </div>
           <div class="w-100 text-center fw-bold mt-3">
            <p class="mb-0">
                <span class="iconify" data-icon="ph:map-pin-fill" data-width="25"></span>
                <span>Jl. Raya Mastrip No. 37 Surabaya</span>
            </p>
            <p>
                <span class="iconify" data-icon="ri:whatsapp-fill" data-width="25"></span>
                <span><a href="wa.me/6282139140595">0821-3914-0595</a></span>
            </p>
           </div>
          </div>
        </div>
      </div>
       
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
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