<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Users</title>
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/css/font-awesome.min.css" rel="stylesheet">
    <link href="frontend/css/themify-icons.css" rel="stylesheet">
    <link href="frontend/css/elegant-icons.css" rel="stylesheet">
    <link href="frontend/css/flaticon-set.css" rel="stylesheet">
    <link href="frontend/css/magnific-popup.css" rel="stylesheet">
    <link href="frontend/css/swiper-bundle.min.css" rel="stylesheet">
    <link href="frontend/css/animate.css" rel="stylesheet">
    <link href="frontend/css/validnavs.css" rel="stylesheet">
    <link href="frontend/css/helper.css" rel="stylesheet">
    <link href="frontend/css/unit-test.css" rel="stylesheet">
    <link href="frontend/css/style.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Register Users</h1>

    <!-- frontend/register_view.blade.php -->

    <div class="container mt-4">
        <a class="btn btn-primary my-2" href="/register">Create User</a>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Services</th>
                    <th scope="col">Status</th>
                    <th scope="col">Updated On</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registers as $register)
                    <tr>
                        <th scope="row">{{ $register->id }}</th>
                        <td>{{ $register->name }}</td>
                        <td>{{ $register->email }}</td>
                        <td>{{ $register->service }}</td>
                        <td>
                            @if ($register->status == 1)
                                <span class="badge btn-success">Active</span>
                            @else
                                <span class="badge btn-danger ">Disabled</span>
                            @endif
                        </td>
                        <td>{{ $register->updated_at }}</td>
                        <td class="operation-column">
                            <a class="btn btn-primary" href="{{ url('/register/edit/' . $register->id) }}">Edit</a>
                            <form action="{{ url('/register/delete/' . $register->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this item?');"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete?');
        }
    </script>
</body>

</html>
