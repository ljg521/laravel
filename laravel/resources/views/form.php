
<form action="/req/add" method="post">
    <input name="input">
    <button type="submit">提交</button>
    <button type="submit">提交2</button>
    <input name="_token" type="hidden" value="{{csrf_token()}}">
</form>