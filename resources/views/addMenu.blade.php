<x-layout>
    <div class="card">
        <div class="card-header">
            <h1>Add Menu</h1>
        </div>
        <div class="card-body">
            <form action="">
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Insert Menu Name">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="" class="form-label">Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">-- Choose Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Insert Menu Price">
                    </div>
                    <div class="col-sm-6 mb-3">
                        <label for="" class="form-label">Availability</label>
                        <select name="is_available" id="" class="form-control">
                            <option value="">-- Select Availability --</option>
                            <option value="0">Not Available</option>
                            <option value="1">Available</option>
                        </select>
                    </div>
                    <div class="col-sm-12 mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" class="form-control" placeholder="Input Menu Description"></textarea>
                    </div>
                </div>
                <div align="right">
                    <button class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
