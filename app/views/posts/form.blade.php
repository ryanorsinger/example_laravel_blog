<div class="form-group">
    {{ Form::label('title', 'Post Title', array('class' => 'col-sm-2 control-label')) }}

    <div class="col-sm-10">
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}

    </div>
</div>

<div class="form-group">
    {{ Form::label('body', 'Post Body', array('class' => 'col-sm-2 control-label')) }}

    <div class="col-sm-10">
        {{ Form::textarea('body', Input::old('body'), array('rows' => '10', 'class' => 'form-control')) }}
    </div>
</div>

<div class="form-group">
    <div class="col-sm-10">
      {{ Form::label('image','Image Upload',array('id'=>'','class'=>'')) }}
      {{ Form::file('image','',array('id'=>'image','class'=>'')) }}
        <p class="help-block">Upload an image associates with this post.</p>
  </div>
</div>
