<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
<div class="container">
<div class="new-post">
  <a href="{{ route('contact.create') }}" class="btn btn-success">新規登録</a>
</div>

  <div class="card">
    <div class="card-header">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">name</th>
            <th scope="col">title</th>
            <th scope="col">email</th>
            <th scope="col">urll</th>
            <th scope="col">gender</th>
            <th scope="col">age</th>
            <th scope="col">contact</th>
          </tr>
        </thead>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          
          <tbody>
    @foreach ($contacts as $contact)
    <tr>
      <th scope="row"><a href="{{ route('contact.show',$contact->id) }}">{{ $contact->your_name }}</a></th>
      <td>{{ $contact->title }}</td>
      <td>{{ $contact->email }}</td>
      <td>{{ $contact->url }}</td>
      <td>{{ $contact->gender }}</td>
      <td>{{ $contact->age }}</td>
      <td>{{ $contact->contact }}</td>
    </tr>
    @endforeach 
  </tbody>
</table>
</blockquote>
</div>
</div>
</div>