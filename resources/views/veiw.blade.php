<!doctype html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">


</head>
<body>

<div class="card">
    <div class="card-header">
        <h4 class="card-title">view Img</h4>
    </div>

    <div class="card-body">
        <a href="uploads/sRDId5U9wtUPVm11rf5r6vBedtq1dHX2aOlEnZGZ.pdf">Open the pdf!</a>
        <div class="row pnt-img-view">

        </div>
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="./vendor/global/global.min.js"></script>
<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
<script src="./js/custom.min.js"></script>
<script src="./js/deznav-init.js"></script>
<!-- Apex Chart -->
<script src="./vendor/apexchart/apexchart.js"></script>

<!-- Svganimation scripts -->
<script src="./vendor/svganimation/vivus.min.js"></script>
<script src="./vendor/svganimation/svg.animation.js"></script>


<script>
    var csrf_token = $('meta[name="csrf-token"]').attr('content');

    $(document).ready(function () {
        $('.pnt-img-view').html(null);
        $.ajax({
            type: 'get',
            url: '{!! url('viewImg') !!}',
            success: function (data) {
                var str = "";
                $.each(data.path, function (index, value) {
                    str += '<div class="col-md-4"> <img src="' + value.path + '"> </div>'
                });
                $('.pnt-img-view').append(str);
            }
        });
    });

</script>

</body>
</html>
