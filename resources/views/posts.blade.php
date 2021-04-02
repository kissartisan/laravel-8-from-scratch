<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php foreach ($posts as $post) : ?>
    <article>
        <h1>
            <a href="/post/<?= $post->slug; ?>">
                <?= $post->title; ?>
            </a>
        </h1>

        <div>
            <?= $post->excerpt; ?>
        </div>
    </article>
    <?php endforeach; ?>

    <a href="/">Go Back</a>
</body>

</html>
