<?php 
include_once 'config.php';

if (isset($_POST['country_id'])) {
	$query = "SELECT * FROM state where c_id=".$_POST['country_id'];
	$result = $db->query($query); 
	if ($result->num_rows > 0 ) {
			echo '<option value="">Sélectionnez l Arrodissement</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['id'].'>'.$row['state_name'].'</option>';
		 }
	}else{

		echo '<option>Aucun Arrodissement trouvé!</option>';
	}

}elseif (isset($_POST['state_id'])) {
	$query = "SELECT * FROM city where s_id=".$_POST['state_id'];
	$result = $db->query($query);
	if ($result->num_rows > 0 ) {
			echo '<option value="">Sélectionnez une Commune</option>';
		 while ($row = $result->fetch_assoc()) {
		 	echo '<option value='.$row['city_name'].'>'.$row['city_name'].'</option>';
		 }
	}else{

		echo '<option>Aucune Commune trouvée!</option>';
	}

}
?>