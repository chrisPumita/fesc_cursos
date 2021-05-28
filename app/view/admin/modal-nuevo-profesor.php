<!--INICIA MODAL: CREACIÓN DE CUENTA DE PROFESOR-->
<div class="container">
    <div class="modal" tabindex="-1" id="mod-new-prof">
        <div class="modal-dialog">
            <div class="modal-content">
                <section class="container bg-grey">
                    <div class= "modal-body">
                        <div class="container bg-white">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="button" class="close mt-3" data-dismiss='modal' aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                    <h3 class="font-weight-bold mb-1 mt-3">Crear cuenta de profesor</h3>
                                    <p>Al crear una cuenta, le llegará una notificación por correo electrónico al profesor.</p>
                                    <hr>
                                    <!--INICIA EL FORMULARIO-->
                                    <form class="user needs-validation" id="frm-add-alumno" role="form" autocomplete="off" novalidate>
                                        <div class="form-group row">
                                            <div class="col-sm-3 mb-3 mb-sm-0">
                                                <select class="form-control" id="abreviatura">
                                                    <option>Lic.</option>
                                                    <option>Mto.</option>
                                                    <option>Dr.</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-9 mb-3 mb-sm-0">
                                                <input type="text" class="form-control" placeholder="Nombre(s)" aria-label="Nombres">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control" placeholder="Apellido Paterno" aria-label="Primer Apellido">
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control" placeholder="Apellido Materno" aria-label="Segundo Apellido">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input type="text" class="form-control" placeholder="Número de Trabajador" aria-label="No. Trabajador">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input type="text" class="form-control" placeholder="Teléfono" aria-label="Telefono">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <input type="text" class="form-control" placeholder="Correo Electrónico" aria-label="Correo">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-12 mb-3 mb-sm-0">
                                                <select class="form-control" id="depto">
                                                    <option>Informática</option>
                                                    <option>Matemáticas</option>
                                                    <option>Cómputo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button class="btn btn-primary w-100 aling-self-center mb-3 mt-3">Crear Cuenta</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- FINALIZA EL FORMULARIO-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
<!--FIN MODAL CREACIÓN DE CUENTA DE PROFESOR-->