function inicializarselects() {
    select1 = document.getElementById('select1');
    tipo = document.getElementById('tipo');
    select2 = document.getElementById('select2');
    tipo2 = document.getElementById('tipo2');
  }
  inicializarselects();
  
  select1.onchange = (event) => {
    event.preventDefault();
  
    let opcion = tipo.value
  
    switch (opcion) {
        case 'opcion1':
            resultado = document.getElementById("resultado");
            resultado.innerHTML = `           
             <div class="row">
            <div class="col-md-3 d-flex flex-column mb-3">
            <label class="form-label">KG</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/icon-balanza-input.svg" alt="">
                    </span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">Contenedores</label>
                <div class="d-flex flex-row">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <img src="../assets/images/tambor.svg" alt="">
                        </span>
                        <input type="number" class="form-control" aria-describedby="basic-addon1">
                        <p class="detail2">Un.</p>
                    </div>
                </div>
            </div>
        </div>`
            select1.reset();
            break;
        case 'opcion2':
            resultado = document.getElementById("resultado");
            resultado.innerHTML = `            
            <div class="row">
            <div class="col-md-3 d-flex flex-column mb-3">
            <label class="form-label">KG</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/icon-balanza-input.svg" alt="">
                    </span>
                    <input type="text" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">Contenedores</label>
                <div class="d-flex flex-row">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <img src="../assets/images/tambor.svg" alt="">
                        </span>
                        <input type="number" class="form-control" aria-describedby="basic-addon1">
                        <p class="detail2">Un.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
            <label class="form-label">Tipo</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/tambor.svg" alt="">
                    </span>
                    <select class="form-select">
                        <option selected="">Seleccionar</option>
                        <option value="1">Clara</option>
                        <option value="2">Oscura</option>
                    </select>
                </div>
            </div>
        </div>`
            select1.reset();
            break;
        default:
            alert('ocurrio un error')
            break;
    }
  }
  
  select2.onchange = (event) => {
    event.preventDefault();
  
    let opcion = tipo2.value
  
    switch (opcion) {
        case 'opcion1':
            resultado2 = document.getElementById("resultado2");
            resultado2.innerHTML = `                        
            <div class="row">
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">Full</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">Arg</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">FOB Full</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">FOB Arg</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>`
            select2.reset();
            break;
        case 'opcion2':
            resultado2 = document.getElementById("resultado2");
            resultado2.innerHTML = `
            <div class="row">
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">Full</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">Arg</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">CFR Full</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">CFR Arg</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>
            <div class="row">
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">CFR Flete</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            </div>`
            select2.reset();
            break;
        case 'opcion3':
            resultado2 = document.getElementById("resultado2");
            resultado2.innerHTML = `
            <div class="row">
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">Full</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">Arg</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">CIF Full</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column mb-3">
                <label class="form-label">CIF Arg</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">
                        <img src="../assets/images/valor.svg" alt="carrito">
                    </span>
                    <input type="number" class="form-control" aria-describedby="basic-addon1">
                </div>
            </div>
        </div>`
            select2.reset();
            break;
        default:
            alert('ocurrio un error')
            break;
    }
  }