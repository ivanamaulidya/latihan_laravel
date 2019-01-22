<h2>TAMBAHKAN DATA ANGGOTA</h2>
<form method="POST"
action="/Employee">
{{ csrf_field() }}
  <input type="text" name="emp_id" /><br />
  <input type="text" name="emp_name" /><br />
  <input type="text" name="emp_address" /><br />
  <input type="text" name="emp_phone_number" /><br />

<input type="submit"
  name="sbm_save"
  id="sbm_save"
  value="save" />

</form>
