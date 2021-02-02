@extends('master')
@section('content')
<!-- Main content -->
<div class="col-sm-12">
  <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
    <thead>
      <tr role="row">
        <th class="sorting_desc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" aria-sort="descending">id</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">categroy Name</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="">Engine version</th>
        
        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="">action</th>
      </tr>
    </thead>
    <tbody>


      <tr role="row" class="odd">
        <td class="sorting_1 dtr-control">Webkit</td>
        <td>Safari 1.2</td>
        <td>OSX.3</td>
        <td style="">125.5</td>
        <td style=""><div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary">Left</button>
  <button type="button" class="btn btn-secondary">Middle</button>
  <button type="button" class="btn btn-secondary">Right</button>
</div></td>
      </tr>
    
    </tfoot>
  </table>
</div>
<!-- /.content -->

@endsection