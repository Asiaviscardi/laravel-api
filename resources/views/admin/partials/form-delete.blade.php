<form action="{{ $route }}" method="POST"
    onsubmit="return confirm('Vuoi eliminare? {{ $name }}?')">
    @csrf
    @method('DELETE')
    <button type="sumbit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
</form>
