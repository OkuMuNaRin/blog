@extends('layouts.app')

@section('content')
<div class="container " >
    <div class="row">
       <div class="col-lg-9">
            <div class="panel row" style="padding: 30px">
                <form action="{{url('/article')}}">
                    <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">
                    <p class="panel-title">写点什么</p>
                    <input type="text" name="title" size="50" placeholder="标题：">
                    <textarea id="bo" name="contents" class="col-lg-12">

                    </textarea>
                    <div class="col-lg-12">
                        <button type="button" onclick="$('#bo').val($('#bo').val()+this.innerHTML)">😄</button>
                    </div>

                    <p class="panel-footer"><button class="btn btn-default" type="submit">发布</button></p>
                </form>
            </div>
           <hr>

       </div>
        <div class="col-lg-1" ></div>
        <div class="col-lg-2">

            sssssssss
        </div>
    </div>
</div>
@endsection
