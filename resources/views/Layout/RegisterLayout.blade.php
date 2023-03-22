<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        * {
            box-sizing: border-box;
            /* overflow-x:  hidden !important; */
        }

        .box::before {
            content: '';
            width: 500px;
            height: 500px;
            background: linear-gradient(#0079FD, #ffffff00);
            position: fixed;
            top: -13%;
            left: -5%;
            border-radius: 100%;
            z-index: -1;
        }

        .box::after {
            content: '';
            width: 500px;
            height: 500px;
            background: linear-gradient(#007afda7, #ffffff00);
            position: fixed;
            bottom: -18%;
            right: -2%;
            border-radius: 100%;
            z-index: -1;
        }

        .sec-5-form {
            background-color: #e7f3ff96;
            border-radius: 20px;
            padding: 30px;
        }

        .sec-5-form h2 {
            font-weight: 700;
            line-height: 60px;
            color: black;
        }

        .sec-5-form p {
            font-weight: 400;
            font-size: 18px;
            color: black;
            margin-top: 7px;
        }

        .sec-5-form input {
            width: 100%;
            border: 0;
            height: 50px;
            border-radius: 15px;
            color: black;
        }

        input:focus-visible {
            outline: 0px !important;
        }

        .sec-5-form select {
            width: 100%;
            border: 0;
            padding: 10px;
            height: 50px;
            border-radius: 15px;
            color: black;
        }

        select:focus-visible {
            outline: 0px !important;
        }

        textarea:focus-visible {
            outline: 0px !important;
        }

        .sec-5-form input::placeholder {
            font-weight: 400;
            font-size: 15px;
            line-height: 19px;
            color: black;
        }

        /* .form-select{
  width: 100% !important;
  border: 0 !important;
  height: 50px !important;
  border-radius: 15px !important;
} */
        .input-group>.form-control,
        .input-group>.form-select,
        .input-group>.form-floating {
            box-shadow: none !important;
            border: none !important;
            outline: none !important;
        }

        textarea {
            width: 100%;
            border: 0;
            height: 50px;
            border-radius: 15px;
            height: 200px;
            padding: 10px
        }

        textarea::placeholder {
            color: black;
        }

        textPath:focus-visible {
            border: 0 !important;
            outline: 0 !important;
        }

        .sec-5-sub {
            background-color: #0079FD;
            padding: 15px 60px;
            border: 0;
            border-radius: 15px;
            margin-top: 15px;
            font-weight: bold;
            color: white;
        }

        @media screen and (max-width: 800px) {
            .sec-5-form {
                padding: 10px;
            }
            .box::before {
            content: '';
            width: 0px;
            height: 0px;
            background: linear-gradient(#007afd00, #ffffff00);
        }

        .box::after {
            content: '';
            width: 0px;
            height: 0px;
            background: linear-gradient(#007afd00, #ffffff00);
        }
        }
    </style>
</head>

<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
