    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card ml-2">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr class="text-center">
                    <th width="5%">No</th>
                    <th width="25%">Nama Lengkap</th>
                    <th width="20%">Email</th>
                    <th width="20%">No. Handphone</th>
                    <th width="15%">Aksi</th>
                  </tr>
                  </thead>
                  <?php  
                  $no = 1;
                  foreach ($member as $row) : 
                  ?>
                  <tbody>
                  <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $row->nama_lengkap ?></td>
                    <td><?= $row->email ?></td>
                    <td><?= $row->nohp ?></td>
                    <td class="text-center"><?= $button ?></td>
                  </tr>
                  </tbody>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php $this->load->view('admin/templates/jQuery'); ?>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>