<div>
    <div>
        <div>
            <table class="table ">
                <thead>
                    <tr>
                        <td>name</td>
                        <td>email</td>
                        <td>role</td>
                        <td>role</td>
                    </tr>
                </thead>
                @foreach ($users as $user)
                    <tbody>
                        @if ($user->role == 1)
                            <tr class="h5 pb-2 mb-4 text-danger border-bottom border-danger">
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role }}</td>
                                <td class="text-center">
                                    <span>
                                        <a href="#" class="btn btn-secondary my-2 text-light">
                                            action
                                        </a>
                                        <a href="#" class="btn btn-secondary my-2 text-light">
                                            actionhhh
                                        </a>
                                        <livewire:block-users.block :user_id="$user" :key="time() . $user->id">
                                    </span>
                                </td>
                            </tr>
                        @else
                            <div>
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td class="text-center">
                                        <span>
                                            <a href="#" class="btn btn-secondary my-2 text-light">
                                                action</a>
                                            <a href="#" class="btn btn-secondary my-2 text-light">
                                                action
                                            </a>
                                        {{-- <livewire:block-users.block :user_id="$user" :key="time() . $user->id"> --}}

                                            <livewire:block-users.unblock :user_id="$user" :key="time() . $user->id">
                                        </span>
                                    </td>
                                </tr>
                            </div>
                        @endif
                @endforeach
            </table>
            {{ $users->links() }}
        </div>
    </div>
    
</div>
