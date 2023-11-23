@include('master.index')

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Klub</th>
            <th>Ma</th>
            <th>Me</th>
            <th>S</th>
            <th>K</th>
            <th>GM</th>
            <th>GK</th>
            <th>Point</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clubs as $key => $club)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $club->name }}</td>
                <td>{{ $club->matches_played }}</td>
                <td>{{ $club->wins }}</td>
                <td>{{ $club->draws }}</td>
                <td>{{ $club->losses }}</td>
                <td>{{ $club->goals_for }}</td>
                <td>{{ $club->goals_against }}</td>
                <td>{{ $club->points }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
