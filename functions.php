<?php
function isValidRecipe(array $recipes) 
{
    if (array_key_exists('is_enabled' , $recipes)){
        $isEnabled = $recipes['is_enabled'];
    } else {
        $isEnabled = false;
    }
    return $isEnabled;
}

function displayAuthor(string $authorEmail, array $users) : string
{
    for ($i = 0; $i < count($users); $i++) {
        $author = $users[$i];
        if ($authorEmail === $author['email']) {
            return $author['name'] . '(' . $author['age'] . ' ans)';
        }
    }
}

function getRecipes(array $recipes) : array
{
    $validRecipes = [];

    foreach($recipes as $recipe) {
        if (isValidRecipe($recipe)) {
            $validRecipes[] = $recipe;
        }
    }

    return $validRecipes;
}










?>