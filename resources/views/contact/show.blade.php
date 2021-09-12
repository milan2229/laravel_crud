<h1>詳細</h1>
<a href="{{ route('contact.index') }}">一覧</a>
<a href="{{ route('contact.edit', $contact->id)}}">edit</a>
<form action="{{ route('contact.destroy', $contact->id )}}" method="POST">
@csrf
@method('delete')
<input type="submit" value="削除">
</form>

<tr>
      <th scope="row"><a href="{{ route('contact.show',$contact->id) }}">{{ $contact->your_name }}</a></th>
      <td>{{ $contact->title }}</td>
      <td>{{ $contact->email }}</td>
      <td>{{ $contact->url }}</td>
      <td>{{ $gender }}</td>
      <td>{{ $age }}</td>
      <td>{{ $contact->contact }}</td>
    </tr>