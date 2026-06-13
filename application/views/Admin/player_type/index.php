<?php if (!empty($this->session->flashdata('success'))) { ?>
<div class="alert alert-success" role="alert">
    <?php echo $this->session->flashdata('success'); ?>
    <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>

<?php if (!empty($this->session->flashdata('failed'))) { ?>
<div class="alert alert-danger" role="alert">
    <?php echo $this->session->flashdata('failed'); ?>
    <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php } ?>

<div id="mainContent">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="c-grey-900 mB-20">Player Type</h4>
                        </div>
                        <div class="col-sm-6">
                            <a href="<?php echo site_url('admin/player-type/add')?>" class="btn cur-p btn-success btn-color float-end">Add Player Type</a>
                        </div>
                    </div>
                    <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th style="width: 5%">No</th>
                                <th>Player Type</th>
                                <th>Sport Type</th>
                                <th style="width: 20%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if (!empty($data_player_type)) {
                                $no = 1;
                                foreach($data_player_type as $player) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo htmlspecialchars($player->player_type); ?></td>
                                <td><?php echo htmlspecialchars($player->name_type ?? 'Tidak Diketahui'); ?></td>
                                <td>
                                    <a href="<?php echo site_url('admin/player-type/edit/'.$player->id); ?>" class="btn cur-p btn-warning m-3">Edit</a>
                                    <button type="button" class="btn cur-p btn-danger btn-color m-3 btn-delete" data-id="<?php echo $player->id; ?>" data-name="<?php echo htmlspecialchars($player->player_type); ?>">Delete</button>
                                </td>
                            </tr>
                            <?php 
                                }
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handling delete button click with SweetAlert2
    const deleteButtons = document.querySelectorAll('.btn-delete');
    deleteButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const id = this.getAttribute('data-id');
            const name = this.getAttribute('data-name');
            
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: `Anda akan menghapus Player Type "${name}"!`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = `<?php echo site_url('admin/player-type/delete/'); ?>${id}`;
                }
            });
        });
    });
});
</script>
