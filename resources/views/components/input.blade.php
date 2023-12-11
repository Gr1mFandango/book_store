<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <div class="input-group">
        <input
            type="{{ $type }}"
            name="{{ $name }}"
            class="form-control @if($isInvalid) is-invalid @endif"
            id="{{ $id }}"
            aria-describedby="basic-addon3 basic-addon4"
            {{ $multiple ? 'multiple' : '' }}
            value="{{ $value }}"
        >
        @foreach($errors as $message)
            <div class="invalid-feedback">{{ $message }}</div>
        @endforeach
    </div>
</div>
