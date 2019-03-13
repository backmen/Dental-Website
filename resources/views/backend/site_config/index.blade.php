@extends('backend.layout.master')
@push('css')
 <style>
     #table{
         width: 80% !important;
     }
     #table i{
         cursor: pointer;
         font-size: 18px;
         color: #2e59d9;
     }

 </style>
@endpush
@section('content')
    @if (count($siteConfig))
        <h3 class="py-2 px-5">Site Information</h3>
        @csrf
        <table id="table" class="table text-left mx-5">
        @foreach($siteConfig as $info)
                <tr>
                    <?php $id = uniqid(); $dbid = $info->id ?>
                    <td>Address</td>
                    <td onblur="update('{{$id}}','{{$dbid}}','address');"  id="{{$id}}">{{$info->address}}</td>
                    <td><i onclick="addContentEdit('{{$id}}');" class="fa fa-pencil"></i></td>
                </tr>
                <tr>
                    <?php $id = uniqid(); ?>
                    <td>Phone</td>
                    <td onblur="update('{{$id}}','{{$dbid}}','phone');" id="{{$id}}">{{$info->phone}}</td>
                    <td><i onclick="addContentEdit('{{$id}}');" class="fa fa-pencil"></i></td>
                </tr>
                <tr>
                    <?php $id = uniqid(); ?>
                    <td>Facebook</td>
                    <td onblur="update('{{$id}}','{{$dbid}}','facebook');" id="{{$id}}">{{$info->facebook}}</td>
                    <td><i onclick="addContentEdit('{{$id}}');" class="fa fa-pencil"></i></td>
                </tr>
                <tr>
                    <?php $id = uniqid(); ?>
                    <td>Twitter</td>
                    <td onblur="update('{{$id}}','{{$dbid}}','twitter');" id="{{$id}}">{{$info->twitter}}</td>
                    <td><i onclick="addContentEdit('{{$id}}');" class="fa fa-pencil"></i> </td>
                </tr>
                <tr>
                    <?php $id = uniqid(); ?>
                    <td>Instagram</td>
                    <td onblur="update('{{$id}}','{{$dbid}}','instagram');" id="{{$id}}">{{$info->instagram}}</td>
                    <td><i onclick="addContentEdit('{{$id}}');" class="fa fa-pencil"></i> </td>
                </tr>
                <tr>
                    <?php $id = uniqid(); ?>
                    <td>Pinterest</td>
                    <td onblur="update('{{$id}}','{{$dbid}}','pinterest');" id="{{$id}}">{{$info->pinterest}}</td>
                    <td><i onclick="addContentEdit('{{$id}}');" class="fa fa-pencil"></i></td>
                </tr>
            @endforeach
        </table>


    @else
        <a href="{{route('admin.site.config.create')}}" class="btn btn-primary">Add Site Info</a>
    @endif
@endsection

@push('js')
    <script>

        function addContentEdit(id) {
             i= $('#'+id);
            i.attr('contenteditable',true).focus();
        }

        function update(id,dbid, field) {
             i= $('#'+id);
             val = i.html().trim();

            token = $('input[name$=_token]').attr('value');
            if (confirm("Do you want to edit data ?")){
                $.post("{{route('admin.site.config.update')}}",{
                    _token  : token,
                    id      : dbid,
                    field   : field,
                    value   : val
                },function (data, status) {
                    if(data === 'false'){
                        location.reload();
                    }
                });
            }else{
                location.reload();
            }

            i.attr('contenteditable',false);
        }
    </script>
@endpush
