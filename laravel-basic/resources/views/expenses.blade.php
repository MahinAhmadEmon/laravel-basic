<!DOCTYPE html>
<html>
<body>

<h1>Expenses page</h1>
<table>
  <tr>
    <th>Id</th>
    <th>Title</th>
    <th>Date</th>
    <th>Amount</th>
  </tr>
  @foreach($expenses as $key => $expense)
  <tr>
    <td>{{ $key+1 }}</td>
    <td>{{ $expense->title }}</td>
    <td>{{ $expense->date }}</td>
    <td>{{ $expense->amount }}</td>
  </tr>
  @endforeach
</table>

</body>
</html>