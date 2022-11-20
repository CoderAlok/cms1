<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>

<body>
    <div class="row">
        {{-- <div class="container col-md-6 mt-5">
            <div class="card">
                <div class="card-header">Register</div>
                <div class="card-body">
                    {!! Form::open([, 'name' => 'test_register', 'id' => 'test_register']) !!}
                        <div class="form-group">
                            <label for="name">Name</label>
                            {!! Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name.', 'id' => 'name']) !!}
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            {!! Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your email address', 'id' => 'email']) !!}
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            {!! Form::selectRange('age', '10', '90') !!}
                        </div>
                        <div class="form-group">
                            <label for="sex">Sex</label>
                            {!! Form::radio('sex', 'male', true, ['class' => '', 'id' => 'sexmale']) !!} Male
                            {!! Form::radio('sex', 'female', false, ['class' => '', 'id' => 'sexfemale']) !!} Female
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            {!! Form::textarea('address', '', ['class' => 'form-control', 'id' => 'address', 'placeholder' => 'Enter the address', 'row' => '2', 'col' => '1']) !!}
                        </div>
    
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" name="save" id="save" value="">Save</button>
                            <button type="reset" class="btn btn-danger">Clear</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div> --}}
        {{-- <div class="co-md-6 mt-5">
            {!! Form::open() !!}
            <div class="form-group">
                <label for=""></label>
                {!! Form::text($name ='', $value = '', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for=""></label>
                {!! Form::text($name ='', $value = '', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for=""></label>
                {!! Form::text($name ='', $value = '', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label for=""></label>
                {!! Form::text($name ='', $value = '', ['class' => 'form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div> --}}
    </div>

    <div class="container mt-3">
        <h4 class="text-center">Students Details</h4>
        <form action="javascript:void(0);" method="post" id="test_form1" class="form-group col-md-6 offset-md-3">
            <div class="form-group">
                <label for="">Username</label>
                <input type="text" class="form-control" name="uname" id="uname"
                    placeholder="Enter the username" />
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="pass" id="pass"
                    placeholder="Enter the password" />
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" class="form-control" name="cpass" id="cpass"
                    placeholder="Enter the password again to confirm" />
            </div>
            <div class="form-group">
                <label for="">Gender</label>
                <input type="radio" class="" name="gender" value="Male">Male
                <input type="radio" class="" name="gender" value="Female">Female
                <input type="radio" class="" name="gender" value="Transgender">Transgender
            </div>
            <div class="form-group">
                <label for="">City</label>
                <select name="city[]" id="city" class="form-control" multiple>
                    <option>none</option>
                    @foreach ($city as $val)
                        <option value="{{ $val }}">{{ $val }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" name="sbmt" id="sbmt" value="Submit" />
                <input type="reset" class="btn btn-danger" value="Clear">
            </div>
        </form>
    </div>
</body>

</html>

<script>
    // $('#test_register').validate({
    //     'rule':{
    //         'name' : required
    //     },
    //     'message' : {
    //         'name' : 'Please enter a name.'
    //     },
    //     submitHandler: function(form) {
    //         // $(form).ajaxSubmit();
    //     }
    // });

    // validate the test-form1 form

    $('#sbmt').on('click', function() {
        // $('#test-form1').validate({
        //     'rule': {
        //         'uname': {
        //             required: true
        //         },
        //         'pass': {
        //             required: true
        //         },
        //         'cpass': {
        //             required: true
        //         },
        //         'city': {
        //             required: true
        //         }
        //     },
        //     'message': {
        //         'uname': {
        //             required: 'Please fill the username'
        //         },
        //         'pass': {
        //             required: 'Please fill the passowrd'
        //         },
        //         'cpass': {
        //             required: 'Please confirm your password'
        //         },
        //         'city': {
        //             required: 'Please select a city'
        //         }
        //     },
        //     submitHandler: function(form) {
        //         // 
        //     }
        // });


        // var form_data = $('#test-form1').serializeArray()
        // console.log(form_data)

        $("#test_form1").submit(function(event) {

            try {

                var formData = $('#test_form1').serializeArray();
                console.log(formData);
                // var formData = {
                //     name: 'alok das', //$("#name").val(),
                //     email: 'alokdas4all@gmail.com', //$("#email").val(),
                //     superheroAlias: 'yes', //$("#superheroAlias").val(),
                // };

                $.ajax({
                    type: "POST",
                    header: '',
                    url: "{{ route('alok.show.page.test101.add') }}",
                    data: formData,
                    // dataType: "json",
                    // encode: true,
                }).done(function(data) {
                    console.log(data);
                });

                event.preventDefault();
            } catch (e) {
                console.log(e)
            }

            // $.ajax({
            //     type: "POST",
            //     url: "{{ route('alok.show.page.test101.add') }}",
            //     data: {'data': 'hello'}, //jQuery('#test-form1').serializeArray(),
            //     success: function(response) {
            //         console.log(response)
            //     },

            // });
        })
    });
</script>
