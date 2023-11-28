<!DOCTYPE html>
<html>
<body>
<div class="container">
    <!-- Table with stripped rows -->
    <table class="table datatable">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Activity Name</th>
            <th scope="col">Activity Type</th>
            <th scope="col">Description</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Capacity</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($activities as $activity)
            <tr>
                <td>{{ $activity->id }}</td>
                <td>{{ $activity->acty_name }}</td>
                <td>{{ $activity->acty_desc }}</td>
                <td>{{ $activity->activityTypes->type_name }}</td>
                <td>{{ $activity->acty_start_date }}</td>
                <td>{{ $activity->acty_end_date }}</td>
                <td>{{ $activity->capacity }}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
    <!-- End Table with stripped rows -->
</div>
</body>
</html>
