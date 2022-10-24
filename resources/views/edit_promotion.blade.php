<form action="{{ route('update-promotion') }}" method="post">
    @csrf
    <input type="text" value="{{ $promotion->nom }}" name="nom">
    <input type="hidden" name="id" value="{{ $promotion->id }}">
    <input type="submit" name="edit_promotion">
</form>