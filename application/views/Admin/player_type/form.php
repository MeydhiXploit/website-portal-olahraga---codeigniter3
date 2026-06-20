<form class="modal-content" method="post">
    <div class="modal-header">
        <h5 class="modal-title" id="add-modal"><?php echo $title; ?></h5>
    </div>
    <div class="modal-body">
        <div class="mb-3">
            <label class="form-label" for="player_type">Player Type</label>
            <input type="text" class="form-control" id="player_type" name="player_type" placeholder="Masukkan Player Type (contoh: Striker)" value="<?php echo set_value('player_type') ? set_value('player_type') : (isset($player_type) ? $player_type->player_type : '') ; ?>">
            <span class="text-danger"><?php echo form_error('player_type'); ?></span>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="sport_type">Sport Type</label>
            <select class="form-control" id="sport_type" name="sport_type">
                <option value="">--- Pilih Sport Type ---</option>
                <?php foreach ($sport_types as $sport) { ?>
                    <option value="<?php echo $sport->id; ?>" <?php echo (set_value('sport_type') == $sport->id || (isset($player_type) && $player_type->sport_type == $sport->id)) ? 'selected' : ''; ?>>
                        <?php echo $sport->name_type; ?>
                    </option>
                <?php } ?>
            </select>
            <span class="text-danger"><?php echo form_error('sport_type'); ?></span>
        </div>
    </div>
    <div class="modal-footer">
        <a href="<?php echo site_url('admin/player-type')?>" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
