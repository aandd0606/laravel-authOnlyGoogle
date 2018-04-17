{{--表單開始--}}
@if(request()->segment(4)=='edit')
    {!! Form::model($model, ['route' => ['model.update',$model->id]]) !!}
@else
    {!! Form::open(['url' => 'product', 'files' => true,'method' => 'post']) !!}
@endif
<fieldset>
    <div class="form-group row">
            <div class="col-md-6">
            {{--//文字表單--}}
            {{ Form::label('文字表單',"",[]) }}
            {{  Form::text('email', 'example@gmail.com',[
                'class'=>'form-control',
                ])  }}
            </div>
            <div class="col-md-6">
            {{--//密碼表單--}}
            {{ Form::label('密碼表單') }}
            {{  Form::password('password', [
                'class' => 'awesome form-control',
                ])  }}
            </div>
        {{--//郵件表單--}}
        <div class="col-md-4">
            {{ Form::label('郵件表單') }}
            {{  Form::email('$name', $value = null, [
                        'class'=>'form-control',
                ])  }}
        </div>
        {{--//日期表單--}}
        <div class="col-md-4">
            {{ Form::label('日期表單') }}
            {{  Form::date('name', \Carbon\Carbon::now(),[
                    'class'=>'form-control',
                ])  }}
        </div>
        {{--//數字表單--}}
        <div class="col-md-4">
            {{ Form::label('數字表單') }}
            {{  Form::number('name', 'value',[
                'class'=>'form-control',
                ])  }}
        </div>
        {{--下拉選單--}}
        <div class="col-md-6">
            {{ Form::label('下拉選單') }}
            {{  Form::select('animal',[
                'Cats',
                'Dogs',
                ],null,
                [
                'class'=>'form-control',
                ])  }}
        </div>
        {{--檔案上傳表單--}}
        <div class="col-md-6">
            {{ Form::label('檔案上傳') }}
            {{  Form::file('$name', [
                'class'=>'form-control-file'
                ])  }}
        </div>

        {{--核選表單--}}
        <div class="col-md-6">
            {{ Form::label('核選表單') }}
            <div class="form-check form-check-inline">
                {{  Form::radio('name', 'value1', true,[
                    'class'=>'form-check-input'
                    ])  }}
                {{ Form::label('核選1',null,[
                    'class'=>'form-check-label'
                    ]) }}
                {{  Form::radio('name', 'value2', true,[
                   'class'=>'form-check-input'
                   ])  }}
                {{ Form::label('核選2',null,[
                    'class'=>'form-check-label'
                    ]) }}
                {{  Form::radio('name', 'value3', true,[
                    'class'=>'form-check-input'
                    ])  }}
                {{ Form::label('核選3',null,[
                    'class'=>'form-check-label'
                    ]) }}
            </div>
        </div>
        {{--複選表單--}}
        <div class="col-md-6">
            {{ Form::label('複選表單') }}
            <div class="form-check form-check-inline">
                {{  Form::checkbox('name', 'value1', true,[
                    'class'=>'form-check-input'
                    ])  }}
                {{ Form::label('核選1',null,[
                    'class'=>'form-check-label'
                    ]) }}
                {{  Form::checkbox('name', 'value2', true,[
                   'class'=>'form-check-input'
                   ])  }}
                {{ Form::label('核選2',null,[
                    'class'=>'form-check-label'
                    ]) }}
                {{  Form::checkbox('name', 'value3', true,[
                    'class'=>'form-check-input'
                    ])  }}
                {{ Form::label('核選3',null,[
                    'class'=>'form-check-label'
                    ]) }}
            </div>

        </div>

    </div>

{{--新增與修改區段--}}
@if(request()->segment(4)=='edit')
    {{ Form::hidden('_method',"PUT") }}
    {{ Form::submit('修改',['class'=>'btn btn-success']) }}
    {{ Form::hidden('id',$model->id) }}
@else
    {{Form::submit('新增',['class'=>'btn btn-success']) }}
@endif
</fieldset>

{{--表單結束--}}
{{ Form::close() }}