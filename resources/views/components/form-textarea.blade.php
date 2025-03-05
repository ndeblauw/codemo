<div>
    <label for="{{$name}}">{{$label}}</label><br/>
    <textarea id="{{$name}}" name="{{$name}}" class="border border-black">{{old($name, $value)}}</textarea>
    @error($name)
    <div class="text-red-500">{{$message}}</div>
    @enderror
</div>
