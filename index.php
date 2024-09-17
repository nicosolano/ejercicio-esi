<?php require 'partials/header.php' ?>

    <div class="container">
        <div class="col-5 m-auto">
            <h1 class="mt-5 mb-4 fs-3 text-center">Definiendo la ESI</h1>

            <div class="d-flex justify-content-center">
                <form action="definiciones.php" method="post">
                    <label for="valor">Seleccione una palabra:</label>

                    <select name="valor" id="valor">
                        <option value="respeto">Respeto</option>
                        <option value="igualdad">Igualdad</option>
                        <option value="empatía">Empatía</option>
                        <option value="solidaridad">Solidaridad</option>
                        <option value="acoso">Acoso</option>
                        <option value="inequidad">Inequidad</option>
                    </select>

                    <input type="submit" value="Ver definición">
                </form>
            </div>
        </div>
    </div>

<?php require 'partials/footer.php' ?>