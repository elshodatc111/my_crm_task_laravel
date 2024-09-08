<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Edu Meneger</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="{{ env('CDN_LINK_TECHER')}}assets/img/logo/logo_icon.png" rel="icon">
  <link href="{{ env('CDN_LINK_TECHER')}}assets/img/logo/logo_icon.png" rel="apple-touch-icon">
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ env('CDN_LINK_TECHER')}}assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ env('CDN_LINK_TECHER')}}assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ env('CDN_LINK_TECHER')}}assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ env('CDN_LINK_TECHER')}}assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ env('CDN_LINK_TECHER')}}assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ env('CDN_LINK_TECHER')}}assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ env('CDN_LINK_TECHER')}}assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="{{ env('CDN_LINK_TECHER')}}assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.7/jquery.inputmask.min.js"></script>
</head>

<body>
    @yield('content')
    <script>
      $(document).ready(function() {
        $('.amount').on('input', function() {
          var input = $(this).val();
          var numericValue = input.replace(/[^\d]/g, '');
          var formattedValue = numericValue ? parseInt(numericValue, 10).toLocaleString() : '';
          $(this).val(formattedValue);
        });
        $('.phone').inputmask({
          mask: '+\\9\\9\\8 99 999 9999',
          placeholder: ' ',
          clearMaskOnLostFocus: true
        });
      });
    </script>
  <script src="{{ env('CDN_LINK_TECHER')}}assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ env('CDN_LINK_TECHER')}}assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ env('CDN_LINK_TECHER')}}assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ env('CDN_LINK_TECHER')}}assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ env('CDN_LINK_TECHER')}}assets/vendor/quill/quill.js"></script>
  <script src="{{ env('CDN_LINK_TECHER')}}assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ env('CDN_LINK_TECHER')}}assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ env('CDN_LINK_TECHER')}}assets/vendor/php-email-form/validate.js"></script>
  <script src="{{ env('CDN_LINK_TECHER')}}assets/js/main.js"></script>
</body>

</html>