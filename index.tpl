<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello world</title>
</head>
<body>
    <p>Course: {$details.label}</p>
    <p>Type: {$details.type}</p>
    <p>Goals: {$details.goals}</p>
    <ul>
    {foreach from=$classes item=class}
        <li>{$class}</li>
    {/foreach}
    </ul>
</body>
</html>