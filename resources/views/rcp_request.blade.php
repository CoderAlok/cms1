<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $page_title }}</title>
    {{-- Script --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- link --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <form action="" name="" id="request_form">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="" />
            </div>
            <div class="form-group">
                <label for="">Remarks</label>
                <textarea name="remarks" id="remarks" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <button class="btn btn-primary">Save</button>
            <input type="reset" class="btn btn-danger" value="Clear">
        </form>
    </div>
</body>
</html>
<script>
    
</script>