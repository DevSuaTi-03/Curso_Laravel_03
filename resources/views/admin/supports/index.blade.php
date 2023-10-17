<h1>Listagem dos Suportes</h1>

<a href="{{route('supports.create')}}">Duvidas</a>


<table>
    <thead>
        <th>Assunto</th>
        <th>status</th>
        <th>descrição</th>
        <th></th>
    </thead>
    <tbody>

        {{-- @ significa diretiva --}}
        {{-- foreach é uma listagem --}}
        {{-- a variavel $supports foi definida e enviada para index em SupportController --}}
        @foreach($supports as $support)
            <tr>
                <td>{{$support->subject}}</td>
                <td>{{$support->status}}</td>
                <td>{{$support->body}}</td>
                <td>
                    <a href="{{ route('supports.show', $support->id) }}">ir</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
