<div>
    <label>
        {{ $label }}<br>
        <select name={{ $name }}>
            @foreach({{ $items }} as $author)
                <option value="{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</option>
            @endforeach
        </select>
    </label>
</div>
