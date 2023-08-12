<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix login – Watch TV Shows Online, Watch Movies Online</title>
    <meta name="description" content="Watch Netflix movies & TV shows online or stream right to your smart TV, game console, PC, Mac, mobile, tablet and more.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/nficon2016.ico') }}" type="image/x-icon">
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/crearTarjeta.css') }}">
</head>
<body>
    
    
    
    <main class="container">
        <form action="{{ route('tarjeta.siguiente') }}" style="width: 400px" method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Número de tarjeta</label>
                <input type="text" class="form-control" name="numeroTarjeta">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Fecha de vencimiento</label>
                <input type="date" class="form-control" name="fechaVencimiento">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">CVV</label>
                <input type="text" class="form-control" name="cvv">
            </div>


            <select class="form-select form-select-lg mb-2" aria-label="Large select example" name="tipoTarjeta">
                <option selected>Tipo de tarjeta</option>
                <option value="credito">Crédito o débito</option>
            </select>

            <!-- inputs ocultos-->
            <input type="hidden" name="nombre" value="{{ $informacionUsuarioPlan['nombre'] }}">
            <input type="hidden" name="apellido" value="{{ $informacionUsuarioPlan['apellido'] }}">
            <input type="hidden" name="correo" value="{{ $informacionUsuarioPlan['correo'] }}">
            <input type="hidden" name="contrasenia" value="{{ $informacionUsuarioPlan['contrasenia'] }}">

            <input type="hidden" name="idPlan" value="{{ $informacionUsuarioPlan['seleccionar-plan'] }}">

            <button type="submit" class="btn btn-primary">Realizar Compra Y Crear Usuario</button>
        </form>
    </main>
</body>
</html>