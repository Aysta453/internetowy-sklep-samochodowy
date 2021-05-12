<?php
$zmienna_pobrana=$_GET['id_produktu'];
$colors=$_POST['colors'];
$silnik=$_POST['engines'];
$peselek=$_POST['pesel'];
$kodzik=$_POST['kod_indeks'];
$kwotka=$_POST['kwota'];
$typ=$_POST['kwota2'];
global $kopiapesel;
global $kopiakod;
global $kopiazmiennej;
global $kopiakolor;
global $kopiasilnik;
$kopiapesel=$peselek;
$kopiakod=$kodzik;
$kopiazmiennej=$zmienna_pobrana;
$kopiakolor=$colors;
$kopiasilnik=$silnik;

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Aysta</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <style>
        html,
        body,
        header{
            min-height: 30%;
            height: 55%;

        }

    </style>
</head>

<body class="salon-lp">

<!-- Navigation & Intro -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark wow fadeIn" data-wow-delay="0.15s">
        <div class="container">
            <a class="navbar-brand font-weight-bold title" href="#">Podsumowanie</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="list-unstyled navbar-nav mr-auto smooth-scroll">

                    <li class="nav-item">
                        <a class="nav-link" href="#opis" data-offset="90">Informacje</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Marki
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../html/amery.html">Amerykańskie</a>
                            <a class="dropdown-item" href="../html/japon.html">Japońskie</a>
                            <a class="dropdown-item" href="../html/euro.html">Europejskie</a>
                        </div>
                    </li>

                </ul>
                <ul class="navbar-nav dropdown smooth-scroll">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/" target="_blank" class="nav-link"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php" data-offset="90">Strona Główna</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../php/rejestracja.php" data-offset="90">Rejestracja</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>
<!-- Navigation & Intro -->

<!-- Main content -->
<main>
    <!-- News card -->
<div class="container">
    <!-- Section: product details -->
    <section id="productDetails" class="pb-5">

        <!-- News card -->
        <div class="card mt-3 hoverable">

            <div class="row mt-5">

                <div class="col-lg-6 ">

                    <div class="row mx-2 mt-5">

                        <!-- Carousel Wrapper -->
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/american/shop/product<?php echo $zmienna_pobrana ?>_1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/american/shop/product<?php echo $zmienna_pobrana ?>_2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/american/shop/product<?php echo $zmienna_pobrana ?>_3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- Carousel Wrapper -->

                    </div>



                </div>

                <div class="col-lg-5 mr-3 text-center text-md-left mb-3">

                    <h4
                            class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">


                        <?php
                        require_once "../php/connect.php";
                        $conn=oci_connect($username,$password,$name);
                        if(!$conn){
                            echo "nie";
                        }else {
                            $sql = 'begin p3  (:bind1,:bind2,:bind3,:bind4,:bind5,:bind6,:bind7,:bind8); end;';
                            $stid = oci_parse($conn, $sql);
                            oci_bind_by_name($stid, ':bind1', $zmienna_pobrana, 1);
                            oci_bind_by_name($stid, ':bind2', $var1, 50);
                            oci_bind_by_name($stid, ':bind3', $var2, 50);
                            oci_bind_by_name($stid, ':bind4', $var3, 50);
                            oci_bind_by_name($stid, ':bind5', $var4, 50);
                            oci_bind_by_name($stid, ':bind6', $var5, 50);
                            oci_bind_by_name($stid, ':bind7', $var6, 50);
                            oci_bind_by_name($stid, ':bind8', $var7, 100);
                            oci_execute($stid);


                            echo "<h1><strong>Pojazd: </strong>" . $var1 . " " . $var2 . "</h1>";
                            echo "<h4 class=\"red-text\"><strong>Cena:</strong> " . $var5 . " zł</h4>";
                            echo "<h4><strong>Rok produkcji: </strong>" . $var4 . " r</h4>";
                            echo "<h4><strong>Przebieg: </strong>" . $var3 . " km</h4>";
                            echo "<h4><strong>Stan: </strong>" . $var6 . " </h4>";
                            echo "<h4><strong>Wybrany kolor : </strong>";
                            oci_free_statement($stid);


                            $sql1 = "Select nazwa from kolory where id_koloru=$colors";
                            $stid = oci_parse($conn, $sql1);
                            oci_execute($stid);
                            while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
                                echo $row['NAZWA'];

                            }
                            oci_free_statement($stid);


                            echo "</h4>";
                            echo "<h4><strong>Wybrany silnik </strong> ";
                            $sql1 = "Select nazwa from silniki where id_silnika=$colors";
                            $stid = oci_parse($conn, $sql1);
                            oci_execute($stid);
                            while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
                                echo $row['NAZWA'];

                            }
                            oci_free_statement($stid);


                            echo "</h4><div style=\"clear:both\"></div><div><strong><h4>";
                            $sql1 = "SELECT * FROM klient where pesel=$peselek and kod_indeks=$kodzik";
                            $stid = oci_parse($conn, $sql1);
                            @oci_execute($stid);
                            @$numrows = oci_fetch_all($stid, $res);
                            oci_free_statement($stid);
                            if ($numrows > 0) {
                                $sql10 = "SELECT * FROM klient where pesel=$peselek and kod_indeks=$kodzik";
                                $stid = oci_parse($conn, $sql10);
                                oci_execute($stid);
                            while (($row = @oci_fetch_array($stid, OCI_ASSOC)) != false) {
                                echo "<h4><strong>Imię: </strong> " . $row['IMIE'] . "</h4> ";
                                echo "<h4><strong>Nazwisko: </strong>  " . $row['NAZWISKO'] . "</h4> ";
                                echo "<h4><strong>Miasto: </strong>  " . $row['MIASTO'] . "</h4>  ";

                                echo "<h4><strong>E-mail: </strong> : " . $row['EMAIL'] . " </h4>";
                                echo "<h4><strong>Telefon: </strong>  " . $row['TELEFON'] . "</h4> ";
                                oci_free_statement($stid);
                                @oci_close();

                            }
                                echo "<h4><strong>Kwota wstępna: </strong>  " . $kwotka. " zł </h4> ";
                                echo "<h4><strong>Typ transakcji: </strong>  " . $typ. "</h4> ";
                            }else {
                            }
                            echo "</strong></h3></div>";

                        }




                        ?>

            </div>

        </div>

        </div>


    </section>


    <div class="container-fluid text-center mb-5">

    <div>
        <a href="sklep.php"><button  class="btn btn-primary btn-rounded ">

                <i class="" aria-hidden="true"></i>Powrót do sklepu</button>
        </a>


        <?php echo" <a href=\"product.php?id_produktu=".$zmienna_pobrana."\"><button class=\"btn btn-purple btn-rounded \">";?>


        <i class="" aria-hidden="true"></i>Wróć do produktu</button>

        </a>
        <?php
        require_once "../php/connect.php";

        $conn=oci_connect($username,$password,$name);
        if(!$conn){
            echo "nie";
        }else {
            $sql4 = "SELECT * FROM klient where pesel=$peselek and kod_indeks=$kodzik";
            $stid = oci_parse($conn, $sql4);
            @oci_execute($stid);
            @$numrows = oci_fetch_all($stid, $res);
            oci_free_statement($stid);


            if ($numrows>0) {

                if (($numrows >0)&(strlen($peselek)==11)&(strlen($kodzik)==7) ) {
                    if($numrows>0) {
                        echo"<form action=\"../php/zakup.php?var1=".$kopiakod."&var2=".$kopiapesel."&var3=".$kopiazmiennej."&var4=".$kopiakolor."&var5=".$kopiasilnik."&var6=".$kwotka."&var7=".$typ."\" method=\"post\">";
                        echo<<<END
<button type="submit" class="btn btn-secondary btn-rounded ">

                <i class="" aria-hidden="true"></i>Zatwierdź</button>

        </form>
END;

                    }
                }else{
                echo "<h2>Podałeś błędne dane.</h2> ";
            }
        }else if((strlen($peselek)==0)&(strlen($kodzik)==0)){
                echo "<h2>Nie wpisałeś poprawnie danych.</h2> ";
            }else{
                echo "<h2>Brak takiego użytkownika.</h2> ";
            }
        }


