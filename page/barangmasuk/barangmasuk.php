




 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Incoming Item</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
											<th>No</th>
											<th>Id Transaction</th>
											<th>Entry Date</th>
											<th>Code Items</th>
											<th>Name Items</th>
										
											<th>Shipper</th>
											
										
										
                                            
											<th>Incoming Amount</th>
											<th>Unit Items</th>
											<th>Setting</th>
                                         
                                        </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from barang_masuk");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['id_transaksi'] ?></td>
											<td><?php echo $data['tanggal'] ?></td>
											<td><?php echo $data['kode_barang'] ?></td>
											<td><?php echo $data['nama_barang'] ?></td>
											
											<td><?php echo $data['pengirim'] ?></td>
									
                                         
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
											
								

											<td>
											
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=barangmasuk&aksi=hapusbarangmasuk&id_transaksi=<?php echo $data['id_transaksi'] ?>" class="btn btn-danger" >Delete</a>
											</td>
                                        </tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=barangmasuk&aksi=tambahbarangmasuk" class="btn btn-primary" >Add Incoming Item</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












