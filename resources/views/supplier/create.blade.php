ini create dari view
<form method="POST"
action="/Supplier">
{{ csrf_field() }}
  <input type="text" name="sup_id" /><br />
  <input type="text" name="sup_name" /><br />
  <input type="text" name="sup_address" /><br />

<input type="submit"
  name="sbm_save"
  id="sbm_save"
  value="save" />

</form>
