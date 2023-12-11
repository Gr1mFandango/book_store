<div class="form-floating">
    <textarea
        class="form-control @if($isInvalid) is-invalid @endif"
        name="{{ $name }}"
        placeholder="Пару слов о книге"
        id="{{ $id }}"
        style="height: 100px"
    >{{ $value }}</textarea>
    <label for="{{ $id }}">{{ $label }}</label>
    @foreach($errors as $message)
        <div class="invalid-feedback">{{ $message }}</div>
    @endforeach
</div>





