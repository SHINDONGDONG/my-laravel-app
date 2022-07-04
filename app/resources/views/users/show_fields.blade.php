<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_name', 'User Name:') !!}
    <p>{{ $user->name }}</p>
</div>


<!-- email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email :') !!}
    <p>{{ $user->email }}</p>
</div>


<div class="col-sm-12">
    {!! Form::label('icon', 'Icon :') !!}

    <div>
        <img src="{{ asset($user->icon)}}"
            class="user-image image-circle elevation-2" style="width: 25vw; min-width: 140px; alt="User Image">
    </div>
</div>