?>

        <?php ?>

    </div>

    </div>


    <!-- Fourth Container -->


</main>
<!-- Main content -->

<!-- Footer -->
<footer id="opis" class="page-footer footer-tiles text-center text-md-left pt-3">

    <!-- Footer Links -->
    <div class="container mt-1 mb-1">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-xl-3 col-lg-4 mt-2 mb-1 wow fadeIn" data-wow-delay="0.3s">
                <!-- About -->
                <h5 class="text-uppercase mb-4"><strong>O Firmie</strong></h5>

                <p>Firma założona od podstaw, przez młodego człowieka.</p>

                <p class="">Otwarta na nowe możliwości, sprowadzanie samochód i nie tylko.</p>


                <div class="footer-socials">

                    <a type="button" href="https://www.facebook.com/" target="_blank" class="btn-floating red"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-xl-3 ml-auto col-lg-4 mt-2 mb-1 col-md-7 wow fadeIn" data-wow-delay="0.3s">

                <!-- Info -->
                <h5 class="text-uppercase mb-4 text-center"><strong>Informacje</strong></h5>
                <p><i class="fas fa-home mr-3 text-center"></i> Rzeszow, ul.Rejtana 1, PL</p>
                <p><i class="fas fa-envelope mr-3 text-center" ></i> info@gmail.com</p>
                <p><i class="fas fa-phone mr-3 text-center"></i> +48 123 123 123</p>


            </div>
            <!-- Grid column -->

            <hr class="w-100 clearfix d-md-none">

            <!-- Grid column -->
            <div class="col-xl-3 ml-auto col-lg-4 mt-2 mb-1 col-md-6 wow fadeIn" data-wow-delay="0.3s">

                <!-- Title -->
                <h5 class="text-uppercase mb-4 text-right"><strong>Godziny Otwarcia</strong></h5>

                <!-- Opening hours table -->
                <table class="table footer-table text-center text-white">
                    <tbody>
                    <tr>
                        <td>Pn - Pt:</td>
                        <td>8:00 - 22:00</td>
                    </tr>
                    <tr>
                        <td>Sobota:</td>
                        <td>10:00 - 17:00</td>
                    </tr>
                    <tr>
                        <td>Niedziela:</td>
                        <td>Nieczynne</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center wow fadeIn" data-wow-delay="0.3s">
        <div class="container-fluid">
            © 2020 Copyright: Krzysztof Podkulski
        </div>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
<!--  SCRIPTS  -->
<!--  JQuery  -->
<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
<!--  Bootstrap tooltips  -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!--  Bootstrap core JavaScript  -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!--  MDB core JavaScript  -->
<script type="text/javascript" src="../js/mdb.min.js"></script>

<!-- Custom scripts -->
<script>
    // Animation init
    new WOW().init();

    // MDB Lightbox Init
    $(function () {
        $("#mdb-lightbox-ui").load("/mdb-addons/mdb-lightbox-ui.html");
    });

</script>

</body>

</html>
