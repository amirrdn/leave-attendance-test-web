@extends('includes.template')
@section('content')
<div class="container  mt-3">
    <div class="row flex-wrap">
        <div class="p-2 col-md-4">
            <button type="button" class="btn btn-primary">Tambah</button>
            <button type="button" class="btn btn-secondary">Import</button>
            <button type="button" class="btn btn-success">Export</button>
        </div>
        <div class="p-2 col-md-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <div class="p-2 col-md-4">
            <div class="mb-3">
                <select class="form-select" aria-label="Years">
                    <option selected>Years</option>
                    <option value="2022">2022</option>
                    <option value="2021">2021</option>
                    <option value="2020">2020</option>
                </select>
            </div>
        </div>
    </div>
</div>
@endsection