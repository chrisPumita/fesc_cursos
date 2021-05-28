<!--INICIA SECCION DEL MODAL DE ASIGNACIÓN A NUEVO ADMIN-->
<section class="container">
    <div class="modal fade" id="mod-new-admin" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <h2>Asignación de un nuevo Administrador</h2>
                    <p>Al asignar a un nuevo administrador, a este le llegará una notificación por correo electrónico con su clave de confirmación.</p>
                    <hr>
                    <!--INICIA FORMULARIO-->
                    <form class="user needs-validation" id="frm-add-admin" role="form" autocomplete="off" novalidate>
                        <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label class="col-form-label font-weight-bold">Seleccione a un profesor: </label>
                            </div>
                            <div class="col-sm-8 mb-3 mb-sm-0">
                                <select class="form-control" name="profesor"  id="profesores">
                                    <option value="1">Juan Pérez Sánchez</option>
                                    <option value="2">Roberto Gomez Ramírez</option>
                                    <option value="3">Maricela Lara Martínez</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label class="col-form-label font-weight-bold">Datos del profesor: </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label class="col-form-label">Número de Trabajador:</label>  
                            </div>
                            <div class="col-sm-8 mb-3 mb-sm-0">
                                <label class="col-form-label"></label> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <label class="col-form-label">Correo Electrónico:</label>  
                            </div>
                            <div class="col-sm-8 mb-3 mb-sm-0">
                                <label class="col-form-label"></label> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <label class="col-form-label">Departamento:</label>  
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <label class="col-form-label"></label> 
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <label class="col-form-label">Fecha de Registro:</label>  
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <label class="col-form-label"></label> 
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label class="col-form-label font-weight-bold">Ingrese y seleccione los siguientes datos, al finalizar dé clic en el botón "Asignar":</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <label class="col-form-label">Cargo:</label>  
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control" placeholder="" aria-label="Cargo">
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <label class="col-form-label">Nivel de Permisos:</label>  
                            </div>
                            <div class="col-sm-3  mb-3 mb-sm-0">
                                <select class="form-control" name="permisos"  id="niv_permisos">
                                    <option value="1">Bajo</option>
                                    <option value="2">Medio</option>
                                    <option value="3">Alto</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-8"></div>
                            <div class="col-sm-4 text-align-right">
                                <a href="#" class="btn btn-primary w-100" data-toggle="modal" data-target="#mod-verif-admin">Asignar</a>
                            </div>
                        </div>
                    </form>
                    <!--FINALIZA FORMULARIO-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--FINALIZA SECCIÓN DEL MODAL DE ASIGNACIÓN A NUEVO ADMIN-->