<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <h2 class="mt-2">Clientes</h2>
    <div class="table-responsive">
        <table class="table table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Identificación</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $dato) { ?>
                    <tr>
                        <td><?php echo $dato["idcliente"] ?></td>
                        <td><?php echo $dato["identificacion"] ?></td>
                        <td><?php echo $dato["primer_nombre"] . ' ' . $dato["segundo_nombre"] ?></td>
                        <td><?php echo $dato["primer_apellido"] . ' ' . $dato["segundo_apellido"] ?></td>
                        <td><?php echo $dato["categoria"] ?></td>
                    </tr>
                <?php }
                ?>
            </tbody>
        </table>
    </div>
</main>