<div>
    <ul>
        @foreach($tasks as $task)
        <li>{{ $task->name }}</li>
        @endforeach
    </ul>
</div>
<form method=POST action="/task">
    {{ csrf_field() }}
    <input type=text name="name">
    <button type=submit>add</button>
</form>
