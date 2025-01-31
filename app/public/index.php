<?php ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Translate This</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="bg-dark text-secondary px-4 py-5 text-center" style="height: 100vh">
    <div class="py-5">
        <h1 class="display-5 fw-bold text-white">Translate This</h1>
        <div class="col-lg-6 mx-auto">
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
                <p class="fs-5 mb-4"><?php echo 'Your translation goes here'; ?></p>
                <a href="/">Translate another</a>
            <?php else: ?>

                <p class="fs-5 mb-4">Select a language and enter your word(s).</p>

                <form method="post">
                    <div class="row g-3">
                        <div class="col">
                            <select name="language" class="form-select" aria-label="Default select example">
                                <option selected>Select a language</option>
                                <option value="1">French</option>
                                <option value="1">German</option>
                                <option value="1">Spanish</option>
                            </select>
                        </div>
                        <div class="col">
                            <input name="phrase" type="text" class="form-control" placeholder="Phrase" aria-label="Phrase">
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-outline-info" type="submit">Translate</button>
                        </div>
                    </div>
                </form>

            <?php endif; ?>

        </div>
    </div>
</div>
</body>
</html>