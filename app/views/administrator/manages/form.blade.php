<div class="form-group">
    <div class="text-center">
        <h1>Edit User</h1>
    </div>
</div>
<div class="form-group">
    {{Form::label('username','Username',['class'=>'col-sm-3 control-label'])}}
    <div class="col-sm-4">
        {{Form::text('username',null,['placeholder'=>'User name','class'=>'form-control'])}}
    </div>
</div>
<div class="form-group">
    {{Form::label('first_name','First name',['class'=>'col-sm-3 control-label'])}}
    <div class="col-sm-4">
        {{Form::text('first_name',null,['placeholder'=>'First name','class'=>'form-control'])}}
    </div>
</div>
<div class="form-group">
    {{Form::label('last_name','Last name',['class'=>'col-sm-3 control-label'])}}
    <div class="col-sm-4">
        {{Form::text('last_name',null,['placeholder'=>'Last name','class'=>'form-control'])}}
    </div>
</div>
<div class="form-group">
    {{Form::label('email','Email',['class'=>'col-sm-3 control-label'])}}
    <div class="col-sm-4">
        {{Form::email('email',null,['placeholder'=>'Email address','class'=>'form-control'])}}
    </div>
</div>
<div class="form-group">
    {{Form::label('password','Password',['class'=>'col-sm-3 control-label'])}}
    <div class="col-sm-4">
        {{Form::password('password',['placeholder'=>'Password','class'=>'form-control'])}}
        @if(isset($user))
            <span class="help-block">Leave blank to keep current password</span>
        @endif
    </div>
</div>
<div class="form-group">
    {{Form::label('confirmation_password','Confirmation Password',['class'=>'col-sm-3 control-label'])}}
    <div class="col-sm-4">
        {{Form::password('confirmation_password',['placeholder'=>'Confirmation password','class'=>'form-control'])}}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
        <label for="is_admin">
            @if(isset($user) &&(Auth::user()->id==$user->id))
                {{Form::checkbox('is_admin',1,true,['disabled'=>'disabled'])}}Administrator
                {{Form::hidden('is_admin',1)}}
            @endif
        </label>
    </div>
</div>
