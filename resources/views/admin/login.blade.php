@extends('layouts.main')

@section('content')
    <div>
        <form method="POST" action="/admin/login">
            <p>管理員登入：</p>
            <p>帳號：<input type="text" name="username"/></p>
            <p>密碼：<input type="text" name="password"/></p>
            <p><input type="submit" value="登入"/></p>
        </form>
    </div>
@endsection
