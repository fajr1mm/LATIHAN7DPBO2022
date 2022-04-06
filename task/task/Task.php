<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function add(){
		$name_td = $_POST['tname'];
		$details_td = $_POST['tdetails'];
		$subject_td = $_POST['tsubject'];
		$priority_td = $_POST['tpriority'];
		$deadline_td = $_POST['tdeadline'];
		$status_td = "Belum";
		$query = "INSERT INTO `tb_to_do`(`name_td`, `details_td`, `subject_td`,
		 `priority_td`, `deadline_td`, `status_td`)
		  VALUES ('$name_td','$details_td','$subject_td','$priority_td','$deadline_td', '$status_td')";

		  return $this->execute($query);
	}

	function statusUpdate($key){
		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = '$key'";
		return $this->execute($query);
	}

	function hapus($key){
		$query = "DELETE FROM tb_to_do WHERE id = '$key'";
		return $this->execute($query);
	}
	
}

?>