<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="container">
<div class="card">
  <div class="card-header">
  <a href="{{ route('contact.index') }}">一覧画面</a>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <form method="POST" action="{{ route('contact.store') }}">
@csrf
氏名
<input type="text" name="your_name">
<br>
件名
<input type="text" name="title">
<br>
メアド
<input type="email" name="email">
<br>
ホームページ
<input type="url" name="url">
<br>
性別
<input type="radio" name="gender" value="0">男性</input>
<input type="radio" name="gender" value="1">女性</input>
<br>
年齢
<select name="age">
<option value="">選択してください</option>
<option value="1">~19</option>
<option value="2">20~29</option>
<option value="3">30~39</option>
<option value="4">40~49</option>
<option value="5">50~59</option>
<option value="6">60~</option>
</select>
<br>
お問い合わせ内容
<br>
<textarea name="contact"></textarea>
<br>
<input type="checkbox" name="caution" value="1">注意事項<br>
<input class="btn btn-success" type="submit" value="登録する">
</form>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
</div>