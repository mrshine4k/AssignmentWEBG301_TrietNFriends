@include('Admin.Navigation_bar');
    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <div class="col-md-12">
                <h2>Add a new category</h2>
                {{-- Notification --}}
                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                {{-- End notification --}}

                {{-- Start Form --}}
                <form action="{{ url('saveCategory') }}" method="POST" enctype="multipart/form-data">
                    
                    {{-- Enter category --}}
                    <div class="md-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter category name">
                    </div>
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <div class="md-3">
                        <label for="image" class="form-label">Category Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    @error('image')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url('listCategory') }}" class="btn btn-danger">Back</a>
                </form>
                {{-- End form --}}
            </div>
        </div>
    </div>
</body>

</html>
