@props(['bodyCsv']) @php $bodys = explode('@@', $bodyCsv) @endphp
@foreach($bodys as $body)
<p class="text-gray-500 overflow-ellipsis mb-5 text-justify indent-10">{{$body}}</p>
@endforeach
