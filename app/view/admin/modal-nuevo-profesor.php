<!--INICIA MODAL: CREACIÓN DE CUENTA DE PROFESOR-->
<div class="modal fade" id="nuevoProfesor" data-backdrop="static">
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
                        <form class="user needs-validation" id="frm-add-profesor" role="form" autocomplete="off" novalidate>
                           <div class="form-group row">
                              <div class="col-sm-3 mb-3 mb-sm-0">
                                 <select  class="form-control" id="prefijo" name="prefijo">
                                    <option>Lic.</option>
                                    <option>Mto.</option>
                                    <option>Dr.</option>
                                 </select>
                              </div>
                              <div class="col-sm-9 mb-3 mb-sm-0">
                                 <input type="text" id="nombre_profesor" name="nombre_profesor" class="form-control" placeholder="Nombre(s)" aria-label="Nombres" required>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                 <input type="text" id="app" name="app" class="form-control" placeholder="Apellido Paterno" aria-label="Primer Apellido">
                              </div>
                              <div class="col-sm-6 mb-3 mb-sm-0">
                                 <input type="text" id="apm" name="apm" class="form-control" placeholder="Apellido Materno" aria-label="Segundo Apellido">
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-12 mb-3 mb-sm-0">
                                 <select class="form-control" id="sexo" name="sexo">
                                    <option value="0">Hombre</option>
                                    <option value="1">Mujer</option>
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-12 mb-3 mb-sm-0">
                                 <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" aria-label="Telefono">
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-12 mb-3 mb-sm-0">
                                 <input type="text" id="correo" name="correo" class="form-control" placeholder="Correo Electrónico" aria-label="Correo">
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-12 mb-3 mb-sm-0">
                                 <input type="text" id="notrabajador" name="notrabajador" class="form-control" placeholder="Número de Trabajador" aria-label="No. Trabajador">
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-sm-12 mb-3 mb-sm-0">
                                 <select class="form-control" id="depto" name="depto">
                                    <!--AJAX-->
                                 </select>
                              </div>
                           </div>
                           <div class="form-group row">
                              <div class="col-12">
                                 <input type="submit" id="btnEnviar" name="btnEnviar" value="Crear Cuenta" class="btn btn-primary btn-user btn-block">
                              </div>
                           </div>
                        </form>
                        <!-- FINALIZA EL FORMULARIO-->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <div id="formError" class="alert alert-danger d-none" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span id="Mensaje">Error: </span>
         </div>
      </div>
   </div>
</div>
<!--FIN MODAL CREACIÓN DE CUENTA DE PROFESOR-->