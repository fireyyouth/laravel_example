<style>
    .grid_2 {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
</style>

<div>
    <div class="grid_2">
        @foreach($tasks as $task)
        {{ $task->name }}
        <form class="inline" action="/task/{{ $task->id }}" method=POST>
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type=submit>delete</button>
        </form>
        @endforeach
    </div>
</div>
<form method=POST action="/task">
    {{ csrf_field() }}
    <input type=text name="name">
    <button type=submit>add</button>
</form>
