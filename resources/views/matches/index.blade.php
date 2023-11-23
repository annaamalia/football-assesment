@include('master.index')

<form action="{{ route('matches.store') }}" method="POST">
    @csrf
    <div class="card mx-5">
        <div class="form-group my-5 mx-5">
            <label for="club_id_home">Home Club</label>
            <input type="text" class="form-control" id="club_id_home" name="club_id_home" required>
        </div>
        <div class="form-group mb-5 mx-5">
            <label for="club_id_away">Away Club</label>
            <input type="text" class="form-control" id="club_id_away" name="club_id_away" required>
        </div>
        <div class="form-group mb-5 mx-5">
            <label for="score_home">Score Club Home</label>
            <input type="number" class="form-control" id="score_home" name="score_home" required>
        </div>
        <div class="form-group mb-5 mx-5">
            <label for="score_away">Score Club Away</label>
            <input type="number" class="form-control" id="score_away" name="score_away" required>
        </div>
        <button type="submit" class="btn btn-primary mb-3 mx-5">Submit</button>
    </div>
</form>
