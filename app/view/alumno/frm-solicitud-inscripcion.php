<style>
    .tags-container {
        display: flex;
        flex-flow: row wrap;
        margin-bottom: 0px;
        width: 100%;
        height: auto;
        padding: 2px 5px;
        font-size: 12px;
        line-height: 0;
        background-color: transparent;
        border: 1px solid #ccc;
        border-radius: 1px;
        overflow: hidden;
        word-wrap: break-word;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    input.tag-input {
        flex: 3;
        border: 0;
        outline: 0;
    }

    .tag {
        position: relative;
        margin: 2px 7px 3px 0;
        padding: 1px 20px 1px 7px;
        font-size: inherit;
        font-weight: 400;
        text-align: center;
        color: #fff;
        background-color: #317caf;
        border-radius: 25px;
        transition: background-color 0.3s ease;
        cursor: default;
        display: flex;
        width: auto;
        height: 35px;
    }

    .tag:first-child {
        margin-left: 0;
    }

    .tag--marked {
        background-color: #6fadd7;
    }

    .tag--exists {
        background-color: #edb5a1;
        -webkit-animation: shake 1s linear;
        animation: shake 1s linear;
    }

    .tag__name {
        margin: auto;
        padding: inherit;
        padding-top: 3px;
    }

    .tag__remove {
        position: absolute;
        right: 0;
        bottom: 0;
        width: 20px;
        height: 100%;
        padding: 0 5px;
        font-size: 16px;
        font-weight: 400;
        transition: opacity 0.3s ease;
        opacity: 0.5;
        cursor: pointer;
        border: 0;
        background-color: transparent;
        color: #fff;
        line-height: 1;
    }

    .tag__remove:hover {
        opacity: 1;
    }

    .tag__remove:focus {
        outline: 5px auto #fff;
    }

    .form-check {
        padding-left: 0 !important;
    }

    @-webkit-keyframes shake {

        0%,
        100% {
            transform: translate3d(0, 0, 0);
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            transform: translate3d(-5px, 0, 0);
        }

        20%,
        40%,
        60%,
        80% {
            transform: translate3d(5px, 0, 0);
        }
    }

    @keyframes shake {

        0%,
        100% {
            transform: translate3d(0, 0, 0);
        }

        10%,
        30%,
        50%,
        70%,
        90% {
            transform: translate3d(-5px, 0, 0);
        }

        20%,
        40%,
        60%,
        80% {
            transform: translate3d(5px, 0, 0);
        }
    }
</style>

<div class="row d-flex justify-content-center" id="inscripcion">
    <div class="col-12">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="card card00 m-2 border-0">
                        <div class="row text-center justify-content-center px-3">
                            <p class="prev text-primary"><span class="fa fa-long-arrow-left">Anterior</span></p id="back">
                            <h2 class="mt-4"><strong>Detalles de la Solicitud</strong></h2>
                        </div>
                        <div class="d-flex flex-md-row px-3 mt-4 flex-column-reverse">
                            <div class="col-md-4">
                                <div class="card1">
                                    <ul id="progressbar" class="text-center">
                                        <li class="active step0"></li>
                                        <li class="step0"></li>
                                        <li class="step0"></li>
                                    </ul>
                                    <h6 class="mb-5">Datos Personales</h6>
                                    <h6 class="mb-5">Resumen</h6>
                                    <h6 class="mb-5">Envíar Solicitud</h6>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <!-- Inicia primer card-->
                                <div class="card2 first-screen show ml-2">
                                    <div class="px-2 mt-12">
                                        <div class="row py-1 mt-1 mb-1">
                                            <div class="col-md-12">
                                                <label for="nombre">Nombre:</label>
                                            </div>
                                        </div>
                                        <div class="row py-1 mt-1 mb-1">
                                            <div class="col-md-4">
                                                <input type="text" id="nombre" class="form-control" required placeholder="Nombre(s)">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="primer_ap" class="form-control" required placeholder="Primer Apellido">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" id="segundo_ap" class="form-control" required placeholder="Segundo Apellido">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-2 mt-12">
                                        <div class="row py-1 mt-1 mb-1">
                                            <div class="col-md-12">
                                                <label for="municipio">Municipio:</label>
                                            </div>
                                        </div>
                                        <div class="row py-1 mt-1 mb-1">
                                            <div class="col-md-4">
                                                <select name="municipio" id="municipio" class="form-control">
                                                    <option>Cuautitlán</option>
                                                    <option>Teoloyucan</option>
                                                    <option>Coyotepec</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-2 mt-12">
                                        <div class="row py-1 mt-1 mb-1 ">
                                            <div class="col-md-4">
                                                <label for="universidad">Universidad:</label>
                                            </div>
                                            <div class="col-md-4">
                                                <label for="carrera">Carrera:</label>
                                            </div>
                                        </div>
                                        <div class="row py-1 mt-1 mb-1">
                                            <div class="col-md-4">
                                                <select name="universidad" id="universidad" class="form-control">
                                                    <option>UNAM</option>
                                                    <option>IPN</option>
                                                    <option>UAM</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select name="carrera" id="carrera" class="form-control">
                                                    <option>Administración</option>
                                                    <option>Contaduría</option>
                                                    <option>Informática</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-2 mt-12">
                                        <div class="row py-1 mt-1 mb-1">
                                            <div class="col-md-12">
                                                <label for="matricula">Matrícula:</label>
                                            </div>
                                        </div>
                                        <div class="row py-1 mt-1 mb-1">
                                            <div class="col-md-4">
                                                <input type="text" id="matricula" class="form-control" required placeholder="Matrícula">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-2 mt-12">
                                        <div class="row py-1 mt-1 mb-1">
                                            <div class="col-md-12">
                                                <label for="contacto">Datos de Contacto:</label>
                                            </div>
                                        </div>
                                        <div class="row py-1 mt-1 mb-1">
                                            <div class="col-md-4">
                                                <input type="text" id="telefono" class="form-control" required placeholder="Teléfono">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="email" id="correo" class="form-control" required placeholder="Correo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-3 mt-1 mb-5 align-self-end ml-auto">
                                        <div class="next-button text-center mt-1 ml-2"> Siguiente </div>
                                    </div>
                                </div>
                                <!--Inicia card 2-->
                                <div class="card2 ml-2">
                                    <!--Panel 2-->
                                    <div class="px-2 mt-12">
                                        <div class="mt-1 mb-1">
                                            <div class="px-2 mt-12">
                                                <div class="mt-1 mb-1">
                                                    <h4><strong>Resumen</strong></h4>
                                                    <p>Estás haciendo la solicitud del curso Excel para Contadores.
                                                        Revisa muy bien los documentos solicitados.
                                                    </p>
                                                    <p>   
                                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima ex earum harum cum provident.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="px-2 mt-12">
                                                <div class="mt-1 mb-1">
                                                    <h4><strong>Documentos Requeridos</strong></h4>
                                                    <div class="alert alert-dark"><img src="./assets/img/icons/checked1.svg" alt="" width="30px">Credencial Escolar</div>
                                                    <div class="alert alert-dark"><img src="./assets/img/icons/checked1.svg" alt="" width="30px">Baucher de Pago</div>
                                                    <div class="alert alert-dark"><img src="./assets/img/icons/checked1.svg" alt="" width="30px">Formato de Inscripción</div>
                                                </div>
                                            </div>
                                            <div class="px-2 mt-12">
                                                <div class="mt-1 mb-1">
                                                    <h4><strong>Costo</strong></h4>
                                                    <p>$1,000.00 MXN</p>
                                                    <p class="text-muted"> -$700.00 MXN <small>Descuento a Comunidad FESC</small></p>
                                                    <hr align="left" width="50%">
                                                    <p> $300.00 MXN <small>Total a pagar*</small></p>
                                                </div>
                                            </div>
                                            <div class="px-2 mt-12">
                                                <div class="mt-1 mb-1">
                                                    <p><img src="./assets/img/ok.svg" alt="" width="20px"> 70% de Descuento a la Comunidad FESC</p>
                                                    <p><img src="./assets/img/icons/help2.svg" alt="" width="35px"> Se debe confirmar tu cuenta/procedencia/para obtener el descuento</p>
                                                </div>
                                            </div>
                                            <div class="px-2 mt-12">
                                                <div class="row py-1 mt-1 mb-1">
                                                    <div class="col-md-1">
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input ml-0" id="exampleCheck1">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="terminos">He leído y acepto los términos y condiciones de la inscripción</label>
                                                            
                                                        </div>
                                                        <a href="#"><span class="text-secondary">Términos y condiciones de la inscripción</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-3 mt-1 mb-5 align-self-end ml-auto">
                                        <div class="next-button text-center mt-1 ml-2">Inscribirme</div>
                                    </div>
                                </div>
                                <div class="card2 ml-2">
                                    <div class="px-2 mt-12">
                                        <div class="row px-3 mt-2 mb-0 text-center">
                                            <h3 class="col-12 text-primary"><strong>¡Bien hecho!</strong></h3>
                                        </div>
                                        <div class="row px-3 mt-0 mb-4 text-center">
                                            <div class="col-md-12">
                                                <p>Hemos enviado la solicitud para que sea revisada</p>
                                            </div>
                                        </div>
                                        <div class="row py-1 mt-1 mb-1">
                                            <div class="col-md-12">
                                                <p class="font-weight-bold">Recuerda llenar los datos solicitados y efectúar el pago requerido, además de subir tu documentación solicitada para completar tu inscripción.</p>
                                            </div>
                                        </div>
                                        <div class="row py-1 mt-1 mb-1">
                                            <div class="col-md-12">
                                                <p><span class="font-weight-bold">Nota: </span>Cuando tu inscripción haya sido confirmada, se te enviará un correo electrónico y también podrás consultarlo en este sitio, en el apartado "Mis Cursos".</p>
                                            </div>
                                        </div>
                                        <div class="row px-3 mt-2 mb-4 text-center">
                                            <div class="col-md-6">
                                                <a href="#"><span class="text-secondary">Ficha de Inscripción</span>
                                                    <img src="./assets/img/icons/download2.svg" alt="" width="170px">
                                                </a>
                                            </div>
                                            <div class="col-md-6">
                                                <a href="#"><span class="text-secondary">Ficha de Pago</span>
                                                    <img src="./assets/img/icons/download2.svg" alt="" width="170px">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row py-3 mt-1 mb-5 align-self-end ml-auto">
                                        <a href="./home"><div class="btn btn-primary text-center mt-1 ml-2">Volver a mis cursos</div></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script>
    $(document).on("click", ".custom-file-input", function() {
        var file = $(this).parents().find(".file");
        file.trigger("click");
    });
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#preview").val(fileName);

        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    // Add the following code if you want the name of the file appear on select
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>


<script>
    $(document).ready(function() {

        var current_fs, next_fs, previous_fs;

        // No BACK button on first screen
        if ($(".show").hasClass("first-screen")) {
            $(".prev").css({
                'display': 'none'
            });
        }

        // Next button
        $(".next-button").click(function() {

            current_fs = $(this).parent().parent();
            next_fs = $(this).parent().parent().next();

            $(".prev").css({
                'display': 'block'
            });

            $(current_fs).removeClass("show");
            $(next_fs).addClass("show");

            $("#progressbar li").eq($(".card2").index(next_fs)).addClass("active");

            current_fs.animate({}, {
                step: function() {

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });

                    next_fs.css({
                        'display': 'block'
                    });
                }
            });
        });

        // Previous button
        $(".prev").click(function() {

            current_fs = $(".show");
            previous_fs = $(".show").prev();

            $(current_fs).removeClass("show");
            $(previous_fs).addClass("show");

            $(".prev").css({
                'display': 'block'
            });

            if ($(".show").hasClass("first-screen")) {
                $(".prev").css({
                    'display': 'none'
                });
            }

            $("#progressbar li").eq($(".card2").index(current_fs)).removeClass("active");

            current_fs.animate({}, {
                step: function() {

                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });

                    previous_fs.css({
                        'display': 'block'
                    });
                }
            });
        });

    });
