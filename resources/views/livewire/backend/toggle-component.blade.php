<li class="preview-item">
    <div class="custom-control custom-control-md custom-switch">
        <input
            type="checkbox"
            class="custom-control-input"
            name="activated"
            wire:model.lazy="toggleBooking"
            @checked($toggleBooking)
            id="activated">
        <label class="custom-control-label" for="activated"></label>
    </div>
</li>
