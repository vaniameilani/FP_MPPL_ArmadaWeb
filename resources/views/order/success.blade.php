<!doctype html>
<html lang="en" class="h-100">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style type="text/css">
		body
		{
			background-color:#f9f6f7;	
		}
	</style>

    <title>success</title>
  </head>
    
    <body> 
        <div class="container">
           <div class="position-absolute top-50 start-50 translate-middle text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg><br><br>
                <h1 class="fs-2 fw-bold">Selamat, kamu telah melakukan pemesanan !</h1><br>
                <p class="lead fw-normal">Admin akan verifikasi pemesanan anda maksimal 1x24 jam</p>
                <p class="lead fw-normal">Silahkan kembali ke 
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Halaman Utama') }}.
                  </a> 
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </p>
                <footer class="mt-auto footer">
                    <strong>ARMADA &copy; 2020.</strong>
                </footer>
           </div>
        </div>
  </body>
</html>
