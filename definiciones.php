<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $valor = $_POST['valor'];
        $mensajes = [
            'respeto' => [
                'mensaje' => 'Como en la vida, dentro del ambiente laboral es importante reconocer el valor de otra persona y tratarlos como un igual.',
                'clase' => 'success'
            ],
            'igualdad' => [
                'mensaje' => 'Para nosotros la igualdad tiene que ver con tener los mismos tratos sin importar credo, orientación sexual o género.',
                'clase' => 'success'
            ],
            'empatía' => [
                'mensaje' => 'Ponerse en el lugar del otro antes de actuar y pensar en cómo se sentiría con tus acciones.',
                'clase' => 'success'
            ],
            'solidaridad' => [
                'mensaje' => 'Al identificar que un compañero o compañera está en desigualdad de condiciones o de trato es importante apoyarlo para superar la situación.',
                'clase' => 'success'
            ],
            'acoso' => [
                'mensaje' => 'Cuando un compañero o superior establece un ambiente de maltrato continuo tenemos que identificar el problema y hablarlo, o en caso de ser necesario buscar ayuda.',
                'clase' => 'danger'
            ],
            'inequidad' => [
                'mensaje' => 'Existe mucha inequidad en el mundo laboral, especialmente en los salarios. Un buen objetivo es buscar la equidad salarial para evitar la desigualdad y reconocer el valor de las personas por su trabajo y no su género.',
                'clase' => 'danger'
            ]
        ];
    };

    if(array_key_exists($valor, $mensajes)){
        $mensaje = $mensajes[$valor]['mensaje'];
        $clase = $mensajes[$valor]['clase'];
    }else{
        $mensaje = 'Por favor seleccione una palabra.';
        $clase = 'dark';
    };

?>

<?php require 'partials/header.php' ?>

    <div class="container mt-5">
        <div class="col-5 mx-auto">
            <h1 class="mb-4 fs-3 text-center">Definición de: <span class="text-<?= $clase ?> text-uppercase"><?= $valor ?></span></h1>

            <div class="alert alert-<?= $clase ?>" role="alert">
                <?= $mensaje ?>
            </div>

            <div class="d-flex justify-content-center">
                <a href="index.php" class="btn btn-<?= $clase ?> rounded-pill">Volver</a>
            </div>
        </div>
    </div>

<?php require 'partials/footer.php' ?>