<html>
<head>
<title><?php echo $title; ?></title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png">
  <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel="stylesheet">
		<style>
			.table-bordered thead tr th {
				border:2px solid #333!important;
			}
			.table-bordered tbody tr td, .table-bordered tbody tr th {
				border:2px solid #333!important;
			}
		</style>
</head>
<body onload="window.print()">
<div class="col-xs-12">
  <div style="text-align:justify; margin-top: 20px">
	<?php foreach($identitas->result_array() as $data) { ?>
		<img src="<?php echo base_url(); ?>assets/images/<?php echo $data['favicon']; ?>" style="width: 78px; height: 80px; float:left; margin:0 8px 4px 0;"/>
    <p style="text-align: left; line-height: 20px">
      <span style="font-size: 15px">Sekretariat<?php // echo $data['nama_website']; ?></span><br/>
      <span style="font-size: 20px;"><strong><?php echo $data['nama_website'];?></strong></span><br/>
      <span style="font-size: 12px"> <?php echo $data['alamat']; ?> Telp. <?php echo $data['no_telp'];?> </span><br/>
      <span style="font-size: 12px">Website : <?php echo $data['url'];?> dan Email : <?php echo $data['email'];?></span>
		
    </p>
		<?php } ?>
  </div>
  <div style="clear:both"></div><br/>
  <hr style="border: 2px groove #000000;margin-top: -2px; width:100%"/>
  <hr style="border: 1px groove #000000; margin-top: -19px; width:100%"/>
</div>
<div class="col-xs-12">
  <h3>PEMASUKAN KEUANGAN</h3>
  <table class="table table-bordered table-striped" style="border:2px solid #333">
    <thead>
        <tr>
            <th>No</th>
            <th>Dari</th>
						<th>Tanggal</th>
            <th align="right">Jumlah</th>
        </tr>
    </thead>
    <tbody>
        <?php
          $no = 1;
          foreach ($tampil_data->result_array() as $rows) {
            $tanggal1 = tgl_indo($rows['tgl']);
        ?>
        <tr>
            <th scope="row"><?php echo $no ?></th>
            <td><?php echo $rows['tujuan'] ?></td>
            <td><?php echo $tanggal1 ?></td>
            <td align="right"><?php echo number_format($rows['jumlah']) ?></td>
        </tr>
        <?php $no++; } ?>
    </tbody>
  </table>

  <h3>PENGELUARAN KEUANGAN</h3>
  <table class="table table-bordered table-striped" style="border:2px solid #333">
      <thead>
          <tr>
              <th>No</th>
              <th>Keperluan</th>
              <th>Tanggal</th>
              <th align="right">Jumlah</th>
          </tr>
      </thead>
      <tbody>
         <?php
            $no = 1;
            foreach ($tampil_data1->result_array() as $rows1) {
              $tanggal = tgl_indo($rows1['tgl']);
          ?>
          <tr>
              <th scope="row"><?php echo $no ?></th>
              <td><?php echo $rows1['tujuan'] ?></td>
              <td><?php echo $tanggal ?></td>
              <td align="right"><?php echo number_format($rows['jumlah']) ?></td>
          </tr>
          <?php $no++; } ?>
      </tbody>
  </table>
</div>

  <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>assets/admin/plugins/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core Js -->
  <script src="<?php echo base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.js"></script>
</body>
</html>
