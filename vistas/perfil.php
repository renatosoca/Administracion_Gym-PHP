<?php
include_once("../config/sesion.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>

    <!-- STYLES -->
    <link rel="stylesheet" href="../assets/css/Admin_General.css">

    <!-- STYLES -->
    <link rel="stylesheet" href="../assets/css/Admin_Perfil.css">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- AJAX -->
    <script src=".././assets/js/jquery-3.4.1.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>

    <!-- NOTIFY -->
    <link rel="stylesheet" href=".././assets/themes/default.css">
    <link rel="stylesheet" href=".././assets/css/alertify.css">
    <script src=".././assets/js/alertify.js"></script>

     <!-- Logo -->
     <link rel="icon" href="./src/img/icon.png">


</head>

<body class="body">

    <?php include './Templates-admin/Nav.php' ?>

    <div class="main__container">
        <h1 class="main__title">Mi Perfil</h1>

        <div class="profile">
            <div class="profile__details">
                <div class="profile__view">
                    <div class="profile__img">
                        <img src="#" alt="">
                    </div>

                    <div class="profile__content">
                        <div class="profile__plan">
                            <h4>Membresìa:</h4>
                            <small>Premium</small>
                        </div>

                        <div class="profile__plan">
                            <h4>Dias Restantes:</h4>
                            <small>27 Dias</small>
                        </div>

                        <button class="btn btn__center">Mejorar Plan</button>
                    </div>
                </div>

                <div class="profile__notification">
                    <div class="notification__btn" id="table-body">
                        <span id="<?php echo $_SESSION["id"] ?>"class="btn btn__rigth bottom-edit">Modificar Cuenta</span>
                    </div>
                    
                    <div class="notification__container">
                        <h3 class="text__title">Notificaciones</h3>
                        <div class="notification__content">
                            <p>Recuerda activar la notificacion de tus rutinas diarias</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="profile__routine">
                <h3 class="profile__routines">Rutinas Asignada</h3>
                
                <div class="profile__items">
                    <div class="items__container">
                        <h4>Lunes</h4>
                        <div class="items__content">
                            <p>Sentadillas con barra:4 series x 8/10 reps. Prensa en máquina:4 series x 8/10 reps. Peso muerto:4 series x 8/10 reps.Zancada con mancuernas: 4 series x 8/10 reps.</p>
                        </div>
                    </div>

                    <div class="items__container">
                        <h4>Martes</h4>
                        <div class="items__content">
                            <p>Press de banca con barra en banco plano: 4 series x 8/10 reps. Press banco inclinado con mancuernas: 4 series x 8/10 reps. Aperturas banco plano/inclinado (alternar semanalmente): 4 series x 8/10 reps.</p>
                        </div>
                    </div>

                    <div class="items__container">
                        <h4>Miercoles</h4>
                        <div class="items__content">
                            <p>Dominadas: 4 series x 8/10 reps. Remo sentado: 4 series x 8/10 reps. Jalón al pecho polea alta: 4 series x 8/10 reps.</p>
                        </div>
                    </div>

                    <div class="items__container">
                        <h4>Jueves</h4>
                        <div class="items__content">
                            <p>Elevaciones de piernas: 4 series x 20 reps. Crunches: 4 series x 20 reps. Oblíquos con polea: 4 series x 20 reps.</p>
                        </div>
                    </div>

                    <div class="items__container">
                        <h4>Viernes</h4>
                        <div class="items__content">
                            <p>Press hombro sentado con barra: 4 series x 8/10 reps. Elevaciones laterales con mancuernas: 4 series x 8/10 reps. Press sentado con mancuernas: 4 series x 8/10 reps.</p>
                        </div>
                    </div>

                    <div class="items__container">
                        <h4>Sabado</h4>
                        <div class="items__content">
                            <p>Curl bíceps con barra: 4 series x 8/10 reps. Francés de tríceps barra Z: 4 series x 8/10 reps. Bíceps (curl) banco inclinado: 4 series x 8/10 reps.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="modal" id="editarModalPerfil">
    </section>


    <script src="./../assets/js/Index_Admin.js"></script>
    <script src="js/editarPerfil.js"></script>
</body>

</html>