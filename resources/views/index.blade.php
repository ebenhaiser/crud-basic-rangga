<x-layout>
    <div class="card">
        <div class="card-header">
            <h1>Menus</h1>
        </div>
        <div class="card-body">
            <div align="right">
                <a href="{{ route('add.menu') }}" class="btn btn-primary">Tambah</a>
            </div>
            <table class="mt-3 table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Available</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $key => $menu)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $menu->name }}</td>
                            <td>{{ $menu->description }}</td>
                            <td>{{ $menu->category->name }}</td>
                            <td>{{ $menu->price }}</td>
                            <td>{{ $menu->is_available == 0 ? 'Not Available' : 'Available' }}</td>
                            <td>
                                <a href="{{ route('delete.menu', $menu->id) }}"
                                    onclick="return confirm('Are you sure you want to delete this menu?')"
                                    class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
