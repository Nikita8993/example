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
                    <h3 class="card-title">Список Категорий</h3>
                </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <!--/.card-header -->
                  <div class="card-body">
                        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Добавить категорию</a> 
                            @if (count($categories))
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover text-nowrap">
                                      <thead>
                                      <tr>
                                          <th style="width: 30px">#</th>
                                          <th>Наименование</th>
                                          <th>Slug</th>
                                          <th>Actions</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      @foreach ($categories as $category)
                                      <tr>
                                        <td>{{  $category->id }}</td>
                                        <td>{{ $category->title }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>

                                        <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-info btn-am float-left mr-1"> 
                                          <i class="fa fa-pencil-alt"></i>
                                        </a>

                                            <form action="{{ route('categories destroy', ['category' => $category->id]) }}" method="post" class="float-left">
                                                    @carf
                                                    @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-am"
                                                    onclick="return confirm('Подтвердите удаление')">
                                                    <i
                                                      class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>

                                      </tr>
                                      @endforeach
                                    </tbody>
                                  </table>
                                </div>
                      @else
                        Категорий пока нет...
                      @endif
                  </div>
            <!--/.card-body -->
        </div>
      </div>
        <!-- /.card-footer-->
      </div>
    </div>
  </div>
      <!-- /.card -->
</div>
    </section>
    <!-- /.content -->
  </div>
@endsection