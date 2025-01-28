@props(['name' => ''])
@props(['id' => ''])
@props(['tabindex' => ''])
@props(['type' => ''])
@props(['control' => ''])

<div class="form-group">
    <label class="form-label" for="dblProfile">{{$label}}</label>
    <div class="input-group">
        <div class="input-group-text">@</div>
        @if ($control == 1)
            <input type="{{$type}}" class="form-control" id="{{$id}}" name="{{$name}}" placeholder="Escribe {{$label}}.." tabindex="{{$tabindex}}">
        @endif
        @if ($control == 2)
            <select class="form-control" name="{{$name}}" id="{{$id}}" tabindex="{{$tabindex}}">
                <option value="0">--Seleccione {{ Str::ucfirst($label) }}--</option>
            </select>
        @endif
    </div>
</div>