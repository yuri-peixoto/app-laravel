<h1>Detalhes da dúvida: {{ $support->id }}</h1>

<h2>{{ $support->subject }}</h2>

<p>Status: {{ $support->status }}</p>

<p>{{ $support->body }}</p>

<form action="{{ route('supports.destroy', $support->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Excluir</button>
</form>

