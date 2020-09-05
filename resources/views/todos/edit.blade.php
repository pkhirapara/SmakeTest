@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Todo List</div>
                    <div class="panel-body">
                        <form role="form" method="post" action="{{ url('/todos/'. $todo->id) }}">
                            {{ csrf_field() }}

                            {{ method_field('put') }}

                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $todo->name }}">
                                <label class="control-label">Discription</label>
                                <textarea class="form-control" name="discription">{{ $todo->discription }}</textarea>
                            </div>

                            <div class="form-group">
                                <label class="control-label">Is Done</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="1" name="is_done" {{ ($todo->is_done=="1")? "checked" : "" }}> Done
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" value="0" name="is_done" {{ ($todo->is_done=="0")? "checked" : "" }}> Not Done
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Todo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
