<!DOCTYPE html>
<html>
<head>
    <title>Job Listings</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .job {
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .job h2 {
            margin-top: 0;
            color: #333;
        }

        .job p {
            margin: 5px 0;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Job Listings</h1>

@foreach($jobs as $job)

<div class="job">

    <h2>{{ $job->title }}</h2>

    <p>
        <span class="label">Description:</span>
        {{ $job->description }}
    </p>

    <p>
        <span class="label">Company:</span>
        {{ $job->company }}
    </p>

    <p>
        <span class="label">Location:</span>
        {{ $job->location }}
    </p>

    <p>
        <span class="label">Salary:</span>
        ${{ number_format($job->salary, 2) }}
    </p>

</div>

@endforeach

</body>
</html>