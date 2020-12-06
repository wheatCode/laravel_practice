@include('layout.head')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <form action="excel" method='post' enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">上傳檔案</label>
                    <input type="file" multiple="multiple" class="form-control"
                        accept="application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                        name="file[]">
                </div>
                <button type="submit" class="btn btn-success">確認</button>
            </form>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">row1</th>
                        <th scope="col">row2</th>
                        <th scope="col">row3</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($files as $file)
                    <tr>
                        <td>{{ $file->row1 }}</td>
                        <td>{{ $file->row2 }}</td>
                        <td>{{ $file->row3}}</td>
                    </tr>

                    @empty
                    <p>No file</p>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>
