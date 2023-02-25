<div>
    <input wire:model="search" type="text" placeholder="Search users..."/>
 
    <ul>
        <li>test</li>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>