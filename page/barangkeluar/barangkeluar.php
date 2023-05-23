




 <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Outgoing Item</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                        <tr>
											<th>No</th>
											<th>ID Transaction</th>
											<th>Out Date</th>
											<th>Code Item</th>
											<th>Item Name</th>
											<th>Amount Out</th>
											<th>Unit</th>
											<th>Objective</th>
											
											<th>Action</th>
                                         
                                        </tr>
										</thead>
										
               
                  <tbody>
                    <?php 
									
									$no = 1;
									$sql = $koneksi->query("select * from barang_keluar");
									while ($data = $sql->fetch_assoc()) {
										
									?>
									
                                        <tr>
                                            <td><?php echo $no++; ?></td>
											<td><?php echo $data['id_transaksi'] ?></td>
											<td><?php echo $data['tanggal'] ?></td>
											<td><?php echo $data['kode_barang'] ?></td>
											<td><?php echo $data['nama_barang'] ?></td>
											<td><?php echo $data['jumlah'] ?></td>
											<td><?php echo $data['satuan'] ?></td>
											<td><?php echo $data['tujuan'] ?></td>
								

											<td>
											
											<a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="?page=barangkeluar&aksi=hapusbarangkeluar&id_transaksi=<?php echo $data['id_transaksi'] ?>" class="btn btn-danger" >Delete</a>
											</td>
                                        </tr>
									<?php }?>

										   </tbody>
                                </table>
								<a href="?page=barangkeluar&aksi=tambahbarangkeluar" class="btn btn-primary" >Add Outgoing Item</a>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>












