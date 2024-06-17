<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yuntas Producciones</title>
    <!-- ESTILOS GLOBALES -->
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/venta-online.css">
    <link rel="stylesheet" href="css/ventana.css">

    <!--=============== REMIXICONS ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <?php include './includes/navbar.php' ?>

    <div class="head-container">
        <div class="head-title">
            <img src="assets/venta/head-reloj-digital.webp" alt="icon-relojes-digitales">
            <h1>RELOJES DIGITALES</h1>
        </div>
        <div class="productos">
            <div class="card card-active">
                <img src="assets/venta/card1-relojes-digitales.webp" alt="card-producto-1">
                <div class="card-hover">
                    <p>RELOJ DEPORTIVO</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/venta/card2-relojes-digitales.webp" alt="card-producto-2">
                <div class="card-hover">
                    <p>PANEL DEPORTIVO</p>
                </div>
            </div>
            <div class="card">
                <img src="assets/venta/card3-relojes-digitales.webp" alt="card-producto-3">
                <div class="card-hover">
                    <p>RELOJ 00:00</p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="main-container">
        <div class="container-producto-1">
            <div class="head-producto">
                <div class="producto-img">
                    <img src="assets/venta/card1-relojes-digitales.webp" alt="producto-img">
                    <div class="more-producto-img">
                        <img src="assets/venta/card1-relojes-digitales.webp" alt="producto-img">
                        <img src="assets/venta/card1-relojes-digitales.webp" alt="producto-img">
                        <img src="assets/venta/card1-relojes-digitales.webp" alt="producto-img">
                    </div>
                </div>
                <div class="producto-btn">
                    <div class="title">
                        <h2>RELOJ DEPORTIVO</h2>
                        <img src="assets/venta/like-producto.webp" alt="like-producto">
                    </div>
                    <div class="btn-cantidad">
                        <span>-</span>
                        <span>1</span>
                        <span>+</button>
                    </div>
                    <div class="btn-consultar">
                        <a href="#">CONSULTAR</a>
                    </div>
                </div>
            </div>
            <div class="table-producto">

            </div>
        </div>
    </div>

    <?php include './includes/button-wsp.php' ?>
    <?php include './includes/button-form.php' ?>
    <?php include './includes/footer.php' ?>
</body>

<style>
    body {
        background-color: #b5edf9;
    }

    .head-title {
        display: flex;
        align-items: center;
        background-color: #1f3060;
    }

    .head-title img {
        height: 150px;
    }

    .head-title h1 {
        color: white;
        padding: 0 80px;
        font-size: 96px;
        width: 100%;
        text-align: center;
    }

    .productos {
        padding: 45px 70px;
        display: flex;
        justify-content: center;
        gap: 100px;
    }

    .card {
        position: relative;
        height: 279px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        border: 2px solid #1f3060;
        border-radius: 20px;
        padding: 20px;
        background-color: white;
        box-shadow: 0 0 7px -3px #000;
        transition: all 0.5s ease;
        overflow: hidden;
    }

    .card img {
        width: 271px;
        height: 279px;
    }

    .card-hover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        backdrop-filter: blur(2px);
        background-color: #000c3c94;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: all 0.5s ease;
    }

    .card-hover p {
        color: white;
        font-size: 36px;
        font-weight: bold;
        text-align: center;
    }

    .card:hover .card-hover {
        opacity: 1;
    }

    .card-active .card-hover {
        opacity: 1;
    }

    .main-container {
        display: flex;
        padding: 50px 70px;
        justify-content: center;
    }

    .head-producto {
        display: flex;
        gap: 80px;
    }

    .producto-img {
        display: flex;
        flex-direction: column;
        width: 400px;
    }

    .producto-img img {
        width: 100%;
        height: 100%;
        border-radius: 20px;
        background-color: white;
        border: 2px solid #1f3060;
    }

    .more-producto-img {
        display: flex;
        gap: 15px;
        margin-top: 25px;
    }

    .more-producto-img img {
        width: 100%;
        height: 100%;
        border-radius: 0;
    }

    .producto-btn {
        display: flex;
        flex-direction: column;
        align-items: start;
        font-size: 23px;
    }

    .producto-btn .title {
        display: flex;
        gap: 20px;
        align-items: center;
    }

    .producto-btn .title h2 {
        padding: 10px 20px;
        background-color: #cffeed;
    }

    .producto-btn .title img {
        height: 45px;
    }

    .btn-cantidad,
    .btn-consultar {
        display: flex;
        gap: 90px;
        color: white;
        font-size: 28px;
        font-weight: bold;
        margin: 40px 0;
        padding: 10px 20px;
        border-radius: 50px;
        background-color: #253060;
    }

    .btn-cantidad span {
        cursor: default;
    }

    .btn-cantidad span:nth-child(1),
    .btn-cantidad span:nth-child(3) {
        cursor: pointer;
    }

    .btn-consultar {
        margin-top: 40px;
        padding: 18px 30px;
        border-radius: 25px;
        cursor: pointer;
    }
</style>

</html>