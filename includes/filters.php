<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <img src="../assets/images/icon-filter.svg" class="me-2">
                Filtros
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column mb-3">
                        <label class="form-label">Proveedor</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <img src="assets/images/icon-input-proveedor.svg" alt="">
                            </span>
                            <select class="form-select">
                                <option selected=""></option>
                                <option value="1">001 - </option>
                                <option value="2">002 - </option>
                                <option value="3">003 - </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex flex-column mb-3">
                        <label class="form-label">CUIT</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                            <img src="assets/images/icon-input-cuit.svg" alt="">
                            </span>
                            <input type="number" class="form-control" aria-describedby="basic-addon1">
                        </div>
                    </div>
                    <div class="col-md-3 d-flex flex-column mb-3">
                        <label class="form-label">Fecha</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                            <img src="assets/images/icon-input-fecha.svg" alt="">
                            </span>
                            <input type="text" class="form-control vanila-datepicker" aria-describedby="basic-addon1">
                        </div>
                    </div>
            
                    <div class="col-md-3 d-flex flex-column mb-3">
                        <label class="form-label">Comprador</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                            <img src="assets/images/icon-input-comprador.svg" alt="">
                            </span>
                            <input type="text" class="form-control" aria-describedby="basic-addon1">
                        </div>
                    </div>

                    <div class="col-md-3 d-flex flex-column mb-3">
                        <label class="form-label">Tipo de pago</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1">
                                <img src="assets/images/icon-moneda-input.svg" alt="">
                            </span>
                            <select class="form-select">
                                <option selected=""></option>
                                <option value="1">001 - </option>
                                <option value="2">002 - </option>
                                <option value="3">003 - </option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="form-check">
                            <p class="form-label">Pago anticipado</p>
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Si</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>