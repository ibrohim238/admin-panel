@props(['user'])
<div class="tab-pane" id="settings">
    <form class="form-horizontal" action="{{ route('admin.user.update', $user) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group row">
            <label for="roles" class="col-sm-2 col-form-label">Roles</label>
            <div class="col-sm-10">
                <input type="text" name="roles" class="form-control" id="roles" placeholder="Roles">
            </div>
        </div>
        <div class="form-group row">
            <label for="new_password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" name="new_password" class="form-control" id="new_password" placeholder="Password">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </form>
</div>