<!DOCTYPE html>
<html>
<body>

<h1>Incomes page</h1>
<table border="1" cellpadding="5" cellspacing="0">
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Date</th>
    <th>Amount</th>
  </tr>

  @foreach($incomes as $key => $income)
  <tr>
    <td>{{ $key+1 }}</td>
    <td>{{ $income->title }}</td>
    <td>{{ $income->date }}</td>
    <td>{{ $income->amount }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>