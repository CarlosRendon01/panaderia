<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panadería El Triunfo</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #180f01 0%, #3a1e03 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }

        .background-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('https://i.ibb.co/W5fcpn4/9696253.jpg');
            background-repeat: repeat;
            opacity: 0.1;
            z-index: -1;
        }

        .container {
            max-width: 900px;
            padding: 60px;
            position: relative;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 30px;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            overflow: hidden;
        }
        .left-section {
            flex: 1;
            padding-right: 40px;
            text-align: center;
        }

        .right-section {
            flex: 1;
            display: flex;
            justify-content: flex-end;
            position: relative;
        }

        .bread-pattern {
            position: absolute;
            top: -80px;
            left: -80px;
            width: 200px;
            height: 200px;
            background-image: url('https://i.ibb.co/6nG5Y2Q/554doughnut1-100951.png');
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.7;
            animation: rotate 10s infinite linear;
        }

        .bread-pattern-2 {
            position: absolute;
            bottom: -80px;
            right: -80px;
            width: 250px;
            height: 250px;
            background-image: url('https://i.ibb.co/nmrwwZZ/pngegg.png');
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.7;
            transform: rotate(30deg);
            animation: rotate 15s infinite linear reverse;
        }

        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .baker-image {
            max-width: 100%;
            height: auto;
            animation: moveHorizontal 5s infinite alternate;
        }

        @keyframes moveHorizontal {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(20px);
            }
        }

        .buttons {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .buttons button {
            padding: 12px 30px;
            margin: 10px;
            font-size: 18px;
            border: none;
            background-color: #FF9800;
            color: white;
            cursor: pointer;
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .buttons button::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }

        .buttons button:hover::before {
            left: 100%;
        }

        .buttons button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }

        /* Added styles for login form */
        .login-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            z-index: 100;
            backdrop-filter: blur(5px); /* Blur the background only */
        }

        .login-form input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
        }

        .login-form button {
            width: 100%;
            padding: 12px;
            margin-top: 10px;
            background-color: #FF9800;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-form button:hover {
            background-color: #FFA726;
        }
       
        .login-container.focused {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
        }
        .blurred-background::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backdrop-filter: blur(5px);
            z-index: 99;
            display: none;
        }

        .blurred-background.visible::before {
            display: block;
        }

        .login-container.focused {
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
            z-index: 100;
        }
        .register-container {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    z-index: 100;
    backdrop-filter: blur(5px);
}

.register-form input {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}

.register-form button {
    width: 100%;
    padding: 12px;
    margin-top: 10px;
    background-color: #FF9800;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.register-form button:hover {
    background-color: #FFA726;
}

.register-container.focused {
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
}.login-container, .register-container {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            z-index: 100;
            backdrop-filter: blur(5px);
            max-width: 500px; /* Aumenta el ancho máximo */
            width: 90%;
        }

        .login-form, .register-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .login-form input, .register-form input {
            margin: 10px 0;
            width: 100%; /* Establece el ancho al 100% del formulario */
        }

        .login-form button, .register-form button {
            margin-top: 20px;
            width: 100%; /* Establece el ancho al 100% del formulario */
        }

        
        .login-form {
    display: flex; /* Usa flexbox para alinear los elementos */
    flex-direction: column; /* Alinea los elementos en columna */
    align-items: flex-start; /* Alinea los elementos a la izquierda */
}

.login-form input {
    width: calc(100% - 20px); /* Resta el margen vertical (10px arriba y 10px abajo) */
    padding: 10px;
    margin: 10px 0; /* Ajusta el margen vertical de los campos */
    border-radius: 5px;
    border: 1px solid #ccc;
    outline: none;
}

<!-- Dentro de la etiqueta <style> -->
.login-form input, .register-form input, .login-form button, .register-form button {
    width: 100%; /* Establece el ancho al 100% para ocupar todo el contenedor */
    margin: 10px 0; /* Ajusta el margen vertical de los campos y botones */
}

.login-form {
    display: flex; /* Usa flexbox para alinear los elementos */
    flex-direction: column; /* Alinea los elementos en columna */
    align-items: flex-start; /* Alinea los elementos a la izquierda */
}

