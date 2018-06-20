

<table border="2">
    <tr>
        <td>Имя</td>
        <td>Текст</td>
        <td>ID</td>
    </tr>
    @foreach($message as $k => $mes) 
    <tr>
        <td><a href="">{{$mes->name}}</a></td>
        <td>{{$mes->message}}</td>
        <td>{{$mes->user_id}}</td>
    </tr>
    @endforeach
</table>

