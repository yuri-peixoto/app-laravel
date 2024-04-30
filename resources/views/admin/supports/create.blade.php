<h1>Novo Suporte</h1>

<x-alert/>

<form action="{{ route('supports.store') }}" method="post">
    @include('admin.supports.partials.form')
</form>
