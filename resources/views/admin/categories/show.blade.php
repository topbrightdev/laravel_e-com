@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">

    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if($category)
            <div class="box">
                <div class="box-body">
                    <h2>Category</h2>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="col-md-4">Name</td>
                            <td class="col-md-4">Description</td>
                            <td class="col-md-4">Cover</td>
                        </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>{{ $category->cover }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                @if(!$categories->isEmpty())
                <hr>
                    <div class="box-body">
                        <h2>Sub Categories</h2>
                        <table class="table">
                            <tbody>
                            <tr>
                                <td class="col-md-4">Name</td>
                                <td class="col-md-4">Description</td>
                                <td class="col-md-4">Cover</td>
                            </tr>
                            </tbody>
                            <tbody>
                                @foreach($categories as $cat)
                                    <tr>
                                        <td><a href="{{route('admin.categories.show', $cat->id)}}">{{ $cat->name }}</a></td>
                                        <td>{{ $cat->description }}</td>
                                        <td>{{ $cat->cover }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
                @if(!$products->isEmpty())
                    <div class="box-body">
                        <h2>Products</h2>
                        @include('admin.shared.products', ['products' => $products])
                    </div>
                @endif
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('admin.categories.index') }}" class="btn btn-default btn-sm">Back</a>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        @endif

    </section>
    <!-- /.content -->
@endsection
