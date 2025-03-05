
<form action="{{$action}}" method="post">

    @csrf
    @if($method === 'put')
        @method('PUT')
    @endif

    {{$slot}}

    <div>
        <button class="p-2 bg-gray-200" type="submit">{{$submittext}}</button>
    </div>
</form>
