<!DOCTYPE html>
<html>
<body>
<form method="post" action="{{route('contactInsert')}}">
  <table>
    <tr>
      <td><label for="name">Имя</label></td><td><input name="name" type="text"  value=""></td>
    </tr>
    <tr>
      <td><label for="surname">Фамилия</label></td><td><input name="surname" type="text"  value=""><td>
    </tr>
    <tr>
	     <td><label for="phonenumber">Номер</label></td><td><input name="phonenumber" type="text"  value=""></td>
    </tr>

</table>

<button name ="insert" type="submit"value="insert">Готово</button>
{{ csrf_field() }}

</form>
</body>
</html>
