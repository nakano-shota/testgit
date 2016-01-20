@extends('default')

@section('body')

@if(Auth::guest())
<p>Loginしていないと利用できません。</p>
@else
<p>bookmark一覧</p>
@foreach($data as $deta)
  <p> {{$deta->url}}:{{$deta->tagu}}
<a href="out"  class="delete" id ="{{$deta->id}}">削除</a></p>

@endforeach
<form action="in" method="post">
<input type="input" name="url">
<select name="tagu">
<option value="PHP">PHP</option>
<option value="Nginx">Nginx</option>
<option value="MySQL">MySQL</option>
</select>
<br>
<input type="submit" value="登録">
</form>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
$(function(){
     $('a.delete').click(function(){
　　　 if(confirm("本当に削除しますか？")){
          $.get('out',{id:$(this).attr('id')},function(){});
       }else{
          window.alert('キャンセルされました');
　　　 }
     });
});
</script>
@endif
@stop


