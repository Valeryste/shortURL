<form method="POST" action="{{route('shortURL.store')}}">
    @csrf
        <label for="original_url">Оригинальная ссылка</label>
        <input type="text" name="original_url" id="original_url" required>
    <button type="submit">Создать</button>
</form>
