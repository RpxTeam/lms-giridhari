<div class=input-field">
    {!! Form::label('receiver', 'Recipient', ['class' => 'control-label']) !!}

    @if(isset($users))
        {!! Form::select('receiver', $users, old('receiver'), ['class' => 'form-control']) !!}
    @elseif(isset($user))
        {!! Form::text('receiver', old('receiver', $user ? $user : ''), ['class' => 'form-control', 'disabled']) !!}
    @endif
</div>
<div class="mdc-text-field mdc-text-field--fullwidth rpx-text-field--fullwidth">
    {!! Form::label('subject', 'Subject', ['class' => 'mdc-floating-label']) !!}

    @if(!isset($user))
        {!! Form::text('subject', old('subject', isset($topic) ? $topic->subject : ''), ['class' => 'mdc-text-field__input']) !!}
    @else
        {!! Form::text('subject', old('subject', isset($topic) ? $topic->subject : ''), ['class' => 'mdc-text-field__input', 'disabled']) !!}
    @endif

    <div class="mdc-line-ripple"></div>

    @if ($errors->has('subject'))
        <span class="helper-text" data-error="wrong" data-success="right">
            <strong>{{ $errors->first('subject') }}</strong>
        </span>
    @endif
</div>

<div class="mdc-text-field mdc-text-field--textarea mdc-text-field--fullwidth full-width-textarea-example">
    {!! Form::textarea('content', old('content'), ['class' => 'mdc-text-field__input', 'id' => 'content']) !!}
    {!! Form::label('content', 'Message', ['class' => 'mdc-floating-label']) !!}
    {{--<span class="helper-text" data-error="wrong" data-success="right"></span>--}}
    {{--@if($errors->has('content'))--}}
        {{--<span class="helper-text" data-error="wrong" data-success="right">--}}
            {{--{{ $errors->first('content') }}--}}
        {{--</span>--}}
    {{--@endif--}}
</div>
@section('javascript')
    @parent

@stop