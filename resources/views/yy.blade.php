<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ app_path('') }}/node_modules/fancybox/dist/css/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="{{ url('node_modules') }}/fancybox/dist/js/jquery.fancybox.pack.js"></script>
</head>

<body>
    <a href="large_image.jpg" class="fancybox" title="Sample title"><img src="small_image.jpg" /></a>
</body>

<script>
    $(document).ready(function() {
        $('.fancybox').fancybox();
    });
</script>

</html>