</script>

<script>
    (function() {

        'use strict';

        // Helpers
        function $$(selectors, context) {
            return (typeof selectors === 'string') ? (context || document).querySelectorAll(selectors) : [selectors];
        }

        function $(selector, context) {
            return (typeof selector === 'string') ? (context || document).querySelector(selector) : selector;
        }

        function create(tag, attr) {
            var element = document.createElement(tag);
            if (attr) {
                for (var name in attr) {
                    if (element[name] !== undefined) {
                        element[name] = attr[name];
                    }
                }
            }
            return element;
        }

        function whichTransitionEnd() {
            var root = document.documentElement;
            var transitions = {
                'transition': 'transitionend',
                'WebkitTransition': 'webkitTransitionEnd',
                'MozTransition': 'mozTransitionEnd',
                'OTransition': 'oTransitionEnd otransitionend'
            };

            for (var t in transitions) {
                if (root.style[t] !== undefined) {
                    return transitions[t];
                }
            }
            return false;
        }

        function oneListener(el, type, fn, capture) {
            capture = capture || false;
            el.addEventListener(type, function handler(e) {
                fn.call(this, e);
                el.removeEventListener(e.type, handler, capture)
            }, capture);
        }

        function hasClass(cls, el) {
            return new RegExp('(^|\\s+)' + cls + '(\\s+|$)').test(el.className);
        }

        function addClass(cls, el) {
            if (!hasClass(cls, el))
                return el.className += (el.className === '') ? cls : ' ' + cls;
        }

        function removeClass(cls, el) {
            el.className = el.className.replace(new RegExp('(^|\\s+)' + cls + '(\\s+|$)'), '');
        }

        function toggleClass(cls, el) {
            (!hasClass(cls, el)) ? addClass(cls, el): removeClass(cls, el);
        }

        function Tags(tag) {

            var el = $(tag);

            if (el.instance) return;
            el.instance = this;

            var type = el.type;
            var transitionEnd = whichTransitionEnd();

            var tagsArray = [];
            var KEYS = {
                ENTER: 13,
                COMMA: 188,
                BACK: 8
            };
            var isPressed = false;

            var timer;
            var wrap;
            var field;

            function init() {

                // create and add wrapper
                wrap = create('div', {
                    'className': 'tags-container',
                });
                field = create('input', {
                    'type': 'text',
                    'className': 'tag-input',
                    'placeholder': el.placeholder || ''
                });

                wrap.appendChild(field);

                if (el.value.trim() !== '') {
                    hasTags();
                }

                el.type = 'hidden';
                el.parentNode.insertBefore(wrap, el.nextSibling);

                wrap.addEventListener('click', btnRemove, false);
                wrap.addEventListener('keydown', keyHandler, false);
                wrap.addEventListener('keyup', backHandler, false);
            }

            function hasTags() {
                var arr = el.value.trim().split(',');
                arr.forEach(function(item) {
                    item = item.trim();
                    if (~tagsArray.indexOf(item)) {
                        return;
                    }
                    var tag = createTag(item);
                    tagsArray.push(item);
                    wrap.insertBefore(tag, field);
                });
            }

            function createTag(name) {
                var tag = create('div', {
                    'className': 'tag',
                    'innerHTML': '<span class="tag__name">' + name + '</span>' +
                        '<button class="tag__remove">&times;</button>'
                });
                return tag;
            }

            function btnRemove(e) {
                e.preventDefault();
                if (e.target.className === 'tag__remove') {
                    var tag = e.target.parentNode;
                    var name = $('.tag__name', tag);
                    wrap.removeChild(tag);
                    tagsArray.splice(tagsArray.indexOf(name.textContent), 1);
                    el.value = tagsArray.join(',')
                }
                field.focus();
            }

            function keyHandler(e) {

                if (e.target.tagName === 'INPUT' && e.target.className === 'tag-input') {

                    var target = e.target;
                    var code = e.which || e.keyCode;

                    if (field.previousSibling && code !== KEYS.BACK) {
                        removeClass('tag--marked', field.previousSibling);
                    }

                    var name = target.value.trim();

                    // if(code === KEYS.ENTER || code === KEYS.COMMA) {
                    if (code === KEYS.ENTER) {

                        target.blur();

                        addTag(name);

                        if (timer) clearTimeout(timer);
                        timer = setTimeout(function() {
                            target.focus();
                        }, 10);
                    } else if (code === KEYS.BACK) {
                        if (e.target.value === '' && !isPressed) {
                            isPressed = true;
                            removeTag();
                        }
                    }
                }
            }

            function backHandler(e) {
                isPressed = false;
            }

            function addTag(name) {

                // delete comma if comma exists
                name = name.toString().replace(/,/g, '').trim();

                if (name === '') return field.value = '';

                if (~tagsArray.indexOf(name)) {

                    var exist = $$('.tag', wrap);

                    Array.prototype.forEach.call(exist, function(tag) {
                        if (tag.firstChild.textContent === name) {

                            addClass('tag--exists', tag);

                            if (transitionEnd) {
                                oneListener(tag, transitionEnd, function() {
                                    removeClass('tag--exists', tag);
                                });
                            } else {
                                removeClass('tag--exists', tag);
                            }


                        }

                    });

                    return field.value = '';
                }

                var tag = createTag(name);
                wrap.insertBefore(tag, field);
                tagsArray.push(name);
                field.value = '';
                el.value += (el.value === '') ? name : ',' + name;
            }

            function removeTag() {
                if (tagsArray.length === 0) return;

                var tags = $$('.tag', wrap);
                var tag = tags[tags.length - 1];

                if (!hasClass('tag--marked', tag)) {
                    addClass('tag--marked', tag);
                    return;
                }

                tagsArray.pop();

                wrap.removeChild(tag);

                el.value = tagsArray.join(',');
            }

            init();

            /* Public API */

            this.getTags = function() {
                return tagsArray;
            }

            this.clearTags = function() {
                if (!el.instance) return;
                tagsArray.length = 0;
                el.value = '';
                wrap.innerHTML = '';
                wrap.appendChild(field);
            }

            this.addTags = function(name) {
                if (!el.instance) return;
                if (Array.isArray(name)) {
                    for (var i = 0, len = name.length; i < len; i++) {
                        addTag(name[i])
                    }
                } else {
                    addTag(name);
                }
                return tagsArray;
            }

            this.destroy = function() {
                if (!el.instance) return;

                wrap.removeEventListener('click', btnRemove, false);
                wrap.removeEventListener('keydown', keyHandler, false);
                wrap.removeEventListener('keyup', keyHandler, false);

                wrap.parentNode.removeChild(wrap);

                tagsArray = null;
                timer = null;
                wrap = null;
                field = null;
                transitionEnd = null;

                delete el.instance;
                el.type = type;
            }
        }

        window.Tags = Tags;

    })();

    // Use
    var tags = new Tags('.tagged');
</script>