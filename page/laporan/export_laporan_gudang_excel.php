 <?php
	
	$koneksi = new mysqli("localhost","root","","inventori");

	
	
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan_Stok_Gudang(".date('d-m-Y').").xls");

?>	

<h2>Laporan Stok Gudang</h2>

<table border="1">
	  <tr>
											<th>No</th>
											<th>Code Item</th>
											<th>Name Item</th>											
											<th>Type of Item</th>
											
											<th>Amount of Item</th>
											<th>Unit</th>
										
                                         
                                        </tr>
	
 <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from gudang");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['kode_barang'] ?></td>
											<td><?php echo $data['nama_barang'] ?></td>
											<td><?php echo $data['jenis_barang'] ?></td>
											
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
								

								

										
                                        </tr>
									<?php }?>

                                </table>