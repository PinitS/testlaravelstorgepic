<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MotaAdmin - Bootstrap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->

    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Chat box start
    ***********************************-->

    <!--**********************************
        Chat box End
    ***********************************-->

    <!--**********************************
                Sidebar Fixed
            ***********************************-->

    <!--**********************************
        Sidebar End
    ***********************************-->


    <!--**********************************
        Header start
    ***********************************-->

    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->

    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
    <div class="content-body">
        <div class="container-fluid">

            <!-- row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Recent Payments Queue</h4>


                            <div style="horiz-align: center">
                                <button class="btn btn-warning pnt_read_pdf">Read Pdf</button>
                                <button class="btn btn-light exportfilterExcel">Filter</button>
                                <button class="btn btn-danger exportAllExcel">All</button>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                    <tr>
                                        <th style="width:80px;"><strong>#</strong></th>
                                        <th><strong>path</strong></th>
                                        <th><strong>created_at</strong></th>
                                        <th><strong>updated_at</strong></th>

                                    </tr>
                                    </thead>
                                    <tbody class="data-section">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->


    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="http://dexignlab.com/" target="_blank">DexignLab</a>
                2020</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->


</div>
<!--**********************************
    Main wrapper end
***********************************-->

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

    var filter_id = 3;

    $(document).ready(function () {
        $('.data-section').html(null);
        $.ajax({
            type: 'get',
            url: '{!! url('viewImg') !!}',
            success: function (data) {
                var str = "";
                $.each(data.path, function (index, value) {

                    str += '<tr><td>' + (index + 1) + '</td>' +
                        '<td>' + value.path + '</td>' +
                        '<td>' + value.created_at + '</td>' +
                        '<td>' + value.updated_at + '</td></tr>';
                });
                $('.data-section').append(str);
            }
        });
    });

    $(document).off('click', '.exportAllExcel').on('click', '.exportAllExcel', (e) => {
        window.open("{!! url('exportAllExcel') !!}");
    });
    $(document).off('click', '.exportfilterExcel').on('click', '.exportfilterExcel', (e) => {
        window.open("{!! url('exportAllExcel') !!}/") + window.filter_id;
    });
    $(document).off('click', '.pnt_read_pdf').on('click', '.pnt_read_pdf', (e) => {
        window.open("{!! url('uploads/exGBjcGxaB6pI8d5BUji0vkVQB1ax0aGR1xb2XwD.pdf') !!}");
    });


</script>

</body>

</html>
