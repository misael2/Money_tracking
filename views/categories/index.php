<!-- Vista Index-->
<div class="row">
<div class="col s12 m12 l12">
<table class="highlight responsive-table">
  <h2>Categorias</h2>
  <thead>
    <tr>
		    <th>Id</th>
				<th>Nombre</th>
				<th>Action</th>
	  </tr>
  </thead>
  <tbody>
<?php foreach ($categories as $category ): ?>
    <tr>
		    <td><?php echo $category['id']; ?></td>
		    <td><?php echo $category['name']; ?></td>
		    <td>
		        <a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category["id"]; ?>"><i class="small material-icons">mode_edit</i></a>
		    		<a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category['id']; ?>"><i class="small material-icons">error_outline</i></a>
		    </td>
	  </tr>
<?php endforeach; ?>
  </tbody>
</table>
</div>
</div>
