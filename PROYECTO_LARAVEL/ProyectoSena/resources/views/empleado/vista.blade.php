<!DOCTYPE html>
<html>
<head>
    <title>Bienvenido</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="header">
        <h1>Bienvenido {{ $datoEmp->Nombre }}</h1>
        <a href="{{ route('logout') }}">Cerrar sesión</a>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <div class="info-container">
                    <h1>Información personal</h1>
                    <p>Verifica tu información:</p>
                    <ul class="info-list">
                        <li><strong>Identificación:</strong> {{ $datoEmp->Identificacion }}</li>
                        <li><strong>Nombre:</strong> {{ $datoEmp->Nombre }}</li>
                        <li><strong>Apellido:</strong> {{ $datoEmp->Apellido }}</li>
                        <li><strong>Dependencia:</strong> {{ $datoEmp->Dependencia }}</li>
                        <li><strong>Cargo:</strong> {{ $datoEmp->Cargo }}</li>
                        <li><strong>Fecha de Ingreso:</strong> {{ $datoEmp->FechaIngreso }}</li>
                        <li><strong>Fecha de Terminacion:</strong> {{ $datoEmp->FechaTerminacion }}</li>
                        <li><strong>Tipo de contrato:</strong> {{ $datoEmp->TipoContrato }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-container">
                    <h1>Retroalimentación</h1>
                    <p>Conoce tu desempeño mensual:</p>
                    <ul class="info-list">
                        <li><strong>Puntuacion:</strong> {{ $calificar->Calificacion ?? 'No calificado'}}</li>
                        <li><strong>Retroalimentacion:</strong> {{ $calificar->Retroalimentacion ?? 'No calificado'}}</li>
                
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>




