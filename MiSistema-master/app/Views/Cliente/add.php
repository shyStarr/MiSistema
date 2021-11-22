<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <h2 class="mt-2">Registro de nuevo cliente</h2>
    <form action="?controller=Cliente&&action=guardar" method="POST">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="primer_nombre" class="col-md-4 col-form-label">Primer nombre:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="primer_nombre" name="primer_nombre" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="segundo_nombre" class="col-md-4 col-form-label">Segundo nombre:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="segundo_nombre" name="segundo_nombre" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="primer_apellido" class="col-md-4 col-form-label">Primer apellido:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="primer_apellido" name="primer_apellido" placeholder="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="segundo_apellido" class="col-md-4 col-form-label">Segundo apellido:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="segundo_apellido" name="segundo_apellido" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label for="identificacion" class="col-md-4 col-form-label">Cédula/Pasaporte:</label>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="identificacion" name="identificacion" placeholder="">
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</main>