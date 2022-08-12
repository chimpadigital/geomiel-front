<div class="mdl-button--fab_flinger-container" id="fab_ctn">
    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect bg-primary"
        id="fab_btn"><i class="material-icons text-white">add</i></button>
    <div class="mdl-button--fab_flinger-options">
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" data-bs-toggle="modal" data-bs-target="#nueva-ordenModal">
            <img src="assets/images/icon-proveedor-01.svg" width="22px" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-custom-class="custom-tooltip"
            data-bs-title="Nueva órden de compra">
        </button>
        <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect" data-bs-toggle="modal" data-bs-target="#nuevo-proveedorModal">
        <img src="assets/images/icon-nuevo-proveedor.svg" width="22px" data-bs-toggle="tooltip" data-bs-placement="top"
            data-bs-custom-class="custom-tooltip"
            data-bs-title="Nuevo proveedor">
        </button>
    </div>
</div>

<div class="modal fade" id="nueva-ordenModal" tabindex="-1" aria-labelledby="nueva-ordenModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-modal-blanco">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-header p-5">
                <h1 class="modal-title" id="nueva-ordenModalLabel">Nuevo órden de compra - <span class="text-primary">N°
                        02325</span></h1>
            </div>
            <div class="modal-body p-5">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Proveedor</label>
                            <select class="form-select mb-3">
                                <option selected=""></option>
                                <option value="1">001 - </option>
                                <option value="2">002 - </option>
                                <option value="3">003 - </option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cuit" class="form-label">CUIT</label>
                            <input type="number" class="form-control" id="cuit">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="text" class="form-control vanila-datepicker">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="comprador" class="form-label">Comprador</label>
                            <input type="text" class="form-control" id="comprador">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label class="form-label">Tipo de pago</label>
                            <select class="form-select mb-3">
                                <option selected=""></option>
                                <option value="1">001 - </option>
                                <option value="2">002 - </option>
                                <option value="3">003 - </option>
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="form-check">
                                <p class="form-label">Pago anticipado</p>
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Si</label>
                            </div>
                        </div>
                    </div>
                    <div class="box-form mb-4">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-end mb-4">
                                <button class="btn p-0 me-2">
                                    <img src="assets/images/icon-plus.svg" alt="">
                                </button>
                                <button class="btn p-0 ms-2">
                                    <img src="assets/images/icon-delete.svg" alt="">
                                </button>
                            </div>
                            <div class="col-4 d-flex flex-column mb-3">
                                <label class="form-label">Tipo de pago</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <img src="assets/images/icon-arrow-input.svg" alt="">
                                    </span>
                                    <select class="form-select">
                                        <option selected=""></option>
                                        <option value="1">001 - </option>
                                        <option value="2">002 - </option>
                                        <option value="3">003 - </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column mb-3">
                                <label class="form-label">Unidades</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <img src="assets/images/icon-arrow-input.svg" alt="">
                                    </span>
                                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column mb-3">
                                <label class="form-label">Precio por kilo</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <img src="assets/images/icon-moneda-input.svg" alt="">
                                    </span>
                                    <input type="number" class="form-control">
                                    <span class="input-group-text right">Kg</span>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column mb-3">
                                <label class="form-label">Total por kilo</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <img src="assets/images/icon-moneda-input.svg" alt="">
                                    </span>
                                    <input type="number" class="form-control">
                                    <span class="input-group-text right">Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4 d-flex flex-column mb-3">
                                <label class="form-label">Peso bruto unitario</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <img src="assets/images/icon-balanza-input.svg" alt="">
                                    </span>
                                    <input type="number" class="form-control">
                                    <span class="input-group-text right">Kg</span>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column mb-3">
                                <label class="form-label">Tara unitario</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <img src="assets/images/icon-balanza-input.svg" alt="">
                                    </span>
                                    <input type="number" class="form-control">
                                    <span class="input-group-text right">Kg</span>
                                </div>
                            </div>
                            <div class="col-4 d-flex flex-column mb-3">
                                <label class="form-label">Peso total unitario</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">
                                        <img src="assets/images/icon-balanza-input.svg" alt="">
                                    </span>
                                    <input type="number" class="form-control">
                                    <span class="input-group-text right">Kg</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-check">
                                    <p class="form-label">Canje</p>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Si</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="comprador" class="form-label">Observaciones</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col-md-8 mb-3 mb-md-0">
                            <label class="form-label" for="customFile">Subir archivo</label>
                            <input type="file" class="form-control file" id="customFile">
                        </div>
                        <div class="col-md-4 d-flex justify-content-end align-items-end">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Aceptar</button>
                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Aceptar y nuevo</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="nuevo-proveedorModal" tabindex="-1" aria-labelledby="nuevo-proveedorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content modal-naranja">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="d-flex align-items-center pt-5 px-5">
                <img src="assets/images/icon-provedor.svg" alt="">
                <h1 class="text-white">Proveedor - 0001</h1>
            </div>
            <div class="modal-body p-5">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="comprador" class="form-label text-white">Nombre o razón social</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cuit" class="form-label text-white">CUIT</label>
                            <input type="number" class="form-control" id="cuit">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="comprador" class="form-label text-white">Dirección</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="comprador" class="form-label text-white">Provincial</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="comprador" class="form-label text-white">Localidad</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="comprador" class="form-label text-white">Teléfono</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="comprador" class="form-label text-white">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="fecha" class="form-label text-white">Inicio de actividad</label>
                            <input type="text" class="form-control vanila-datepicker">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="comprador" class="form-label text-white">Colmenas</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="comprador" class="form-label text-white">Observaciones</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="col-md-12 d-flex justify-content-end align-items-end">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>