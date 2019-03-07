
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Formulario cliente</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Bienvenido al formulario cliente.<small>Por favor digite información real.</small></h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">
<h1 style="text-align:center;" >Formulario cliente</h1>
            <br />
            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="controladores/controlador-formulario-cliente.php">
              <input type="hidden" name="tipo_accion" required="required" value="registrar-formulario">
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"># De Documento de identidad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="identificacion" name="identificacion" required="required" class="form-control col-md-7 col-xs-12" maxlength="11">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dirección <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="direccion" name="direccion" required="required" class="form-control col-md-7 col-xs-12" maxlength="50" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Telefono/Celular <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="number" id="celular" name="celular" required="required" class="form-control col-md-7 col-xs-12" maxlength="50" >
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Empresa(Personal o Laboral) <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="empresa" name="empresa" required="required" class="form-control col-md-7 col-xs-12" maxlength="50">
                </div>
              </div>
              <div class="form-group">
                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Ingresos aproximados(mensuales) </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="middle-name" name="ingresos" class="form-control col-md-7 col-xs-12" type="number" pattern="[0-9]+">
                </div>
                <label for="middle-name" style="text-align:left;" class="control-label col-md-1 col-sm-1 col-xs-1">$RD</label>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Genero</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="heard" class="form-control" name="genero" required>
                      <option value="">Seleccionar...</option>
                      <option value="m">Masculino</option>
                      <option value="f">Femenino</option>
                      <option value="o">Otro</option>
                    </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Edad <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" name="edad" required="required" type="date">
                </div>
                <label for="middle-name" style="text-align:left;" class="control-label col-md-1 col-sm-1 col-xs-1"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> Menor de edad.</label>
              </div>
<div class="ln_solid"></div>
      <div >
        <div class="row" >
          <div class="col-md-12 col-lg-12 col-sm-12" style="width:100%;" >
                <div class="center-block" style="width:60%;">
                  <h3 style="">Procedimientos.</h3>
                <!-- blockquote -->
                  <p style="text-align:justify;">Si se encuentra en esta fase de "formulario cliente" es porque le interesa algún servicio de nuestra empresa, en breve le
                  estaremos aclarando algunas cuestionantes que debe de tener como cliente.<br><br>
                  Dado que para los préstamos personales la garantía es prácticamente el compromiso de que lo pagarás y generalmente no se requieren avales, es importante
                  que conozcas qué requisitos te pueden pedir y con qué fin. La finalidad de llenar este formulario es no perder el tiempo, es una situación que ni a usted
                  como cliente le gustaría, ni a nosotros como empresa. Por ende llenar este pequeño formulario nos ahorraría tiempo a nosotros y a usted.<br><br>
                  Aún asi debera presentar en nuestras oficinas los siguientes documentos físicos como constacia a lo que va a llenar con su información:
                  <li>Identificación oficial.</li>
                  <li>Comprobante de ingresos.</li>
                  <li>Referencias personales.</li>
                </p>
                  <footer>Att: Admin. <cite title="Source Title">SmartFinances</cite>
                  </footer>
                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="center-block" style="width:100%;text-align:center;">
                      <button class="btn btn-primary" type="button">Cancelar</button>
                      <button class="btn btn-primary" type="reset">Limpiar</button>
                      <button type="submit" class="btn btn-success">Guardar información</button>
                    </div>
                    </div>
                  </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
