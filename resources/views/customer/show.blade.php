@foreach ($customer as $customerlist)
  {{$customerlist->customer_id}}
  {{$customerlist->name}}
  {{$customerlist->address}}
  <br />
  <!-- http://localhost:8000/Customer/3 -->
@endforeach
<a href="{{ url('Customer')}}">
index
</a>
