
<form action="{{$action}}" method="post" enctype="multipart/form-data">

    @csrf
    @if($method === 'put')
        @method('PUT')
    @endif

    {{$slot}}

    <div>
        <button class="p-2 bg-gray-200" type="submit">{{$submittext}}</button>
    </div>
</form>
