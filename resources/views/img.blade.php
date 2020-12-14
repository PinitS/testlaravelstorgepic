<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="image" id="imgInp" >
    <input type="text" name="width" value="" >
    <input type="text" name="height" value="" >
    <img id="blah" src="#" alt="your image" />
    <button type="submit">Submit</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]); // convert to base64 string
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
</script>
</body>
</html>
