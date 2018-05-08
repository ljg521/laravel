@extends("template.master")

@section("top")
    @parent
    <p>这是child top</p>
@endsection


@section("content")
    @include("template.inc")
@endsection
