<!-- Vista para añadir-->
<h2>Añadir Cuentas</h2>
<div class="row">
<form class="col s12 m12 l12" action="<?php echo APP_URL; ?>accounts/add" method="POST">
  <div class="row">
    <div class=" input-field col s12 m12 l12">
    <i class="material-icons prefix">class</i>
    <input id="name" type="text" class="validate" name="name">
    <label for="name">Name: </label>
  </div>
</div>
<div class="row">
     <div class="input-field col s12 m12 l12">
        <i class="material-icons prefix">account_circle</i>
      <select name="user_id" >
        <option value="" disabled selected>Elige el usuario</option>
<?php foreach ($users as $user): ?>
        <option value="<?php echo $user["id"]; ?>"> <?php echo $user["username"]; ?></option>
<?php endforeach; ?>
      </select>
     </div>
  </div>
   <div class="row">
     <div class="col s12 m12 l12">
      <button class="btn waves-effect waves-light" type="submit" name="add" value="Save">Enviar
          <i class="material-icons right">send</i>
      </button>
    </div>
  </div>
</form>
</div>
