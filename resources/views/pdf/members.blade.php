<!DOCTYPE html>
<html>
<body>
<div class="container">
    <!-- Table with stripped rows -->
    <table class="table datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Birthday</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($members as $member)
            <tr>
                <td>{{ $member->id }}</td>
                <td>{{ $member->fname }}</td>
                <td>{{ $member->lname }}</td>
                <td>{{ $member->email }}</td>
                <td>{{ $member->phone }}</td>
                <td>{{ $member->dob }}</td>

            </tr>
        @endforeach

        </tbody>
    </table>
    <!-- End Table with stripped rows -->
</div>
</body>
</html>
