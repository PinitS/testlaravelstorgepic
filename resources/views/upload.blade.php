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
    <script src="{!! url('sweetalert2.all.min.js') !!}"></script>
    <link href="{!! url('sweetalert2.min.css') !!}" rel="stylesheet">

    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>



</head>
<body>



<div class="card">
    <div class="card-header">
        <h4 class="card-title">Custom file input</h4>
    </div>

    @if(Session::get('data'))
        <input type="hidden" class="pnt-sweet-text" value="{{Session::get('data.text')}}">
        <input type="hidden" class="pnt-sweet-type" value="{{Session::get('data.type')}}">
    @endif

    <div class="card-body">
        <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="basic-form custom_file_input">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input pnt-input-file" id ="path" name ="path">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Button</button>
                    </div>
                </div>
            </div>
        </form>

        <img id="blah" src="#" alt="your image"  style="display: none ; max-height: 250px; max-width: 250px;"/>

    </div>
</div>


<!--**********************************
    Scripts
***********************************-->


<script>
    var csrf_token = $('meta[name="csrf-token"]').attr('content');

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
                $('#blah').show();
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $('.pnt-input-file').change(function() {
        readURL(this);
    });

    {{--$(document).off('click', '.pnt-btn-save').on('click', '.pnt-btn-save', (e) => {--}}
    {{--    $.ajax({--}}
    {{--        type: 'post',--}}
    {{--        enctype: 'multipart/form-data',--}}
    {{--        url: '{!! url('uploadAjax') !!}',--}}
    {{--        data: {--}}
    {{--            'path': $('.pnt-input-file').val(),--}}
    {{--            '_token': window.csrf_token,--}}
    {{--        },--}}
    {{--        beforeSend: function () {--}}
    {{--            console.log('beforeSend');--}}
    {{--        },--}}
    {{--        success: function (data) {--}}
    {{--            console.log(data);--}}
    {{--        }--}}
    {{--    });--}}
    {{--});--}}



    $( document ).ready(function() {
        console.log($('.pnt-sweet-text').val());
        console.log($('.pnt-sweet-type').val());
        if($('.pnt-sweet-text').val() != null)
        {
            Swal.fire({
                position: 'top-end',
                icon: $('.pnt-sweet-type').val(),
                title: $('.pnt-sweet-text').val(),
                showConfirmButton: false,
                timer: 1500
            });
        }

    });



</script>

</body>
</html>
