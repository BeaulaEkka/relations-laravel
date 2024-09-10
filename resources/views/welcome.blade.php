<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>

<body>
    <!-- Display Users and Their Phone Numbers -->
    <h1>Users and Their Phone Numbers</h1>

    @if ($users->isEmpty())
        <p>No users found.</p>
    @else
        <table border="1">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone->number ?? 'N/A' }}</td> <!-- Handle null values for phone number -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <!-- Display Users and Their Posts -->
    <h2>Users and Their Posts</h2>
    @foreach ($users as $user)
        <h3>User: {{ $user->name }}</h3>
        <p>Email: {{ $user->email }}</p>
        <p>Phone: {{ $user->phone->number ?? 'No phone' }}</p>

        <h4>Posts:</h4>
        @if ($user->posts->isEmpty())
            <p>No posts found for this user.</p>
        @else
            <ul>
                @foreach ($user->posts as $post)
                    <li>{{ $post->title }}</li>
                @endforeach
            </ul>
        @endif
    @endforeach

    <!-- Display Students and Their Courses -->
    <h1>Students and Their Courses</h1>
    @foreach ($students as $student)
        <h2>Student Name:{{ $student->name }}</h2>

        @foreach ($student->courses as $course)
            <p>Course Name:{{ $course->name }}</p>
            <p>Enrolled At:{{ $course->pivot->enrolled_at}}</p>
        @endforeach
    @endforeach
    {{-- @foreach ($students as $student)
        <h3>Student: {{ $student->name }}</h3>

        <h4>Courses:</h4>
        @if ($student->courses->isEmpty())
            <p>No courses found for this student.</p>
        @else
            <ul>
                @foreach ($student->courses as $course)
                    <li>{{ $course->name }}</li>
                @endforeach
            </ul>
        @endif
    @endforeach --}}

</body>

</html>
