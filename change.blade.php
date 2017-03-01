<!DOCTYPE html>
<html>
<body>
<form method="post" action="{{route('contactChange', [$record->id])}}">
  <table>
    <tr>
      <td><label for="name">Имя</label></td><td><input name="name" type="text"  value="{{$record->name}}"></td>
    </tr>
    <tr>
      <td><label for="surname">Фамилия</label></td><td><input name="surname" type="text"  value="{{$record->surname}}"><td>
    </tr>
    <tr>
	     <td><label for="phonenumber">Номер</label></td><td><input name="phonenumber" type="text"  value="{{$record->phonenumber}}"></td>
    </tr>

</table>
<button name ="change" type="submit"value="change">Готово</button>
{{ csrf_field() }}

</form>
</body>
</html>
