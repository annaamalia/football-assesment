@include('master.index')

<form action="{{ route('club.store') }}" method="POST">
    @csrf
    <div class="card mx-5">
        <div class="form-group my-5 mx-5">
            <label for="name" class="form-label">Nama Klub</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group mb-5 mx-5">
            <label for="city">Kota Klub</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>
        <button type="submit" class="btn btn-primary mb-3 mx-5">Submit</button>
    </div>
</form>