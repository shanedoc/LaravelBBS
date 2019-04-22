@extends('layouts.layouts')
@section('title', '首页')
@section('content')
    <form class="sui-form form-horizontal">
    <div class="control-group">
        <label class="control-label v-top"><b style="color: #f00;">*</b>
            用户名称：
        </label>
        <div class="controls">
            <input type="text" name="username" value="" class="input-medium">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label v-top"><b style="color: #f00;">*</b>
            邮箱：
        </label>
        <div class="controls">
            <input type="text" name="email" value="" class="input-medium">
        </div>
    </div>
    <div class="control-group">
        <label class="control-label v-top"><b style="color: #f00;">*</b>
            用户状态：
        </label>
        <div class="controls">
            <label data-toggle="radio" class="checkbox-pretty inline checked disabled">
                <input type="checkbox" name="status" checked="checked" disabled=""><span>激活</span>
            </label>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label"></label>
        <div class="controls">
            <button type="button" id="modify" class="sui-btn btn-primary">修改</button>
            <button type="reset" class="sui-btn">取消</button>
        </div>
    </div>
</form>
@stop