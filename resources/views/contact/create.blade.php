<h1>create</h1>
<a href="{{ route('contact.index') }}">一覧画面</a>
<h1>テスト</h1>
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
<textarea name="contact"></textarea>
<br>

<input type="checkbox" name="caution" value="1">注意事項<br>

<input class="btn btn-info" type="submit" value="登録する">
</form>