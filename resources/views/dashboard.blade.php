@include('master.index')

<div class="form-group flex-button-group justify-content-center">
    <div class="col-3 mt-1">
        <div class="col mx-3 my-3">
            <div class="card bg-dark">
                <div class="card-body">
                    <a href="{{ route('club.index') }}" class="nav-link text-decoration-none text-light text-center">Club Football</a>
                </div>
            </div>
        </div>
        <div class="col mx-3 my-3">
            <div class="card bg-dark">
                <div class="card-body">
                    <a href="{{ route('matches.index') }}" class="nav-link text-light text-center">Matches</a>
                </div>
            </div>
        </div>
    </div>
</div>