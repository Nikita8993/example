@extends('.layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <!--/.card-header -->
        <div class="card-body">
              <a href="Il route l'categories.create') }}" class="btn btn-primary mb-3">Добавить
                  категорию</a> 
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
  <р>Категорий пока нет...</p>
@endif
</div>
<!--/.card-body -->
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
@endsection