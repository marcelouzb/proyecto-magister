





<hr>
<center><span class="badge badge-info"><h1>PASO 1 CREA TU ORLA</h1></span></center>

  

    <img class="img-bottom" src="/img/group-bottom.png" alt="friends">
   <hr>


   <div class="panel panel-primary">
  <div class="panel-body">
    <?php  $this->load->helper('form'); ?>
    

    <?php echo form_open('/tu-orla/datosPost'); ?>
  <div class="form-group">
    <label for="nombre">Nombre:</label>
    <input   type="text" class="form-control" name="orla[nombre]" id="nombre">
  </div>
  <div class="form-group">
    <label for="colegio">Centro Educativo:</label>
    <input type="text" class="form-control" name="orla[colegio]" id="colegio">
  </div>
   <div class="form-group">
    <label for="localidad">Localidad:</label>
    <input type="text" class="form-control" name="orla[localidad]" id="localidad">
  </div>
  <div class="form-group">
    <label for="curso">Curso:</label>
    <input type="text" class="form-control" name="orla[curso]" id="curso">
  </div>
   <div class="form-group">
  <label for="inicio_orla">Inicio</label>
   <select required name="orla[inicio]" class="selectpicker form-control">
    <?php foreach (Orla::getPosiblesCursosInicio() as $key => $value): ?>
      <option value="<?= $key ?>"><?= $value ?></option>
    <?php endforeach; ?>                                        
   </select>
</div>
  <div class="form-group">
  <label for="fin_orla">Fin</label>
  <select required name="orla[fin]" class="selectpicker form-control">
    <?php foreach (Orla::getPosiblesCursosFin() as $key => $value): ?>
      <option value="<?= $key ?>"><?= $value ?></option>
    <?php endforeach; ?>                                      
  </select>
</div>

  
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
  </div>
  <div class="panel-footer">
  </div>
</div>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>