<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <?php include "menu.php" ?>
    <?php include "menu.php" ?>
    
    <div class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <svg class="bi mt-4 mb-3" style="color: var(--bs-indigo);" width="100" height="100"><use xlink:href="#bootstrap"></use></svg>
            <h1 class="text-body-emphasis">Jumbotron with icon</h1>
            <p class="col-lg-8 mx-auto fs-5 text-muted">
            This is a custom jumbotron featuring an SVG image at the top, some longer text that wraps early thanks to a responsive <code>.col-*</code> class, and a customized call to action.
            </p>
            <div class="d-inline-flex gap-2 mb-5">
            <button class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
                Call to action
                <svg class="bi ms-2" width="24" height="24"><use xlink:href="#arrow-right-short"></use></svg>
            </button>
            <button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">
                Secondary link
            </button>
            </div>
        </div>
    </div>
    
    <?php include_once "footer.php" ?>
    
</body>
</html>