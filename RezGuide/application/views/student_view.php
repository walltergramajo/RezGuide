<?php foreach($results as $row): ?>
		<h1><?php echo $row->students_firstname ?></h1>
		<h1><?php echo $row->students_lastname ?></h1>
		<h1><?php echo $row->students_program ?></h1>
<?php endforeach; ?>