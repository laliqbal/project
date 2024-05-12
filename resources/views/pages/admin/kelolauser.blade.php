<x-dashboard-admin>
    @foreach ($data as $user)
        <table style="width:100%">
            <tr>
                <td>
                    nama: {{ $user->name }}<br>
                    Email: {{ $user->email }}<br>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        </table>
    @endforeach

</x-dashboard-admin>
