<div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ticket as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>

                    <td>


                        <a href="/update/{{ $item->id }}" class="badge bg-primary">Edit</a>
                        <a href="/delete/{{ $item->id }}" class="badge bg-danger">Delete</a>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

</div>
