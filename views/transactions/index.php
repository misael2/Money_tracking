<!--Vista Index -->
<div class="row">
	<div class="col s12 m12 l12">

<?php
	function getMoney($amount){
		if ($amount<0) {
			$amount = str_replace("-", "", $amount);
			$amount = number_format($amount, 2);
			$amount = '<div style="color:red">-$'.$amount.'</div>';
		}else{
			$amount = number_format($amount, 2);
			$amount = '<div style="color:#00FF00">&nbsp;$'.$amount.'</div>';
		}
		return $amount;
	}

	function getBalance($transactions){
		$num = count($transactions);
		asort($transactions);
		for ($i=0; $i < $num ; $i++) { 
			$j = 0;
			$sum = 0;
			foreach ($transactions as $transaction) {
				if ($j < $num-$i){
					$sum += $transaction[5];
				}
				$j++;
			}
			$balance[$i] = $sum;
		}
		return $balance; 
	}
?>

<div class="row">
	<div class="col-sm-11"><h3>Transactions</h3></div>
	<div class="col-sm-1">
		<a href="<?php echo APP_URL; ?>transactions/add">
			<span class="glyphicon glyphicon-plus"></span>
		</a>
	</div>
</div>

<table class="striped responsive-table">
	<thead>
<tr>
		<th>ID</th>
		<th>Description</th>
		<th>Date</th>
		<th>Amount</th>
		<th>Balance</th>
		<th>Category</th>
		<th>Actions</th>
	</tr>
	</thead>
	<?php
	$balance = getBalance($transactions); 
	$i=0;
	foreach ($transactions as $transaction): 
		if ($date = date_create($transaction["4"])) {
			$date = date_format($date, "d/m/Y");
		}
/*<?php echo date_format($date, "d/m/Y"); ?>*/
	?>
		<tr>
			<td><?php echo $transaction["0"]; ?> </td>
			<td><?php echo $transaction["3"]; ?> </td>
			<td><?php echo $date; ?> </td>
			<td><?php echo getMoney($transaction["5"]); ?> </td>
			<td><?php echo getMoney($balance[$i]); ?> </td>
			<td><?php echo $transaction["7"]; ?> </td>
			<td>  <a href="<?php echo APP_URL; ?>transactions/edit/<?php echo $transaction["0"]; ?>"><i class="small material-icons">mode_edit</i></a>
		        <a href="<?php echo APP_URL; ?>transactions/delete/?id=<?php echo $transaction["0"]; ?>"><i class="small material-icons">error_outline</i></a>
  </td>
		</tr>
	<?php 
	$i++;
	endforeach ?>
</table>
</div>
</div>
<!--/*<div class="row">
	<div class="col s12 m6 l6">
<table class="striped responsive-table">
	<h5>Identificador de Cuentas</h5>
	<thead>
	<tr>
			<th>ID de la cuenta</th>
			<th>Nombre de la cuenta</th>
	</tr>
</thead>
<tbody>
<?php // foreach ($accounts as $account): ?>
	<tr>
            <td><?php// echo $account["id"]; ?></td>
						<td><?php // echo $account["name"]; ?></td>
	</tr>
<?php //endforeach; ?>
</tbody>
</table>
</div>
<div class="col s12 m6 l6">
<table class="striped responsive-table">
	<h5>Identificador de categorias</h5>
	<thead>
	<tr>
			<th>ID de la categoria</th>
			<th>Nombre de la categoria</th>
	</tr>
</thead>
<tbody>
<?php// foreach ($categories as $category): ?>
	<tr>
            <td><?php //echo $category["id"]; ?></td>
						<td><?php //echo $category["name"]; ?></td>
	</tr>
<?php //endforeach; ?>
</tbody>
</table>
</div>
</div>


-->