<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('adminassets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('adminassets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('adminassets/assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('adminassets/assets/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('adminassets/assets/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('adminassets/assets/quill/quill.snow.css') }}" rel="stylesheet">
  <link href="{{ asset('adminassets/assets/quill/quill.bubble.css') }}" rel="stylesheet">
  <link href="{{ asset('adminassets/assets/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('adminassets/assets/simple-datatables/style.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('adminassets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= header ======= -->
  @include('Admin.partials.header')

  <!-- ======= Sidebar ======= -->
  @include('Admin.partials.sidebar')

  <main id="main" class="main">
    <!-- ======= Content ======= -->
    @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Culticademy</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
      $(document).ready(function() {
          $("#showTableButton").click(function(e) {
              e.preventDefault();
              $("#tableContainer").toggle();
          });
      });
  </script>

<script>
  function calculateTotalPrice() {
    var rentDate = new Date(document.getElementById('rent_date').value);
    var returnDate = new Date(document.getElementById('return_date').value);

    // Calculate the difference in days
    var diffInTime = returnDate.getTime() - rentDate.getTime();
    var diffInDays = Math.ceil(diffInTime / (1000 * 3600 * 24));

    // Get the price per day as a string
    var pricePerDayString = document.getElementById('price_per_day').value;

    // Convert the price per day to a number
    var pricePerDay = parseFloat(pricePerDayString);

    // Calculate the total price
    var totalPrice = diffInDays * pricePerDay;

    // Update the total price field as a string
    document.getElementById('total_price').value = totalPrice.toFixed(2).toString();
  }
</script>


  <script src="{{ asset('adminassets/assets/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('adminassets/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('adminassets/assets/chart.js/chart.umd.js') }}"></script>
  <script src="{{ asset('adminassets/assets/echarts/echarts.min.js') }}"></script>
  <script src="{{ asset('adminassets/assets/quill/quill.min.js') }}"></script>
  <script src="{{ asset('adminassets/assets/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ asset('adminassets/assets/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('adminassets/assets/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('adminassets/js/main.js') }}"></script>

</body>

</html>