.login-form button {
    margin-top: 10px; /* Ajusta el margen superior de los botones */
}


    </style>
</head>
<body>
  <div class="background-pattern"></div>
    <div class="container blurred-background">
        <div class="bread-pattern"></div>
        <div class="bread-pattern-2"></div>
        <div class="left-section">
            <h1 style="font-size: 3rem; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">PANADERÍA EL TRIUNFO</h1>
            <p style="font-size: 1.2rem; color: #666;">Bienvenido al sistema de la Panadería El Triunfo </p>
            <div class="buttons">
                <button onclick="showLoginForm()">Login</button>
                <button onclick="showRegisterForm()">Registrarse</button>
            </div>
        </div>
        <div class="right-section">
            <img class="baker-image" src="https://i.ibb.co/D5sLS9N/baker-817282.png" alt="Panadero">
        </div>
    </div>
    <div class="login-container" id="loginContainer" style="display: none;">
      <h2>Iniciar Sesión</h2>
      <form class="login-form" method="POST" action="{{ route('login') }}">
          @csrf
          @if ($errors->any())
          <div class="alert alert-danger p-0">
              <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif
          <div class="form-group">
              <label for="email">Correo electrónico</label>
              <input type="email" placeholder="Ingresa tu correo electrónico" id="email" name="email" value="{{ (Cookie::get('email') !== null) ? Cookie::get('email') : old('email') }}" required autofocus>
          </div>
          <div class="form-group">
              <label for="password" class="control-label">Contraseña</label>
              <input type="password" placeholder="Ingresa tu contraseña" id="password" name="password" value="{{ (Cookie::get('password') !== null) ? Cookie::get('password') : null }}" required>
              <div class="forgot-password">
                  <a href="{{ route('password.request') }}" class="text-small">¿Olvidaste tu contraseña?</a>
              </div>
          </div>
          <button type="submit">Iniciar Sesión</button>
          <button type="button" onclick="hideLoginForm()">Cancelar</button>
      </form>
  </div>
  <div class="register-container" id="registerContainer" style="display: none;">
    <h2>Registrarse</h2>
    <form class="register-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" placeholder="Nombre completo" name="name" value="{{ old('name') }}" required autofocus>
        <div class="invalid-feedback">
            {{ $errors->first('name') }}
        </div>
        <input type="email" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required>
        <div class="invalid-feedback">
            {{ $errors->first('email') }}
        </div>
        <input type="password" placeholder="Contraseña" name="password" required>
        <div class="invalid-feedback">
            {{ $errors->first('password') }}
        </div>
        <input type="password" placeholder="Confirmar contraseña" name="password_confirmation" required>
        <div class="invalid-feedback">
            {{ $errors->first('password_confirmation') }}
        </div>
        <button type="submit">Registrarse</button>
        <button type="button" onclick="hideRegisterForm()">Cancelar</button>
    </form>
</div>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    // Revisa si hay errores y muestra la ventana de inicio de sesión
    if (document.querySelectorAll('.alert-danger').length > 0) {
        showLoginForm();
    }
});
        function showLoginForm() {
            document.getElementById("loginContainer").style.display = "block";
            document.querySelector(".blurred-background").classList.add("visible");
            document.getElementById("loginContainer").classList.add("focused");
        }
    function showRegisterForm() {
    document.getElementById("registerContainer").style.display = "block";
    document.querySelector(".blurred-background").classList.add("visible");
    document.getElementById("registerContainer").classList.add("focused");
}
function hideLoginForm() {
            document.getElementById("loginContainer").style.display = "none";
            document.querySelector(".blurred-background").classList.remove("visible");
            document.getElementById("loginContainer").classList.remove("focused");
            scrollToMainView();
        }
        function hideRegisterForm() {
            document.getElementById("registerContainer").style.display = "none";
            document.querySelector(".blurred-background").classList.remove("visible");
            document.getElementById("registerContainer").classList.remove("focused");
            scrollToMainView();
        }
        function scrollToMainView() {
            document.getElementById("mainView").scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>