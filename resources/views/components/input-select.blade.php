<div>
    <label>
        Автор<br>
        <select name="author_id">
            @foreach($authors as $author)
                <option value="{{ $author->id }}">{{ $author->name }} {{ $author->surname }}</option>
            @endforeach
        </select>
    </label>
</div>
