<div>
    <label for="{{$name}}">{{$label}}</label><br/>
    <input id="{{$name}}" name="{{$name}}" value="{{old($name, $value)}}"  class="border border-black"/>
    @error($name)
    <div class="text-red-500">{{$message}}</div>
    @enderror
</div>
