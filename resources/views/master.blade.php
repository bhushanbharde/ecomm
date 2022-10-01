<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-Comm Project</title>
    <!-- CSS only -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    </style>

</head>
<style>
    *{
        font-family: 'Poppins', san-serif;
        /* color: #444; */
    }
    .login{
        height: 80vh;
    }
    img.slider-img{
        height: 500px !important;
        width: auto !important;
        padding: 50px;
    }
    .desc{
        background-color: #767f86ad;
    }
    .treding-wrapper{
        padding: 50px;
    }
    .trending-img{
        height: 150px;
        /* width: 200px; */
    }

    .trending-item{
        display: flex;
        justify-content: space-evenly;
        align-items: center;
    }
    .detail-img{
        height: 300px;
    }
    
</style>
<body>
    {{View:: make('header')}}
    @yield('content')
    {{View:: make('footer')}}


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</body>
<script>
    $('.carousel').carousel();
</script>
</html>