        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title',null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body',null,['class' =>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit($buttonSubmit,['class'=>'btn btn-primary form-control']) !!}
        </div>

