<!DOCTYPE html>
<!-- Created By Codecary -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{$title}} | Entry UKDW</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Muli&display=swap');

    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
    body{
        background-color: rgb(97, 25, 55);
        color: #fff;
        font-family: 'Muli', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        overflow: hidden;
    }
    .container{
        background-color: rgb(71, 6, 33);
        padding: 20px 40px;
        border-radius: 5px;
    }
    .container h1{
        text-align: center;
        margin-bottom: 30px;
    }
    .container a {
        text-decoration: none;
        color: rgb(241, 97, 157);
    }
    .btn{
        display: inline-block;
        width: 100%;
        cursor: pointer;
        background-color: rgb(241, 97, 157);
        padding: 15px;
        font-family: inherit;
        font-size: 16px;
        border: 0;
        border-radius: 5px;
    }
    .btn:focus{
        outline: 0;
    }
    .btn:active{
        transform: scale(0.98);
    }
    .text{
        margin-top: 30px;
    }
    .form-control{
        position: relative;
        margin: 20px 0 40px;
        width: 300px;
    }
    .form-control input{
        background-color: transparent;
        border: 0;
        border-bottom: 2px solid #fff;
        display: block;
        width: 100%;
        padding: 15px 0 10px 0;
        font-size: 18px;
        color: #fff;
    }
    .form-control input:focus,
    .form-control input:valid{
        outline: 0;
        border-bottom-color: rgb(241, 97, 157);
    }
    .form-control label{
        position: absolute;
        top: 15px;
        left: 0;
    }
    .form-control label span{
        display: inline-block;
        font-size: 18px;
        min-width: 5px;
        transition: 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }
    .form-control input:focus + label span,
    .form-control input:valid + label span{
        color: rgb(241, 97, 157);
        transform: translateY(-30px);
    }
    </style>

</head>
    <body>
        @yield('container')
        <script>
            const labels = document.querySelectorAll('.form-control label')
    
        labels.forEach(label => {
            label.innerHTML = label.innerText
            .split('')
            .map((letter, idx) => `<span style="transition-delay:${idx * 50}ms">${letter}</span>`)
            .join('')
        })
        </script>
    
    </body>
</html>