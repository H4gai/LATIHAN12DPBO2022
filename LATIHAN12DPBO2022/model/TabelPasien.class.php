<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

class TabelPasien extends DB
{
	function getPasien()
	{
		// Query mysql select data pasien
		$query = "SELECT * FROM pasien";
		// Mengeksekusi query
		return $this->execute($query);
	}

	// Query mysql insert data pasien
	function add($data)
	{
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat'];
		$tl = $data['tgl'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telp'];

		$query = "insert into pasien values ('', '$nik', '$nama', '$tempat', '$tl', '$gender', '$email', '$telp')";
		
		// Mengeksekusi query
		return $this->execute($query);
	}
	
	// Query mysql update data pasien
	function update($data)
	{
		$id = $data['id'];
		$nik = $data['nik'];
		$nama = $data['nama'];
		$tempat = $data['tempat_lahir'];
		$tl = $data['tgl_lahir'];
		$gender = $data['gender'];
		$email = $data['email'];
		$telp = $data['telepon'];

		$query = "update pasien set nik = '$nik', nama = '$nama', tempat = '$tempat', tl = '$tl', gender = '$gender', email = '$email', telp = '$telp' where id = '$id'";
		
		// Mengeksekusi query
		return $this->execute($query);
	}

	// fungsi delete data dari table
	function delete($id)
    {

        $query = "delete FROM pasien WHERE id = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
