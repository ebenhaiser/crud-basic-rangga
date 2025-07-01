<x-layout>
    <div class="card">
        <div class="card-header">
            @if (request()->routeIs('edit.menu'))
                <h1>Edit Menu</h1>
            @else
                <h1>Add Menu</h1>
            @endif
        </div>
        <div class="card-body">
            <form action="{{ request()->routeIs('edit.menu') ? route('update.menu', $menu->id) : route('create.menu') }}"
                method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Insert Menu Name"
                            value="{{ request()->routeIs('edit.menu') ? $menu->name : '' }}">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="" class="form-label">Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">-- Choose Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ request()->routeIs('edit.menu') && $menu->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Insert Menu Price"
                            value="{{ request()->routeIs('edit.menu') ? $menu->price : '' }}">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="" class="form-label">Availability</label>
                        <select name="is_available" id="" class="form-control">
                            <option value="">-- Select Availability --</option>
                            <option value="0"
                                {{ request()->routeIs('edit.menu') && $menu->is_available == 0 ? 'selected' : '' }}>
                                Not
                                Available</option>
                            <option value="1"
                                {{ request()->routeIs('edit.menu') && $menu->is_available == 1 ? 'selected' : '' }}>
                                Available</option>
                        </select>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" class="form-control" placeholder="Input Menu Description">{{ request()->routeIs('edit.menu') ? $menu->description : '' }}</textarea>
                    </div>
                </div>
                <div align="right">
                    @if (request()->routeIs('edit.menu'))
                        <button class="btn btn-primary">Edit</button>
                    @else
                        <button class="btn btn-primary">Add</button>
                    @endif
                </div>
            </form>
        </div>
    </div>
</x-layout>
