<div class="panel-body widget-shadow">
    <form action="" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="col-md-12">
            <div class="form-group">
                <label for="name">Faculty name:</label>
                <input type="text" class="form-control" name="name" value="{{old('name',isset($faculty -> name) ? $faculty -> name : '')}}" placeholder="Faculty name">
                @if($errors->has('name'))
                    <div class="error-text text-danger">
                        {{$errors->first('name')}}
                    </div>
                @endif
            </div>

        </div>
        <div class="clearfix"></div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>