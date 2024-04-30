<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatib
    le" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <title>Trax-API</title>
</head>

<body>

    <div class="container  col-md-6">
        @if (session()->has('success'))
            <span class="alert text-success">{{ session()->get('success') }}</span>
        @endif
        <div class="card mt-4">
            <div class="card-body">
                <form action="{{ route('verify.kit') }}" method="post">
                    @csrf
                    <div class="">
                        <label for="">Enter Kit No</label>
                        <input type="text" class="form-control" name="kit_no" required>
                    </div>
                    <input type="submit" value="Verify kit" class="btn btn-primary btn-sm mt-2" name="submit" />
                    <input type="submit" value="Check status" class="btn btn-primary btn-sm mt-2" name="submit" />
                    <input type="submit" value="Get pdf" class="btn btn-primary btn-sm mt-2" name="submit" />
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

</html>
