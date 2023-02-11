<form action="/rest" method="post">
  <table>
    @csrf
    <tr>
      <th>message:</th>
      <td><input type="text" name="message"></td>
    </tr>
    <tr>
      <th>url:</th>
      <td><input type="text" name="url"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="Submit!"></td>
    </tr>
  </table>
</form>