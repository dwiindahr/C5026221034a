<html>
    <head>
    <title>CSS</title>
    <link rel="stylesheet" href="mystyle.css">
    <style>
        body{
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            color: rgb(255, 136, 0);
        }

        p,div{
            text-align: center;
        }

        .salam{
            font-size: larger;
            text-align: right;
            font-weight: bold;
            text-transform: uppercase;
        }

        .garisbawah{
            text-decoration: underline;
            color: black;

        }

    </style>
    </head>

    <body>
        <!--Inline CSS, digunakan jika hanya 1 bagian di 1 halaman yg berbeda-->
        Hallo <b style="color: red;text-decoration: underline;text-shadow: 2px 2px 5px rgb(0, 0, 0);">apa</b> kabar?

        <!--Inpage, digunakan jika yg berbeda hanya i halaman -->
        <div class="garisbawah salam">Hallo apa kabar?</div> <!--hanya memisahkan atas bawahnya-->

        <!--External file, digunakan untuk global 1 situs-->
        <span class="sembunyi"> Hallo apa kabar?</span> <!--sama kyk div tp bagian blok besar-->
        <p>Hallo apa kabar?</p>
    </body>
</html>
