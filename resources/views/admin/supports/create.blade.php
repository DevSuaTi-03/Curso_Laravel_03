<h1>Novo Suporte</h1>

<!-- formulário  -->
<form action="{{route('supports.store')}}" method="POST">

    <!-- criação de um token para validar o formulário por segurança e evitar o erro 419 -->
    {{-- <input type="text" value="{{csrf_token()}}" name="_token"> --}}

    {{-- OU MAIS SIMPLES, CRIE O MESMO TOKEN USANDO A FUNÇÃO DIRETAMENTE  COM @csrf() --}}
    @csrf()

    <input type="text" placeholder="Assunto" name="subject">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
    <button type="submit">Enviar</button>
</form>