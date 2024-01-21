<div>
    <h3 class="text-center">Tâches</h3>
    <table class="table bg-white ">
        <thead>
            <tr>
                <th>N°</th>
                <th>Titre</th>
                <th>Utilisateur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td scope="row">{{ $task->id }}</td>
                <td>{{ $task->title }}</td>
                <td>{{ $task->user->name }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tasks->links() }}
</div>
