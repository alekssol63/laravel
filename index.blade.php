<!DOCTYPE html>
<html>
<body>
<table>
  <tr>
      <th>Имя</th>
      <th>Фамилия</th>
      <th>Номер</th>
  </tr>


@foreach($contacts as $contact)
<tr>
  <td>{{$contact->name}}</td>
  <td>{{$contact->surname}}</td>
  <td>{{$contact->phonenumber}}</td>
  <td><a href="{{route('contactShow',['id'=>$contact->id])}}">Изменить</a></td>
  <td><a href="{{route('deleteRecord',['id'=>$contact->id])}}">Удалить</a></td>

</tr>
@endforeach
</table>


<td><a href="{{route('getForm')}}">Добавить</a></td>
</body>
</html>
