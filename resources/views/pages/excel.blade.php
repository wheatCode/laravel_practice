<form action="/excel" method='post' enctype="multipart/form-data">
    @csrf
    <input id="fileId1" type="file"
        accept="application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
        name="file" />
    <input type="submit" value="確認">
</form>

{{$file?$file:''}}
