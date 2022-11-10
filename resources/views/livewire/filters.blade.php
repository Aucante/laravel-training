<div>
    <div class="d-flex justify-content-center ">
        @foreach($categories as $category)
            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="{{ $category->id }}" wire:model="activeFilters.{{ $category->id }}" />
                    <label for="{{ $category->id }}" class="custom-control-label mx-2">
                        <i class="fas fa-{{ $category->icon }}"></i>
                        {{ $category->label }}
                    </label>
                </div>
            </div>
        @endforeach
    </div>
</div>
