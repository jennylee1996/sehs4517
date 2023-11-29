<!DOCTYPE html>
<html>
<body>
<div class="container">
    <!-- Table with stripped rows -->
    <table class="table datatable">
        <thead>
        <tr>
            <th scope="col">Activity Name</th>
            <th scope="col">Activity Date</th>
            <th scope="col">Enrolled Member</th>
            <th scope="col">Member Phone</th>
            <th scope="col">Member Enrolled Date</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($enrolledActivities as $enrolledActivity)
            <tr>
                <td>{{ $enrolledActivity->activities->acty_name }}</td>
                <td>{{ $enrolledActivity->activities->acty_start_date . " To " . $enrolledActivity->activities->acty_end_date }}</td>
                <td>{{ $enrolledActivity->users->fname . " " . $enrolledActivity->users->lname}}</td>
                <td>{{ $enrolledActivity->users->phone}}</td>
                <td>{{ $enrolledActivity->enroll_date }}</td>

            </tr>
        @endforeach

        </tbody>
    </table>
    <!-- End Table with stripped rows -->
</div>
</body>
</html>
