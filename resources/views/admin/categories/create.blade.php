@extends('admin.layouts.layouts')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Категории</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">неМногоГлавня</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Категорий</h3>
                </div>
                <form role="form" method="post" action="{{route('categories.store')}}">
                    @csrf 
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Название</label>
                            <input type="text" name="title"
                                class="form-control @error('title') is-invalid @enderror" id="title"
                                placeholder="Название">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Сохранить</button>
                    </div>
                </form>
                
              </div>
            </div>
        </div>
      </div>
</div>
      <!-- /.card -->
</div>
    </section>
    <!-- /.content -->
  </div>
@endsection