<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    SweetAlert--}}
    <script src="{!! url('sweetalert2.all.min.js') !!}"></script>
    <link href="{!! url('sweetalert2.min.css') !!}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

</body>

<script>

    $(document).ready(function () {
        Swal.fire({
            position: 'top-end',
            icon: 'error',
            title: 'latitude or longitude went wrong',
            showConfirmButton: false,
            timer: 1500
        })
    });

</script>
</html>
