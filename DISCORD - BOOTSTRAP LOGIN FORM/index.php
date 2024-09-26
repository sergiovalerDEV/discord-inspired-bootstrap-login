<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./img/discord-web-logo.png">
    <title>Discord - Login</title><!--EN PHP LAS COLUMNAS DEBEN SUMAR 12, MUY IMPORTANTE-->
</head>

<body style="font-family: 'Inter', sans-serif;">

    <div class="bg d-flex justify-content-center align-items-center" style="min-height: 100vh; width: auto; 
        background-image: url('./img/background-image.png'); background-size: cover; background-position: center;">
      
        <div class="container  w-sm-75" style="height: fit-content; min-width: 50vw; max-width: 80vw; border-radius: 10px; overflow: hidden; background-color: #313338; margin-top: 20px; margin-bottom: 20px;">
            <div class="row">
                <div class="col-12 col-lg-7 d-flex flex-column text-white p-2">
                    <div class="flex-grow-1 mb-4">
                        <h1 class="text-center fs-1 mt-4">Welcome back!</h1>
                        <p class="text-center fs-12" style="color:#ACB0B7;">We're so excited to see you again!</p>
                    </div>

                    <div class="p-2">
                        <form id="loginForm">
                            <!-- Campo para Nombre: Visible en todos los dispositivos -->
                            <div class="form-group mb-3">
                                <label for="name" class="fs-6" style="margin-left: 5%; color:#A3A7AE">NAME <span style="color: red;">*</span></label>
                                <input type="text" class="form-control py-1" id="name" required style="background-color: #1E1F22; color: white; border:none; width:90%; margin: 0 auto">
                            </div>
                            <!-- Campo para Contraseña: Visible en todos los dispositivos -->
                            <div class="form-group mb-3">
                                <label for="password" class="fs-6" style="margin-left: 5%; color:#A3A7AE ">PASSWORD <span style="color: red;">*</span></label>
                                <input type="password" class="form-control py-1" id="password" required style="background-color: #1E1F22; color: white; border:none; width:90%; margin: 0 auto">
                                <small id="emailHelp" class="form-text text-muted fs-6">
                                    <span style="color: #1180B9; cursor: pointer; margin-left: 5%;" 
                                        onmouseover="this.style.color='#1f97d4'" onmouseout="this.style.color='#1180B9'"> Forgot password?</span>
                                </small>
                            </div>
                            <!-- Campo para Email o Teléfono: Visible solo en pantallas medianas y grandes -->
                            <div class="form-group mb-3 d-none d-md-block">
                                <label for="emailOrPhone" class="fs-6" style="margin-left: 5%; color:#A3A7AE">EMAIL OR PHONE NUMBER <span style="color: red;">*</span></label>
                                <input type="text" class="form-control py-1" id="emailOrPhone" required style="background-color: #1E1F22; color: white; border:none; width:90%; margin: 0 auto">
                            </div>
                            <!-- Campo para Cumpleaños: Ocultado en dispositivos móviles -->
                            <div class="form-group mb-3 d-none d-md-block">
                                <label for="birthday" class="fs-6" style="margin-left: 5%; color:#A3A7AE ">BIRTHDAY <span style="color: red;">*</span></label>
                                <input type="date" class="form-control py-1" id="birthday" required style="background-color: #1E1F22; color: #A3A7AE; border:none; width:90%; margin: 0 auto">
                            </div>
                            <!-- Campo para Observaciones: Ocultado en dispositivos móviles -->
                            <div class="form-group mb-3 d-none d-md-block">
                                <label for="observations" class="fs-6" style="margin-left: 5%; color:#A3A7AE  ">OBSERVATIONS</label>
                                <textarea class="form-control py-1" id="observations" rows="3" style="background-color: #1E1F22; color: white; border:none; width:90%; margin: 0 auto"></textarea>
                            </div>
                            <div class="col text-center">
                                <button class="btn btn-default mb-3" style="width: 90%; background-color: #5865F2; color: white; cursor: pointer;" 
                                    onmouseover="this.style.backgroundColor='#4a5cb0'" 
                                    onmouseout="this.style.backgroundColor='#5865F2'">Log In
                                </button>
                            </div>

                            <small id="emailHelp" class="form-text text-muted fs-6">
                                <span style="color:#A3A7AE; margin-left: 5%;">Need an account?</span> 
                                <span style="color: #1180B9; cursor: pointer;" 
                                    onmouseover="this.style.color='#1f97d4'" onmouseout="this.style.color='#1180B9'"> Register</span>
                            </small>
                        </form>
                        <!--En móviles ocultamos los inputs mencionados-->
                    </div>
                </div>
                
                <!-- Contenedor de la derecha: Ocultado en dispositivos móviles -->
                <div class="col-12 col-lg-5 d-none d-md-flex flex-column text-white text-center mx-auto p-3" style="height: auto;">
                    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <div class="d-flex justify-content-center align-items-center rounded mb-4" style="width: 70%; padding: 8px; margin: 0 auto; justify-content: center;">
                                <img src="./img/qr-code.png" alt="QR Code" class="img-fluid br rounded" style="width: 100%;">
                            </div>
                            <h2 class="fs-5 mb-2" style="width:90%;">Log in with QR Code</h2>
                            <p style="font-size: 12.5px; width: 65%; margin: 0 auto; color:#A3A7AE;">Scan this with the Discord mobile app to log in instantly</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="./js/index.js"></script>
</body>
</html>
<!--EN PHP NO FUNCIONAN LOS ALERT-->